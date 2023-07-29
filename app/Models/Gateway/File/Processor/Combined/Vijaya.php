<?php

namespace RZP\Models\Gateway\File\Processor\Combined;

use Carbon\Carbon;
use RZP\Models\FileStore;
use RZP\Constants\Timezone;

class Vijaya extends Base
{
    const BANK_NAME = 'Vijaya';

    protected function formatDataForMail(array $data)
    {
        $amount = [
            'claims'  => 0,
            'refunds' => 0,
            'total'   => 0,
        ];

        $count = [
            'claims'  => 0,
            'refunds' => 0,
            'total'   => 0
        ];

        $refundsFile = $claimsFile = [];

        if (isset($data['refunds']) === true)
        {
            $amount['refunds'] = array_reduce($data['refunds'], function ($sum, $item)
            {
                $sum += $item['refund']['amount'];

                return $sum;
            });

            $amount['refunds'] = $amount['refunds'] / 100;

            $amount['refunds'] = number_format($amount['refunds'], 2, '.', '');

            $count['refunds'] = count($data['refunds']);

            $refundsFile = $this->getFileData(FileStore\Type::VIJAYA_NETBANKING_REFUND);
        }

         if (isset($data['claims']) === true)
         {
             $amount['claims'] = array_reduce($data['claims'], function ($sum, $item)
             {
                 $sum += $item['payment']->getAmount();

                 return $sum;
             });

             $amount['claims'] = $amount['claims'] / 100;

             $amount['claims'] = number_format($amount['claims'], 2, '.', '');

             $count['claims'] = count($data['claims']);

             $claimsFile = $this->getFileData(FileStore\Type::VIJAYA_NETBANKING_CLAIM);
         }

        $amount['total'] = $amount['claims'] - $amount['refunds'];

        $amount['total'] = number_format($amount['total'], 2, '.', '');

        $count['total'] = $count['refunds'] + $count['claims'];

        $date = Carbon::now(Timezone::IST)->format('jS F Y');

        return [
            'bankName'    => self::BANK_NAME,
            'amount'      => $amount,
            'count'       => $count,
            'refundsFile' => $refundsFile,
            'claimsFile'  => $claimsFile,
            'date'        => $date,
            'emails'      => $this->gatewayFile->getRecipients(),
        ];
    }
}
