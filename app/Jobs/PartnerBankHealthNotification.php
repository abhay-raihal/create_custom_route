<?php

namespace RZP\Jobs;

use Razorpay\Trace\Logger as Trace;

use RZP\Trace\TraceCode;
use RZP\Models\PartnerBankHealth\Notifier;

class PartnerBankHealthNotification extends Job
{
    const MAX_RETRY_ATTEMPT = 3;

    const MAX_RETRY_DELAY = 60;

    protected $queueConfigKey = 'partner_bank_health_notify';

    protected $data;

    protected $merchantIds;

    public function __construct(string $mode , $data, $merchantIds)
    {
        parent::__construct($mode);

        $this->data = $data;

        $this->merchantIds = $merchantIds;
    }

    public function handle()
    {
        try
        {
            parent::handle(); // TODO: Change the autogenerated stub

            $startTime = millitime();

            $this->trace->info(TraceCode::PARTNER_BANK_HEALTH_NOTIFICATION_JOB_INIT,
                               [
                                   'count' => count($this->merchantIds),
                               ]);

            (new Notifier)->extractEligibleConfigsAndSendNotifications($this->merchantIds, $this->data);

            $this->trace->info(TraceCode::PARTNER_BANK_HEALTH_NOTIFICATION_JOB_FINISHED,
            [
                'time_taken_in_ms' => millitime() - $startTime,
            ]);

            $this->delete();
        }
        catch (\Throwable $exception)
        {
            $this->trace->traceException(
                $exception,
                Trace::ERROR,
                TraceCode::PARTNER_BANK_HEALTH_NOTIFICATION_JOB_FAILED,
                [
                    'message' => $exception->getMessage()
                ]);

            if ($this->attempts() <= self::MAX_RETRY_ATTEMPT)
            {
                $this->release(self::MAX_RETRY_DELAY);
            }
            else
            {
                $this->trace->traceException(
                    $exception,
                    Trace::ERROR,
                    TraceCode::PARTNER_BANK_HEALTH_NOTIFICATION_JOB_DELETED,
                    [
                        'attempts' => $this->attempts(),
                        'message'  => $exception->getMessage(),
                    ]);

                $this->delete();
            }
        }
    }
}
