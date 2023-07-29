<?php

namespace RZP\Models\SubVirtualAccount;

use Razorpay\Trace\Logger;

use RZP\Constants;
use RZP\Exception;
use RZP\Models\Base;
use RZP\Models\User;
use RZP\Trace\TraceCode;
use RZP\Models\CreditTransfer;

/**
 * Class Service
 *
 * @package RZP\Models\SubVirtualAccount
 */
class Service extends Base\Service
{
    use Base\Traits\ServiceHasCrudMethods;

    /**
     * @var Core
     */
    protected $core;

    public function __construct()
    {
        parent::__construct();

        $this->core = new Core;
    }

    /**
     * @param array $input
     *
     * @return array
     * @throws Exception\BadRequestException
     */
    public function create(array $input): array
    {
        $this->trace->info(TraceCode::SUB_VIRTUAL_ACCOUNT_CREATE_REQUEST, ['input' => $input]);

        (new Validator)->validateInput('create', $input);

        $subVirtualAccount = $this->core->create($input);

        return $subVirtualAccount->toArrayPublic();
    }

    /**
     * This route is for admin route. We need to return
     * only active and inactive accounts on admin dashboard
     *
     * @param string $id
     *
     * @return array
     */
    public function fetchMultipleAdmin(string $id): array
    {
        $input = [
            Entity::MASTER_MERCHANT_ID => $id,
        ];

        $subVirtualAccounts = $this->core->fetchMultiple($input);

        return $subVirtualAccounts->toArrayPublic();
    }

    /**This route is for proxy route. We need to return
     * only active accounts on merchant dashboard
     *
     * @return array
     */
    public function fetchMultiple(): array
    {
        $input = [
            Entity::MASTER_MERCHANT_ID => $this->merchant->getId(),
            Entity::ACTIVE             => true
        ];

        $subVirtualAccounts = $this->core->fetchMultiple($input);

        return $subVirtualAccounts->toArrayPublic();
    }

    /**
     * @param string $id
     * @param array $input
     * @return array
     * @throws Exception\BadRequestException
     */
    public function enableOrDisable(string $id, array $input)
    {
        $this->trace->info(TraceCode::SUB_VIRTUAL_ACCOUNT_ENABLE_DISABLE_REQUEST, ['input' => $input]);

        (new Validator)->validateInput('enable_or_disable', $input);

        $response = $this->core->enableOrDisable($id, $input);

        return $response->toArrayPublic();
    }

    public function transferWithOtp(array $input)
    {
        (new Validator)->validateInput('sub_virtual_account_transfer_with_otp', $input);

        $transferInput = $this->verifyOtpForTransfer($input);

        return $this->transfer($transferInput);
    }

    protected function transfer(array $input)
    {
        $this->trace->info(TraceCode::SUB_VIRTUAL_ACCOUNT_TRANSFER_REQUEST, ['input' => $input]);

        $masterMerchantId = $this->merchant->getId();

        $subVirtualAccount = $this->repo->sub_virtual_account->getSubVirtualAccountWithMasterMerchantIdAndAccountNumbers($input, $masterMerchantId);

        $validator = new Validator;

        $validator->validateSubVirtualAccount($subVirtualAccount, $input);

        if ($subVirtualAccount->getSubAccountType() === Type::SUB_DIRECT_ACCOUNT)
        {
            $validator->validateInput('sub_direct_account_transfer', $input);
        }
        else
        {
            $validator->validateInput('sub_virtual_account_transfer', $input);
        }

        $validator->validateMasterMerchant($this->merchant, $subVirtualAccount);

        $subMerchantEntity = $subVirtualAccount->subMerchant;

        $validator->validateSubMerchant($subMerchantEntity);

        $transferResponse = $this->core->transfer($input, $subVirtualAccount);

        return $transferResponse->toArrayPublic();
    }

    private function verifyOtpForTransfer(array $input)
    {
        $this->user->validateInput('verifyOtp', array_only($input, ['otp', 'token']));

        (new User\Core)->verifyOtp($input + ['action' => 'sub_virtual_account_transfer'],
            $this->merchant,
            $this->user,
            $this->mode === Constants\Mode::TEST);

        return array_except($input, ['otp', 'token']);
    }

    public function listCreditTransfers($input)
    {
        $this->trace->info(TraceCode::SUB_VIRTUAL_ACCOUNT_CREDIT_TRANSFER_FETCH_REQUEST, ['input' => $input]);

        $input[CreditTransfer\Entity::PAYER_MERCHANT_ID] = $this->merchant->getId();

        $creditTransferService = new CreditTransfer\Service();

        $creditTransfers = $creditTransferService->fetchMultiple($input, false);

        $this->trace->info(TraceCode::SUB_VIRTUAL_ACCOUNT_CREDIT_TRANSFER_FETCH_SUCCESS,
                           [
                               'count' => count($creditTransfers)
                           ]);

        return $creditTransfers->toArrayPublic();
    }

    public function migrate($input)
    {
        $this->trace->info(TraceCode::SUB_ACCOUNT_MIGRATION_REQUEST,
                           [
                               'input' => $input
                           ]);

        (new Validator())->setStrictFalse()->validateInput('migration', $input);

        try
        {
            $fromVersion = $input[\RZP\Models\SubVirtualAccount\Constants::FROM_VERSION];
            $toVersion   = $input[\RZP\Models\SubVirtualAccount\Constants::TO_VERSION];

            $function = 'migrateFrom' . strtoupper($fromVersion) . 'to' . strtoupper($toVersion);

            if (method_exists($this->core, $function) === false)
            {
                throw new Exception\LogicException("Tried to call undefined method");
            }

            $this->core->$function($input);

            $this->trace->info(TraceCode::SUB_ACCOUNT_MIGRATION_SUCCESSFUL);

            return ['success' => true];

        }
        catch (\Throwable $ex)
        {
            $this->trace->traceException(
                $ex,
                Logger::ERROR,
                TraceCode::SUB_ACCOUNT_MIGRATION_EXCEPTION,
                [
                    'input' => $input
                ],
            );
        }

        return ['success' => false];
    }
}
