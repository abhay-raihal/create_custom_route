<?php

namespace RZP\Reconciliator\CardlessEmiZestMoney\SubReconciliator;

use RZP\Reconciliator\Base;
use RZP\Reconciliator\Base\SubReconciliator\Helper;
use RZP\Reconciliator\CardlessEmiZestMoney\Reconciliate;

class PaymentReconciliate extends Base\SubReconciliator\PaymentReconciliate
{
    protected function getPaymentId(array $row)
    {
        return $row[Reconciliate::ORDER_ID] ?? null;
    }

    protected function getGatewayFee($row)
    {
        return $row[Reconciliate::BANK_CHARGES] ?? null;
    }

    protected function getGatewayServiceTax($row)
    {
        return $row[Reconciliate::GST_ON_BANK_CHARGES] ?? null;
    }

    protected function getReconPaymentAmount(array $row)
    {
        if (isset($row[Reconciliate::PAYMENT_AMOUNT]) == false)
        {
            return 0;
        }

        return Helper::getIntegerFormattedAmount($row[Reconciliate::PAYMENT_AMOUNT]);
    }
}
