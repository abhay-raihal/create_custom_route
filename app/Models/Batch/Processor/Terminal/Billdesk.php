<?php

namespace RZP\Models\Batch\Processor\Terminal;

use RZP\Constants;
use RZP\Models\Batch;
use RZP\Models\Payment;
use RZP\Models\Terminal;
use RZP\Models\Batch\Entity;
use RZP\Exception\BaseException;
use RZP\Models\Payment\Processor\CardlessEmi;
use RZP\Models\Batch\Processor\Base as BaseProcessor;

class Billdesk extends BaseProcessor
{
    /**
     * @var Terminal\Service
     */
    protected $terminalService;

    public function __construct(Entity $batch)
    {
        parent::__construct($batch);

        $this->terminalService = new Terminal\Service;
    }

    protected function processEntry(array &$entry)
    {
        $merchantId        = trim($entry[Batch\Header::BILLDESK_MERCHANT_ID]);
        $gatewayMerchantId = trim($entry[Batch\Header::BILLDESK_GATEWAY_MERCHANT_ID]);
        $networkCategory   = trim($entry[Batch\Header::BILLDESK_CATEGORY]);
        $nonRecurring      = trim($entry[Batch\Header::BILLDESK_NON_RECURRING]);

        $createTerminalParams = [
            Terminal\Entity::MERCHANT_ID                => $merchantId,
            Terminal\Entity::MODE                       => Terminal\Mode::DUAL,
            Terminal\Entity::GATEWAY                    => Constants\Entity::BILLDESK,
            Terminal\Entity::GATEWAY_MERCHANT_ID        => $gatewayMerchantId,
            Terminal\Entity::CARD                       => 0,
            Terminal\Entity::NETBANKING                 => 1,
            Terminal\Entity::NETWORK_CATEGORY           => $networkCategory,
            Terminal\Entity::TYPE                       => [
                Terminal\Type::NON_RECURRING => $nonRecurring,
            ],
        ];

        try
        {
            $terminal = $this->terminalService->createTerminal($merchantId, $createTerminalParams);

            $entry[Batch\Header::STATUS]                 = Batch\Status::SUCCESS;

            $entry[Batch\Header::BILLDESK_TERMINAL_ID]    = $terminal[Terminal\Entity::ID];
        }
        catch (BaseException $e)
        {
            $error = $e->getError();
            $entry[Batch\Header::STATUS]            = Batch\Status::FAILURE;
            $entry[Batch\Header::FAILURE_REASON]    = $error->getDescription();
        }
    }

    public function getOutputFileHeadings(): array
    {
        $headerRule = $this->batch->getValidator()->getHeaderRule();

        return Batch\Header::getHeadersForFileTypeAndBatchType($this->outputFileType, $headerRule);
    }
}
