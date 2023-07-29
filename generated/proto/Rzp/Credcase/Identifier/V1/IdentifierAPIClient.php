<?php
# Generated by the protocol buffer compiler (protoc-gen-twirp_php ).  DO NOT EDIT!
# source: credcase/identifier/v1/identifier_api.proto

declare(strict_types=1);

namespace Rzp\Credcase\Identifier\V1;

use Google\Protobuf\Internal\GPBDecodeException;
use Google\Protobuf\Internal\Message;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Psr\Http\Message\RequestFactoryInterface;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamFactoryInterface;
use Twirp\Context;
use Twirp\Error;
use Twirp\ErrorCode;

/**
 * A Protobuf client that implements the {@see IdentifierAPI} interface.
 * It communicates using Protobuf and can be configured with a custom HTTP Client.
 *
 * Generated from protobuf service <code>rzp.credcase.identifier.v1.IdentifierAPI</code>
 */
final class IdentifierAPIClient implements IdentifierAPI
{
    /**
     * @var server
     */
    private $addr;

    /**
     * @var ClientInterface
     */
    private $httpClient;

    /**
     * @var RequestFactoryInterface
     */
    private $requestFactory;

    /**
     * @var StreamFactoryInterface
     */
    private $streamFactory;

    public function __construct(
        $addr,
        ClientInterface $httpClient = null,
        RequestFactoryInterface $requestFactory = null,
        StreamFactoryInterface $streamFactory = null
    ) {
        if ($httpClient === null) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        if ($requestFactory === null) {
            $requestFactory = Psr17FactoryDiscovery::findRequestFactory();
        }

        if ($streamFactory === null) {
            $streamFactory = Psr17FactoryDiscovery::findStreamFactory();
        }

        $this->addr = $this->urlBase($addr);
        $this->httpClient = $httpClient;
        $this->requestFactory = $requestFactory;
        $this->streamFactory = $streamFactory;
    }

    /**
     * {@inheritdoc}
     */
    public function CreatePublic(array $ctx, \Rzp\Credcase\Identifier\V1\IdentifierCreatePublicRequest $in): \Rzp\Credcase\Identifier\V1\IdentifierResponse
    {
        $ctx = Context::withPackageName($ctx, 'rzp.credcase.identifier.v1');
        $ctx = Context::withServiceName($ctx, 'IdentifierAPI');
        $ctx = Context::withMethodName($ctx, 'CreatePublic');

        $out = new \Rzp\Credcase\Identifier\V1\IdentifierResponse();

        $url = $this->addr.'/twirp/rzp.credcase.identifier.v1.IdentifierAPI/CreatePublic';

        $this->doProtobufRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function CreateInternal(array $ctx, \Rzp\Credcase\Identifier\V1\IdentifierCreateInternalRequest $in): \Rzp\Credcase\Identifier\V1\IdentifierResponse
    {
        $ctx = Context::withPackageName($ctx, 'rzp.credcase.identifier.v1');
        $ctx = Context::withServiceName($ctx, 'IdentifierAPI');
        $ctx = Context::withMethodName($ctx, 'CreateInternal');

        $out = new \Rzp\Credcase\Identifier\V1\IdentifierResponse();

        $url = $this->addr.'/twirp/rzp.credcase.identifier.v1.IdentifierAPI/CreateInternal';

        $this->doProtobufRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function Get(array $ctx, \Rzp\Credcase\Identifier\V1\IdentifierGetRequest $in): \Rzp\Credcase\Identifier\V1\IdentifierResponse
    {
        $ctx = Context::withPackageName($ctx, 'rzp.credcase.identifier.v1');
        $ctx = Context::withServiceName($ctx, 'IdentifierAPI');
        $ctx = Context::withMethodName($ctx, 'Get');

        $out = new \Rzp\Credcase\Identifier\V1\IdentifierResponse();

        $url = $this->addr.'/twirp/rzp.credcase.identifier.v1.IdentifierAPI/Get';

        $this->doProtobufRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function List(array $ctx, \Rzp\Credcase\Identifier\V1\IdentifierListRequest $in): \Rzp\Credcase\Identifier\V1\IdentifierListResponse
    {
        $ctx = Context::withPackageName($ctx, 'rzp.credcase.identifier.v1');
        $ctx = Context::withServiceName($ctx, 'IdentifierAPI');
        $ctx = Context::withMethodName($ctx, 'List');

        $out = new \Rzp\Credcase\Identifier\V1\IdentifierListResponse();

        $url = $this->addr.'/twirp/rzp.credcase.identifier.v1.IdentifierAPI/List';

        $this->doProtobufRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * {@inheritdoc}
     */
    public function Delete(array $ctx, \Rzp\Credcase\Identifier\V1\IdentifierDeleteRequest $in): \Rzp\Credcase\Identifier\V1\IdentifierDeleteResponse
    {
        $ctx = Context::withPackageName($ctx, 'rzp.credcase.identifier.v1');
        $ctx = Context::withServiceName($ctx, 'IdentifierAPI');
        $ctx = Context::withMethodName($ctx, 'Delete');

        $out = new \Rzp\Credcase\Identifier\V1\IdentifierDeleteResponse();

        $url = $this->addr.'/twirp/rzp.credcase.identifier.v1.IdentifierAPI/Delete';

        $this->doProtobufRequest($ctx, $url, $in, $out);

        return $out;
    }

    /**
     * Common code to make a request to the remote twirp service.
     */
    private function doProtobufRequest(array $ctx, string $url, Message $in, Message $out): void
    {
        $body = $in->serializeToString();

        $req = $this->newRequest($ctx, $url, $body, 'application/protobuf');

        try {
            $resp = $this->httpClient->sendRequest($req);
        } catch (\Throwable $e) {
            throw $this->clientError('failed to send request', $e);
        }

        if ($resp->getStatusCode() !== 200) {
            throw $this->errorFromResponse($resp);
        }

        try {
            $out->mergeFromString((string)$resp->getBody());
        } catch (GPBDecodeException $e) {
            throw $this->clientError('failed to unmarshal proto response', $e);
        }
    }

    /**
     * Makes an HTTP request and adds common headers.
     */
    private function newRequest(array $ctx, string $url, string $reqBody, string $contentType): RequestInterface
    {
        $body = $this->streamFactory->createStream($reqBody);

        $req = $this->requestFactory->createRequest('POST', $url);

        $headers = Context::httpRequestHeaders($ctx);

        foreach ($headers as $key => $value) {
            $req = $req->withHeader($key, $value);
        }

        return $req
            ->withBody($body)
            ->withHeader('Accept', $contentType)
            ->withHeader('Content-Type', $contentType)
            ->withHeader('Twirp-Version', 'v5.3.0');
    }

    /**
     * Adds consistency to errors generated in the client.
     */
    private function clientError(string $desc, \Throwable $e): TwirpError
    {
        return TwirpError::newError(ErrorCode::Internal, sprintf('%s: %s', $desc, $e->getMessage()));
    }

    /**
     * Builds a twirp Error from a non-200 HTTP response.
     * If the response has a valid serialized Twirp error, then it's returned.
     * If not, the response status code is used to generate a similar twirp
     * error. {@see self::twirpErrorFromIntermediary} for more info on intermediary errors.
     */
    private function errorFromResponse(ResponseInterface $resp): TwirpError
    {
        $statusCode = $resp->getStatusCode();
        $statusText = $resp->getReasonPhrase();

        if ($this->isHttpRedirect($statusCode)) {
            // Unexpected redirect: it must be an error from an intermediary.
            // Twirp clients don't follow redirects automatically, Twirp only handles
            // POST requests, redirects should only happen on GET and HEAD requests.
            $location = $resp->getHeaderLine('Location');
            $msg = sprintf(
                'unexpected HTTP status code %d "%s" received, Location="%s"',
                $statusCode,
                $statusText,
                $location
            );

            return $this->twirpErrorFromIntermediary($statusCode, $msg, $location);
        }

        $body = (string)$resp->getBody();

        $rawError = json_decode($body, true);
        if ($rawError === null) {
            $msg = sprintf('error from intermediary with HTTP status code %d "%s"', $statusCode, $statusText);

            return $this->twirpErrorFromIntermediary($statusCode, $msg, $body);
        }

        $rawError = $rawError + ['code' => '', 'msg' => '', 'meta' => []];

        if (ErrorCode::isValid($rawError['code']) === false) {
            $msg = 'invalid type returned from server error response: '.$rawError['code'];

            return TwirpError::newError(ErrorCode::Internal, $msg);
        }

        $error = TwirpError::newError($rawError['code'], $rawError['msg']);

        foreach ($rawError['meta'] as $key => $value) {
           $error->setMeta($key, $value);
        }

        return $error;
    }

    /**
     * Maps HTTP errors from non-twirp sources to twirp errors.
     * The mapping is similar to gRPC: https://github.com/grpc/grpc/blob/master/doc/http-grpc-status-mapping.md.
     * Returned twirp Errors have some additional metadata for inspection.
     */
    private function twirpErrorFromIntermediary(int $status, string $msg, string $bodyOrLocation): TwirpError
    {
        if ($this->isHttpRedirect($status)) {
            $code = ErrorCode::Internal;
        } else {
            switch ($status) {
                case 400: // Bad Request
                    $code = ErrorCode::Internal;
                    break;
                case 401: // Unauthorized
                    $code = ErrorCode::Unauthenticated;
                    break;
                case 403: // Forbidden
                    $code = ErrorCode::PermissionDenied;
                    break;
                case 404: // Not Found
                    $code = ErrorCode::BadRoute;
                    break;
                case 429: // Too Many Requests
                case 502: // Bad Gateway
                case 503: // Service Unavailable
                case 504: // Gateway Timeout
                    $code = ErrorCode::Unavailable;
                    break;
                default: // All other codes
                    $code = ErrorCode::Unknown;
                    break;
            }
        }

        $error = TwirpError::newError($code, $msg);
        $error->setMeta('http_error_from_intermediary', 'true');
        $error->setMeta('status_code', (string)$status);

        if ($this->isHttpRedirect($status)) {
            $error->setMeta('location', $bodyOrLocation);
        } else {
            $error->setMeta('body', $bodyOrLocation);
        }

        return $error;
    }

    private function isHttpRedirect(int $status): bool
    {
        return $status >= 300 && $status <= 399;
    }

    private function urlBase(string $addr): string
    {
        $scheme = parse_url($addr, PHP_URL_SCHEME);

        // If parse_url fails, return the addr unchanged.
        if ($scheme === false) {
            return $addr;
        }

        // If the addr does not specify a scheme, default to http.
        if (empty($scheme)) {
            $addr = 'http://'.ltrim($addr, ':/');
        }

        return $addr;
    }
}
