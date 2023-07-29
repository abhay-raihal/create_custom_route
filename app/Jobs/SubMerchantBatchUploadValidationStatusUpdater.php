<?php

namespace RZP\Jobs;

use Razorpay\Trace\Logger as Trace;
use RZP\Models\Merchant\Cron\Actions\BvsAction;
use RZP\Models\Merchant\Cron\Dto\CollectorDto;
use RZP\Trace\TraceCode;
use RZP\Models\Merchant\BvsValidation\Constants;

// This job will execute after the execution of transaction block in
// SubmerchantBatchUtility::processSubMerchantEntry()
// It would fetch merchant validations in captured/null state and then using BvsAction.php
// to fetch updated status from BVS and subsequently updating respective artefact status.

class SubMerchantBatchUploadValidationStatusUpdater extends Job
{
    const RETRY_INTERVAL = 300;

    const MAX_RETRY = 2;
    /**
     * @var string
     */
    private $merchantId;

    public function __construct(string $mode, string $merchantId)
    {
        parent::__construct($mode);

        $this->merchantId = $merchantId;
    }

    public function handle()
    {
        parent::handle(); // TODO: Change the autogenerated stub

        try
        {
            $this->trace->info(TraceCode::SUBMERCHANT_BATCH_UPLOAD_VALIDATION_STATUS_UPDATER, [
                'merchant_id'  => $this->merchantId
            ]);

            $validationsToBeUpdated = $this->repoManager->bvs_validation->getEntitiesByMerchantIdAndState($this->merchantId, [Constants::CAPTURED, null]);

            $this->trace->info(TraceCode::VALIDATIONS_TO_BE_UPDATED, [
                'data' => $validationsToBeUpdated
            ]);

            $collectorDto = CollectorDto::create($validationsToBeUpdated);

            $data['bvs_validations'] = $collectorDto;

            (new BvsAction())->execute($data);

            $this->delete();
        }
        catch(\Throwable $e)
        {
            $this->trace->traceException(
                $e,
                Trace::ERROR,
                TraceCode::SUBMERCHANT_BATCH_UPLOAD_VALIDATION_STATUS_UPDATER_JOB_FAILED,
                [
                    'merchant_id' => $this->merchantId,
                ]
            );

            $this->checkRetry();
        }
    }

    protected function checkRetry()
    {
        if ($this->attempts() > self::MAX_RETRY)
        {
            $this->trace->error(TraceCode::SUBMERCHANT_BATCH_UPLOAD_VALIDATION_STATUS_UPDATER_JOB_DELETE, [
                'merchant_id'  => $this->merchantId,
                'job_attempts' => $this->attempts(),
                'message'      => 'Deleting the job after configured number of tries. Still unsuccessful.'
            ]);

            $this->delete();
        }
        else
        {
            $this->release(self::RETRY_INTERVAL);
        }
    }
}