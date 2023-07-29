<?php

namespace RZP\Gateway\Netbanking\Icici\Mock;

use Carbon\Carbon;
use RZP\Constants\Timezone;

use RZP\Gateway\Base;
use RZP\Models\Payment;
use RZP\Models\FileStore;

class Reconciliator extends Base\RefundFile
{
    const PAYMENT_ENTITY = 'payment';

    const GATEWAY_ENTITY = 'gateway';

    protected static $fileToWriteName = 'razorpayreports';

    const BASE_STORAGE_DIRECTORY = 'Icici/Recon/Netbanking/';

    public function generate($input)
    {
        list($totalAmount, $data) = $this->getReconciliationData($input);

        $fileName = $this->getFileToWriteNameWithoutExt();

        $txt = $this->generateText($data, ',');

        $creator = $this->createFile(
            FileStore\Format::TXT,
            $txt,
            $fileName,
            FileStore\Type::ICICI_NETBANKING_REFUND
        );

        $file = $creator->get();

        return [
            'local_file_path' => $file['local_file_path'],
            'count'           => count($data),
            'file_name'       => basename($file['local_file_path']),
            'total_amount'    => $totalAmount,
        ];
    }

    protected function getReconciliationData($input)
    {
        $data = [];

        $totalAmount = 0;

        foreach ($input as $row)
        {
            $date = Carbon::createFromTimestamp(
                $row[self::PAYMENT_ENTITY][Payment\Entity::CREATED_AT],
                Timezone::IST)
                ->format('Y-m-d');
            $data[] = [
                'ITC'       => $row['payment']['id'],
                'PRN'       => $row['payment']['id'],
                'BID'       => 99999, // this is the value used in createNetbanking function used in recon test
                'amount'    => $this->getFormattedAmount($row['payment']['amount']),
                'Date'      => $date,
            ];
            $totalAmount += $row[self::PAYMENT_ENTITY][Payment\Entity::AMOUNT] / 100;
        }

        $this->content($data, 'claims_data');

        return [$totalAmount, $data];
    }

    public function content(& $content, $action = '')
    {
        return $content;
    }

    public function generateReconciliation($input = null)
    {
        $input = [
            'gateway' => 'netbanking_icici'
        ];

        $payments = $this->repo->payment->fetch($input, '10000000000000');

        $inputData = [];

        foreach ($payments as $payment)
        {
            $data[self::PAYMENT_ENTITY] = $payment->toArray();

            $gatewayInput['payment_id'] = $payment[Payment\Entity::ID];

            $gatewayPayment = $this->repo->netbanking->fetch($gatewayInput);

            $data[self::GATEWAY_ENTITY] = $gatewayPayment[0]->toArray();

            $inputData[] = $data;
        }

        return $this->generate($inputData);
    }

    protected function getFileToWriteNameWithoutExt()
    {
        $time = Carbon::now(Timezone::IST)->format('d-m-Y');

        return static::BASE_STORAGE_DIRECTORY . static::$fileToWriteName . '_' . $this->mode . '_' . $time;
    }
}
