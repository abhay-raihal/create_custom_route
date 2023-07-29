<?php

namespace RZP\Mail\Merchant\RazorpayX;

use Symfony\Component\Mime\Email;

use RZP\Models\User;
use RZP\Mail\Base\Common;
use RZP\Mail\Base\Mailable;
use RZP\Constants\MailTags;
use RZP\Models\User\Service as UserService;
use RZP\Models\Merchant\Detail\Entity as Detail;

class CreateSubMerchantAffiliate extends Mailable
{
    /**
     * @var array
     */
    protected $subMerchant;

    /**
     * @var array
     */
    protected $aggregator;

    /**
     * @var array
     */
    protected $org;

    /**
     * @var string
     */
    protected $token;

    const SUPPORT_URL        = 'https://razorpay.com/support/#request/merchant';

    public function __construct(array $subMerchant, array $aggregator, array $org, User\Entity $user = null)
    {
        parent::__construct();

        $this->subMerchant = $subMerchant;

        $this->aggregator = $aggregator;

        $this->org = $org;

        if (empty($user) === false)
        {
            $this->token = (new UserService)->getTokenWithExpiry(
                $user->getId(),
                User\Constants::SUBMERCHANT_ACCOUNT_CREATE_PASSOWRD_TOKEN_EXPIRY_TIME
            );
        }
    }

    protected function addRecipients()
    {
        $email = $this->subMerchant['email'];

        $name = $this->subMerchant['name'];

        $this->to($email, $name);

        return $this;
    }

    protected function addSubject()
    {
        $this->subject('[IMP] '.$this->aggregator['name'].' has invited you to join RazorpayX');

        return $this;
    }

    protected function addMailData()
    {
        $data = [
            'merchant'           => $this->aggregator,
            'subMerchant'        => $this->subMerchant,
            'token'              => $this->token,
            'org'                => $this->org,
            'support_url'        => self::SUPPORT_URL,
        ];

        $this->with($data);

        return $this;
    }

    protected function addHeaders()
    {
        $this->withSymfonyMessage(function (Email $message)
        {
            $headers = $message->getHeaders();

            $headers->addTextHeader(MailTags::HEADER, MailTags::AFFILIATE_ADDED);
        });

        return $this;
    }

    protected function addHtmlView()
    {
        $this->view('emails.merchant.razorpayx.add_sub_merchant_affiliate');

        return $this;
    }
}
