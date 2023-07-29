<?php

namespace RZP\Jobs;

use App;

use RZP\Trace\TraceCode;
use RZP\Exception\BaseException;
use Razorpay\Trace\Logger as Trace;

class ScroogeRefundRetry extends Job
{
    const MAX_JOB_ATTEMPTS = 5;
    const JOB_RELEASE_WAIT = 300;

    const NON_RETRIABLE_ERROR_CODES = [
        'ILLEGAL_STATE',
        'NO_DATA_FOUND'
    ];

    /**
     * Scrooge refund retry job timeout at 180 seconds
     * 80 seconds each for verify and refund calls.
     * 20 seconds of buffer
     */
    public $timeout = 180;

    protected $trace;

    protected $data;

    public function __construct(array $data)
    {
        parent::__construct($data['mode']);

        $this->data = $data;
    }

    public function handle()
    {
        parent::handle();

        $this->trace->info(
            TraceCode::REFUND_RETRY_QUEUE_SCROOGE_REQUEST,
            $this->data
        );

        try
        {
            App::getFacadeRoot()['scrooge']->initiateRefundRetry($this->data, true);

            $this->trace->info(
                TraceCode::REFUND_RETRY_QUEUE_SCROOGE_SUCCESS,
                $this->data
            );

            $this->delete();
        }
        catch (\Throwable $ex)
        {
            $this->data['job_attempts'] = $this->attempts();

            $this->trace->traceException(
                $ex,
                Trace::ERROR,
                TraceCode::REFUND_RETRY_SCROOGE_JOB_FAILURE_EXCEPTION,
                $this->data);

            $exceptionData = [];

            // Only BaseException would have `getData` function
            if ($ex instanceof BaseException)
            {
                $exceptionData = $ex->getData();
            }

            $this->handleRefundRetryJobRelease($exceptionData);
        }
    }

    protected function handleRefundRetryJobRelease(array $exceptionData)
    {
        $errorCode = $exceptionData['response_body']->internal_error->code ?? '';

        if (($this->attempts() > self::MAX_JOB_ATTEMPTS) or
            ($this->isErrorCodeNonRetriable($errorCode) === true))
        {
            $this->trace->error(
                TraceCode::REFUND_RETRY_SCROOGE_QUEUE_DELETE,
                [
                    'data'         => $this->data,
                    'job_attempts' => $this->attempts(),
                    'message'      => 'Deleting the job after configured number of tries or if error code is not retriable.'
                ]
            );

            $this->delete();
        }
        else
        {
            //
            // When queue_driver is sync, there's no release
            // and hence it's as good as deleting the job.
            //
            $this->release(self::JOB_RELEASE_WAIT);
        }
    }

    /**
     * Checks for given error code if that is worth retrying or not in case of job failure.
     *
     * @param $errorCode
     * @return bool
     */
    protected function isErrorCodeNonRetriable(string $errorCode)
    {
        return in_array($errorCode, self::NON_RETRIABLE_ERROR_CODES, true);
    }
}
