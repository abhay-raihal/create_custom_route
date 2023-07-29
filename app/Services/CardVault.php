<?php

namespace RZP\Services;

use \WpOrg\Requests\Hooks as Requests_Hooks;
use Aws\Kms\KmsClient;
use RZP\Error\ErrorClass;
use RZP\Exception;
use RZP\Models\Card;
use RZP\Error;
use RZP\Models\Base;
use RZP\Models\Merchant;
use RZP\Constants\Mode;
use RZP\Trace\TraceCode;
use Razorpay\Trace\Logger as Trace;
use RZP\Models\Card\Validator;
use RZP\Http\Request\Requests;
use RZP\Models\Payment;
use RZP\Gateway\Base\Metric;
use RZP\Models\Customer\Token;

class CardVault
{
    const TOKEN             = 'token';
    const ERROR             = 'error';
    const VALUE             = 'value';
    const SECRET            = 'secret';
    const SUCCESS           = 'success';
    const NAMESPACE         = 'namespace';
    const SCHEME            = 'scheme';
    const TOKENEX_TOKEN     = 'tokenex_token';
    const TOKENEX_TOKENS    = 'tokenex_tokens';
    const X_RAZORPAY_TASKID = 'X-Razorpay-TaskId';
    const X_RZP_TESTCASE_ID = 'X-RZP-TESTCASE-ID';
    const BU_NAMESPACE      = 'bu_namespace';
    const TEMP_SAVE         = 'temp_save';

    const TOKENEX_VAULT_MAPPING   = 'tokenex_vault_mapping';
    const SERVICE_PROVIDER_TOKENS = 'service_provider_tokens';

    const REQUEST_TIMEOUT = 20;

    // This is for internal routes in vault - tokenize/detokenize
    const INTERNAL_REQUEST_TIMEOUT = 5;

    const MAX_RETRY_COUNT = 1;

    // card-vault namespaces
    const CARD      =   'card';
    const MPAN      =   'mpan';
    const RAZORPAYX =   'razorpayx';
    const BU_NAMESPACE_MPAN = 'payments_mpan';

    const TOKENIZATION_ROUTES = array(Card\Constants::FETCH_PAR_VAL, Card\Constants::TOKENS_CRYPTOGRAM, Card\Constants::TOKENS, Card\Constants::TOKENS_MIGRATE, Card\Constants::TOKENS_FETCH, Card\Constants::TOKENS_DELETE, Card\Constants::TOKENS_UPDATE, Card\Constants::FETCH_FINGERPRINTS);

    protected $baseUrl;

    protected $config;

    protected $trace;

    protected $app;

    protected $request;

    protected $cardNumberToToken = [];

    protected $namespace;

    protected $kmsClient;
    /**
     * @var string
     */
    private $key;
    /**
     * @var string
     */
    private $secret;

    public function __construct($app, $namespace = 'card')
    {
        $this->app = $app;

        $this->mode = $app['rzp.mode'] ?? Mode::LIVE;

        $this->trace = $app['trace'];

        $this->config = $app['config']->get('applications.card_vault');

        $this->baseUrl = $this->config['url'];

        $this->request = $app['request'];

        $this->namespace = $namespace;

        $this->kmsClient = new KmsClient([
             'version' => $this->config['version'],
             'region'  => $this->config['region']
        ]);

        // default for cards
        $keyName = 'key';
        $secretName = 'secret';
        if ($namespace != self::CARD) {
            $keyName = $namespace . '_key';
            $secretName = $namespace . '_secret';
        }

        $this->key = $this->config[$keyName];
        $this->secret = $this->config[$secretName];
    }

    public function ping()
    {
        try
        {
            $payload = [
                self::SECRET => '4111111111111111',
            ];

            $response = $this->sendRequest('tokenize/ping', 'post', $payload);

            $vault = Card\Vault::RZP_ENCRYPTION;

            if (isset($response['scheme']) === true)
            {
               $vault = Card\Vault::getVaultName($response['scheme']);
            }

            if ((empty($response[self::TOKEN]) === true) or
                ($vault === Card\Vault::RZP_ENCRYPTION))
            {
                throw new Exception\RuntimeException(
                    'card vault ping request failed', [Error\Error::DATA => $response]);
            }

            return true;
        }
        catch(\Throwable $e)
        {
            $this->trace->traceException($e, Trace::ERROR, TraceCode::VAULT_PING_REQUEST_FAILED, []);
        }

        return false;

    }

    public function tokenize($input,$buNamespace=null)
    {
        $key  = '';

        if ($this->namespace !== self::CARD)
        {
            $payload = [
                self::SECRET => $input['secret']
            ];

            $key = $this->namespace. '_' . $input['secret'];

            if ($this->namespace === self::MPAN)
            {
                $buNamespace = self::BU_NAMESPACE_MPAN;
            }
        }
        else
        {
            if (array_key_exists('card', $input) === true)
            {
                $payload = [
                    self::SECRET => $input['card'],
                ];

                $key = $input['card'];
            }
        }

        if (array_key_exists(self::SCHEME, $input) === true)
        {
            $payload[self::SCHEME] = $input[self::SCHEME];

            $key = $key . '_' . $input[self::SCHEME];
        }

        if (empty($this->cardNumberToToken[$key]) === false)
        {
            return $this->cardNumberToToken[$key];
        }

        $vaultTempSaveNamespace = "cards";

        if (isset($buNamespace) === true ) {
            $payload += [
                    self::BU_NAMESPACE => $buNamespace,
            ];

            $vaultTempSaveNamespace = $buNamespace;
        }

        /** Razorx experiment to save the cards data temporarily in vault db
         * for a  period of 5 days
         * @var  $tempSaveVariant
         */

        $razorxFeature = Merchant\RazorxTreatment::VAULT_TEMP_SAVE ."_". $vaultTempSaveNamespace;
        $tempSaveVariant = $this->app['razorx']->getTreatment($this->request->getTaskId(),$razorxFeature , $this->mode);

        $this->trace->info(TraceCode::VAULT_TEMP_SAVE_RAZORX_VARIANT, [
            'vault_temp_save_namespace' => $vaultTempSaveNamespace,
            'temp_save_variant'  => $tempSaveVariant,
            '$razor_feature'  => $razorxFeature,
        ]);

        if ((strtolower($tempSaveVariant) === 'on'))
        {
            $payload += [
                self::TEMP_SAVE => true,
            ];
        }

        $response = $this->sendRequest('tokenize', 'post', $payload);

        if (empty($response[self::TOKEN]) === true)
        {
            throw new Exception\RuntimeException(
                'card vault request failed', [Error\Error::DATA => $response]);
        }

        $this->cardNumberToToken[$key] = $response[self::TOKEN];

        return $response[self::TOKEN];
    }

    public function getTokenAndFingerprint($input)
    {
        $payload = [
            self::SECRET => $input['card'],
        ];

        $vaultTempSaveNamespace = "cards";

        if (isset($input['bu_namespace'])=== true ) {
             $payload += [
                 self::BU_NAMESPACE => $input['bu_namespace'],
             ];

            $vaultTempSaveNamespace = $input['bu_namespace'];
        }

        /** Razorx experiment to save the cards data temporarily in vault db
         * for a  period of 5 days
         * @var  $tempSaveVariant
         */

        $razorxFeature = Merchant\RazorxTreatment::VAULT_TEMP_SAVE . "_" .$vaultTempSaveNamespace;
        $tempSaveVariant = $this->app['razorx']->getTreatment($this->request->getTaskId(),$razorxFeature , $this->mode);

        $this->trace->info(TraceCode::VAULT_TEMP_SAVE_RAZORX_VARIANT, [
            'vault_temp_save_namespace' => $vaultTempSaveNamespace,
            'temp_save_variant'  => $tempSaveVariant,
            '$razorx_feature'  => $razorxFeature,
        ]);

        if ((strtolower($tempSaveVariant) === 'on'))
        {
            $payload += [
                self::TEMP_SAVE => true,
            ];
        }

        $key = $input['card'];

        $response = $this->sendRequest('tokenize', 'post', $payload);

        if (empty($response[self::TOKEN]) === true)
        {
            throw new Exception\RuntimeException(
                'card vault request failed', [Error\Error::DATA => $response]);
        }

        return $response;
    }

    public function saveCardMetaData($payload)
    {
        $response = $this->sendRequest('cards/metadata', 'post', $payload);

        return $response;
    }

    public function getCardMetaData($payload)
    {
        $response = $this->sendRequest('cards/metadata/fetch', 'post', $payload);

        return $response;
    }

    public function validateToken($token)
    {
        $input = [
            self::TOKEN => $token
        ];

        $response = $this->sendRequest('validate', 'post', $input);

        return $response;
    }

    public function detokenizeWithNamespace($token ,$buNamespace, $namespace)
    {
        $this->namespace = $namespace;

        $input = [
            self::TOKEN         => $token,
        ];

        if ($this->namespace === self::MPAN)
        {
            $buNamespace = self::BU_NAMESPACE_MPAN;
        }

        if (isset($buNamespace) === true ) {
            $input += [
                self::BU_NAMESPACE => $buNamespace,
            ];
        }

        $response = $this->sendRequest('detokenize', 'post', $input);

        return $response[self::VALUE];
    }

    public function detokenize($token ,$buNamespace)
    {
        $input = [
            self::TOKEN         => $token,
        ];

        if ($this->namespace === self::MPAN)
        {
            $buNamespace = self::BU_NAMESPACE_MPAN;
        }

        if (isset($buNamespace) === true ) {
            $input += [
                self::BU_NAMESPACE => $buNamespace,
            ];
        }

        $response = $this->sendRequest('detokenize', 'post', $input);

        return $response[self::VALUE];
    }

    public function getVaultTokenFromTempToken($tempVaultToken, $buNamespace = null)
    {
        $input = [
            self::TOKEN  => $tempVaultToken,
        ];

        $vaultTempSaveNamespace = "cards";

        if (isset($buNamespace) === true ) {
            $input += [
                    self::BU_NAMESPACE => $buNamespace,
            ];

            $vaultTempSaveNamespace = $buNamespace;
        }

        /** Razorx experiment to save the cards data temporarily in vault db
         * for a  period of 5 days
         * @var  $tempSaveVariant
         */

        $razorxFeature = Merchant\RazorxTreatment::VAULT_TEMP_SAVE ."_". $vaultTempSaveNamespace;
        $tempSaveVariant = $this->app['razorx']->getTreatment($this->request->getTaskId(),$razorxFeature , $this->mode);

        $this->trace->info(TraceCode::VAULT_TEMP_SAVE_RAZORX_VARIANT, [
            'vault_temp_save_namespace' => $vaultTempSaveNamespace,
            'temp_save_variant'  => $tempSaveVariant,
            '$razor_feature'  => $razorxFeature,
        ]);

        if ((strtolower($tempSaveVariant) === 'on'))
        {
            $input += [
                self::TEMP_SAVE => true,
            ];
        }


        $response = $this->sendRequest('token/migrate', 'post', $input);

        return $response;
    }

    public function deleteToken($tempVaultToken)
    {
        $input = [
            self::TOKEN  => $tempVaultToken,
        ];

        $response = $this->sendRequest('token/delete', 'post', $input);

        return $response;
    }

    public function sendRequest($url, $method, $data = null)
    {
        // new namespaces(other than 'card') requires namespace to be explicitly mentioned in the requestdata
        if ($this->namespace !== self::CARD)
        {
            $data[self::NAMESPACE]  =  $this->namespace;
        }

        $tokenizationUrl = $url;
        $vaultAction = $url;

        // temporary code to debug
        if (($url === 'tokenize') or
            ($url === 'detokenize'))
        {
            $trackId = Base\UniqueIdEntity::generateUniqueId();

            $url = $url . '/track/' . $trackId;
        }

        $url = $this->baseUrl . $url;

        if ($data === null)
            $data = '';

        $testCaseId = $this->app['request']->header('X-RZP-TESTCASE-ID');

        $headers[self::X_RZP_TESTCASE_ID] = $testCaseId;

        $headers['Content-Type'] = 'application/json';

        $headers['Accept'] = 'application/json';

        $headers[self::X_RAZORPAY_TASKID] = $this->request->getTaskId();

        $headers['X-Razorpay-Mode'] =  $this->app['rzp.mode'] ?? Mode::LIVE;

        $options = [
            'timeout' => $this->getTimeOut($url),
            'auth' => [
                $this->key,
                $this->secret
            ],
            'hooks' => $this->getRequestHooks(),
        ];

        $request = [
            'url' => $url,
            'method' => $method,
            'headers' => $headers,
            'options' => $options,
            'content' => $data
        ];


        $this->trace->info(TraceCode::CARD_VAULT_REQUEST, [
            'url' => $request['url'],
            'namespace' => $this->namespace,
            'bu_namespace' => isset($data[self::BU_NAMESPACE]) ? $data[self::BU_NAMESPACE] : null,
            'temp_save' => isset($data[self::TEMP_SAVE]) ? $data[self::TEMP_SAVE] : false,
        ]);

        $isTokenisationRoute = in_array($tokenizationUrl, self::TOKENIZATION_ROUTES);

        if($isTokenisationRoute)
        {

            list($action, $event) = $this->fetchActionAndEvent($isTokenisationRoute, $tokenizationUrl);

            (new Token\Event())->pushEvents($request['content'], $event, "_REQUEST_SENT");
        }

        $response = $this->sendCardVaultRequest($request);

        $network = '';

        if(!empty($request["content"]["iin"]["network"]))
        {
            $network = $request["content"]["iin"]["network"];
        }


        if($isTokenisationRoute)
        {
            $this->handleVaultResponse($request, $response, $network, $action, $event);
        }
        else {
            $this->checkErrors($data,$response,$vaultAction);
        }
        return json_decode($response->body, true);
    }

    public function sendBulkRequest($url, $method, $data = null)
    {
        $action = $url;

        $url = $this->baseUrl . $url;

        if ($data === null)
            $data = '';

        $headers['Content-Type'] = 'application/json';

        $headers['Accept'] = 'application/json';

        $headers[self::X_RAZORPAY_TASKID] = $this->request->getTaskId();

        $options = [
            'timeout' => self::REQUEST_TIMEOUT,
            'auth' => [
                $this->key,
                $this->secret
            ],
            'hooks' => $this->getRequestHooks(),
        ];

        $request = [
            'url' => $url,
            'method' => $method,
            'headers' => $headers,
            'options' => $options,
            'content' => $data
        ];


        $this->trace->info(TraceCode::CARD_VAULT_REQUEST, [
            'url' => $request['url'],
            'content'  => $data
        ]);

        $response = $this->sendCardVaultRequest($request);

        $this->checkErrors($request, $response, $action);

        return json_decode($response->body, true);
    }

    protected function getRequestHooks()
    {
        $hooks = new Requests_Hooks();

        $hooks->register('curl.before_send', [$this, 'setCurlOptions']);

        return $hooks;
    }

    protected function getTimeOut($url)
    {
        if($url === Card\Constants::TOKENIZE || $url === Card\Constants::DETOKENIZE)
        {
            return self::INTERNAL_REQUEST_TIMEOUT;
        }

        return self::REQUEST_TIMEOUT;
    }

    public function setCurlOptions($curl)
    {
        curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
    }

    protected function sendCardVaultRequest($request)
    {
        $method = $request['method'];

        $retryCount = 0;

        while (true)
        {
            try
            {
                $response = Requests::$method(
                    $request['url'],
                    $request['headers'],
                    json_encode($request['content']),
                    $request['options']);

                break;
            }
            catch(\WpOrg\Requests\Exception $e)
            {
                // check curl error, increase retry count if timeout
                // throw the error if retry count reaches max allowed value
                if (($retryCount < self::MAX_RETRY_COUNT) and
                    (curl_errno($e->getData()) === CURLE_OPERATION_TIMEDOUT))
                {
                    $this->trace->info(
                        TraceCode::CARD_VAULT_RETRY,
                        [
                            'message'           => $e->getMessage(),
                            'type'              => $e->getType(),
                            Error\Error::DATA   => $e->getData()
                        ]);

                    $retryCount++;
                }
                else
                {
                    throw $e;
                }
            }
        }

        return $response;
    }

    protected function checkErrors($request,$response,$action)
    {
        $responseBody = json_decode($response->body, true);

        $success = $responseBody[self::SUCCESS];

        $this->trace->info(
            TraceCode::CARD_VAULT_RESPONSE,
            [
                'response'    => $this->getRedactedData($responseBody),
                'namespace' => $this->namespace,
                'status_code' => $response->status_code,
            ]);

        if ($response->status_code >= 500)
        {
            $this->pushVaultDimensions($request, Metric::FAILED, $response->status_code, $action);

            throw new Exception\RuntimeException(
                'Vault request failed', [Error\Error::DATA => $responseBody]);
        }

        if ($success === false || $success === 0)
        {
            $error = $responseBody[self::ERROR];

            $this->pushVaultDimensions($request, Metric::FAILED, $response->status_code, $action);

            // case where validate token return success false because of invalid token
            // error will be empty
            if (empty($error) === false)
            {
                $data = [
                    'error' => $error,
                ];

                throw new Exception\RuntimeException('card vault request failed', $data);
            }
        }

        $this->pushVaultDimensions($request, Metric::SUCCESS, $response->status_code, $action);

    }

    protected function getRedactedData($response)
    {
        // in detokenize response will contain card number
        unset($response[self::VALUE]);

        // in network tokenization response will contain tokenized card number, cryptogram value etc
        unset($response[self::SERVICE_PROVIDER_TOKENS]);

        unset($response['iin']);
        unset($response['name']);
        unset($response['expiry_month']);
        unset($response['expiry_year']);

        return $response;
    }

    public function createVaultToken(array $input): array
    {
        (new Validator)->validateInput('create_vault_token', $input);

        $this->trace->info(TraceCode::VAULT_TOKEN_CREATE_INIT);

        $input[self::SECRET] = str_replace(array("\r", "\n"), '', $input[self::SECRET]);

        $response = $this->sendRequest('tokenize', 'post', $input);

        if (empty($response[self::TOKEN]) === true)
        {
            throw new Exception\RuntimeException(
                'Tokenize request failed', [Error\Error::DATA => $response]);
        }

        $this->trace->info(TraceCode::VAULT_TOKEN_CREATE_COMPLETE);

        return $response;
    }

    public function createTokenizedCard(array $input): array
    {
        $this->trace->info(TraceCode::VAULT_CREATE_TOKEN);

        $response = $this->sendRequest(Card\Constants::TOKENS, 'post', $input);

        return $response;
    }

    public function migrateToTokenizedCard(array $input): array
    {
        $this->trace->info(TraceCode::VAULT_MIGRATE_TOKEN);

        $response = $this->sendRequest(Card\Constants::TOKENS_MIGRATE, 'post', $input);

        if ($response[self::SUCCESS] === false)
        {
            throw new Exception\RuntimeException(
                'Network Token create request failed', ['data' => $response]);
        }

        return $response;
    }

    public function renewVaultToken(): array
    {
        $this->trace->info(TraceCode::VAULT_TOKEN_RENEWAL_REQUEST);

        $response = $this->sendRequest(Card\Constants::TOKENS_RENEWAL, 'post', null);

        $this->trace->info(
            TraceCode::VAULT_TOKEN_RENEWAL_RESPONSE,
            [
                'response' => $response
            ]);

        if ($response[self::SUCCESS] === false)
        {
            throw new Exception\RuntimeException(
                'Service Token renewal request failed', [Error\Error::DATA => $response]);
        }

        return $response;
    }

    public function encrypt(array $input)
    {
        if ($this->config['kms_mock'] === true)
        {
            return $this->app['encrypter']->encrypt($input['card']);
        }

        $result = $this->kmsClient->encrypt([
            'KeyId' => $this->config['key_id'],
            'Plaintext' => $input['card'],
        ]);

        return base64_encode($result->get('CiphertextBlob'));
    }

    public function decrypt($token)
    {
        if ($this->config['kms_mock'] === true)
        {
            return $this->app['encrypter']->decrypt($token);
        }

       $result = $this->kmsClient->decrypt([
            'CiphertextBlob' => base64_decode($token),
        ]);

       return $result->get('Plaintext');
    }

    public function fetchCryptogram($input): array
    {
        $this->trace->info(TraceCode::VAULT_FETCH_CRYPTOGRAM);

        $response = $this->sendRequest(Card\Constants::TOKENS_CRYPTOGRAM, 'post', $input);

        return $response;
    }

    public function fetchToken($input): array
    {
        $this->trace->info(TraceCode::VAULT_FETCH_TOKEN);

        $response = $this->sendRequest(Card\Constants::TOKENS_FETCH, 'post', $input);

        return $response;
    }

    public function fetchParValue($input) : array
    {
        $response = $this->sendRequest(Card\Constants::FETCH_PAR_VAL, 'post', $input);

        return $response;
    }

    public function deleteNetworkToken($input): array
    {
        $this->trace->info(TraceCode::VAULT_DELETE_TOKEN);

        $response = $this->sendRequest(Card\Constants::TOKENS_DELETE, 'post', $input);

        return $response;
    }

    public function updateToken($input): array
    {
        $this->trace->info(TraceCode::VAULT_UPDATE_TOKEN);

        $response = $this->sendRequest(Card\Constants::TOKENS_UPDATE, 'post', $input);

        return $response;
    }

    public function fetchFingerprint($input)
    {
        $this->trace->info(TraceCode::FETCH_FINGERPRINT);

        $response = $this->sendRequest(Card\Constants::FETCH_FINGERPRINTS, 'post', $input);

        return $response;
    }

    public function migrateVaultTokenNamespace($input)
    {
        $this->trace->info(TraceCode::VAULT_MIGRATE_TOKEN_BULK_REQUEST, ['input' => $input]);

        $tokenInput['tokens'] = $input;

        $response = $this->sendBulkRequest(Card\Constants::TOKENS_MIGRATE_BULK, 'post', $tokenInput);

        $this->trace->info(TraceCode::VAULT_MIGRATE_TOKEN_BULK_RESPONSE, ['response' => $response]);

        return $response;
    }

    protected function handleVaultResponse($request, $response, $network = null, $action = null, $event = null)
    {
        if(empty($response) === true)
        {
            $this->trace->info(TraceCode::VAULT_SERVICE_INTERNAL_ERROR);

            throw new Exception\GatewayErrorException(
                'SERVER_ERROR_VAULT_TOKENIZE_FAILED'
            );
        }

        $statusCode = $response->status_code;
        $errorClass  = "" ;
        try {

            $this->checkForErrors($response, $errorClass);

            $this->pushDimensions($request, Metric::SUCCESS, $statusCode, $action);

            (new Token\Event())->pushEvents($request['content'], $event, "_RESPONSE_RECEIVED", $response);
        }

        catch(Exception\BaseException $e) {
            $error = $e->getError();
            $this->pushDimensions($request, Metric::FAILED, $statusCode, $action, $e, $errorClass);

            (new Token\Event())->pushEvents($request['content'], $event, "_RESPONSE_RECEIVED", $response, $e);

            $internalErrorCode = $error->getInternalErrorCode();

            $error->setDetailedError($internalErrorCode, Payment\Method::CARD, $network);

            $error->setPaymentMethod(Payment\Method::CARD);

            throw $e;
        }
    }

    protected function checkForErrors($response,& $errorClass)
    {
        $responsebody = json_decode($response->body, true);

        $this->trace->info(
            TraceCode::CARD_VAULT_RESPONSE,
            [
                'response'    => $this->getRedactedData($responsebody),
                'namespace'   => $this->namespace,
                'status_code' => $response->status_code,
            ]);

        if ((empty($responsebody['success']) === false) and
            ($responsebody['success'] === true))
        {
            return;
        }

        $error_code = '';

        if(!empty($responsebody[self::ERROR][Error\Error::INTERNAL_ERROR_CODE]))
        {
            $error_code = $responsebody[self::ERROR][Error\Error::INTERNAL_ERROR_CODE];
        }

        $class = $this->getErrorClassFromErrorCode($error_code);
        $errorClass = $class;

        switch ($class)
        {
            case ErrorClass::GATEWAY:
                $this->handleGatewayErrors($responsebody[self::ERROR], $responsebody);
                break;

            case ErrorClass::BAD_REQUEST:
                $this->handleBadRequestErrors($responsebody[self::ERROR], $responsebody);
                break;

            case ErrorClass::SERVER:
                $this->handleInternalServerErrors($responsebody[self::ERROR]);
                break;

            default:
                throw new Exception\InvalidArgumentException('Not a valid error code class',
                    ['errorClass' => $class]);
        }
    }

   protected function getErrorClassFromErrorCode($code)
   {
       $pos = strpos($code, '_');

       $class = substr($code, 0, $pos);

       if ($class == 'BAD') {
           $class = ErrorClass::BAD_REQUEST;
       }

       return $class;
   }

   protected  function handleGatewayErrors(array $error, array $response)
   {
       $errorCode = $error[Error\Error::INTERNAL_ERROR_CODE];

       $gatewayErrorCode = $error[Error\Error::GATEWAY_ERROR_CODE] ?? null;

       $gatewayErrorDescription = $error['gateway_error_description'] ?? null;

       $this->trace->info(TraceCode::ERROR_CODE_FOR_VAULT_RESPONSE, [$error]);

       switch ($errorCode)
       {
           case Error\ErrorCode::GATEWAY_ERROR_REQUEST_ERROR:
               throw new Exception\GatewayRequestException($errorCode);

           case Error\ErrorCode::GATEWAY_ERROR_TIMED_OUT:
               throw new Exception\GatewayTimeoutException($errorCode);

           default:
               throw new Exception\GatewayErrorException($errorCode,
                   $gatewayErrorCode,
                   $gatewayErrorDescription
               );
       }
   }

    protected function handleBadRequestErrors(array $error, array $response)
    {
        $errorCode = $error[Error\Error::INTERNAL_ERROR_CODE];

        $data = $response[Error\Error::DATA] ?? null;

        $description = $error[Error\Error::DESCRIPTION] ?? null;

        $this->trace->info(TraceCode::ERROR_CODE_FOR_VAULT_RESPONSE, [$errorCode]);

        if (empty($error[Error\Error::GATEWAY_ERROR_CODE]) === false)
        {
            $this->handleGatewayErrors($error, $response);
        }
        else if ($errorCode !== '')
        {
            throw new Exception\BadRequestException($errorCode);
        }
        else
        {
            throw new Exception\LogicException(
                $description,
                $errorCode,
                $data);
        }
    }

    protected function handleInternalServerErrors(array $error)
    {
        $code = $error[Error\Error::INTERNAL_ERROR_CODE];

        $data = $error[Error\Error::DATA] ?? null;

        $description = $error[Error\Error::DESCRIPTION] ?? 'Vault request failed';

        $this->trace->info(TraceCode::ERROR_CODE_FOR_VAULT_RESPONSE, [$code]);

        throw new Exception\LogicException(
            $description,
            $code,
            $data);
    }

    protected function pushVaultDimensions($request, $status, $statusCode = null, $action = null, $exe = null)
    {
        try {
            if (($this->mode === Mode::TEST) and
                ($this->app->runningUnitTests() === false)) {
                return;
            }

            (new Card\Metric)->pushCardVaultDimensions($request, $status, $statusCode, $action, $exe);
        }
        catch(Exception\BaseException $e) {
            $this->trace->info(TraceCode::ERROR_EXCEPTION, [$e->getError()]);
        }
    }


    protected function pushDimensions($request, $status, $statusCode = null, $action = null, $exe = null, $class = null)
    {
        if (($this->mode === Mode::TEST) and
            ($this->app->runningUnitTests() === false))
        {
            return;
        }

        (new Token\Metric)->pushTokenHQDimensions($request['content'], $status, $statusCode, $action, $exe, $class);
    }

    /**
     * @param string $url
     * @return false|string
     */
    protected function getTokenizationAction(string $url)
    {
        $action = '';

        if ($url === 'tokens')
        {
            $action = 'create';
        }

        if($url === 'cards/fingerprints')
        {
            $action = 'par_api';
        }
        else if( $url === 'card_fingerprints')
        {
            $action = 'fetch_fingerprint';
        }

        else if (strlen($url) >6 && substr($url, 0, 6) == 'tokens')
        {
            $action = substr($url, 7, strlen($url));
        }

        return $action;
    }

    /**
     * @param string $action
     * @return false|string
     */
    protected function getTokenizationEvent(string $action)
    {
        return Token\Event::ACTION_EVENT_MAPPING[$action];
    }

    /**
     * @param bool $isTokenisationRoute
     * @param $tokenizationUrl
     * @return array
     */
    protected function fetchActionAndEvent(bool $isTokenisationRoute, $tokenizationUrl): array
    {
        $action = '';
        $event = '';

        if ($isTokenisationRoute)
        {
            $action = $this->getTokenizationAction($tokenizationUrl);

            $event = $this->getTokenizationEvent($action);
        }
        return array($action, $event);
    }
}
