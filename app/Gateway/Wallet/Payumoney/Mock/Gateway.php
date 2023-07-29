<?php

namespace RZP\Gateway\Wallet\Payumoney\Mock;

use RZP\Exception;
use RZP\Gateway\Base;
use RZP\Gateway\Wallet\Payumoney;

class Gateway extends Payumoney\Gateway
{
    use Base\Mock\GatewayTrait;

    public function topup($input)
    {
        $request = parent::topup($input);

        $url = $this->route->getUrlWithPublicAuth(
                    'mock_wallet_payment_with_paymentid',
                    ['wallet' => $input['payment']['wallet'],
                     'paymentId' => $input['payment']['id']]);

        $request['url'] = $url;

        return $request;
    }
}
