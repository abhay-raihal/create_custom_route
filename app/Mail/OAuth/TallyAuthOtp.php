<?php

namespace RZP\Mail\OAuth;

use Symfony\Component\Mime\Email;

use RZP\Constants\MailTags;
use RZP\Mail\Base\Mailable;

class TallyAuthOtp extends Mailable
{
    const TALLY_AUTH_OTP_EMAIL_TEMPLATE = 'emails.oauth.tally_auth_otp';

    protected $data;

    public function __construct(array $data)
    {
        parent::__construct();

        $this->data = $data;
    }

    protected function addRecipients()
    {
       $this->to($this->data['email'], $this->data['user']['name']);

       return $this;
    }

    protected function addHtmlView()
    {
        $this->view(self::TALLY_AUTH_OTP_EMAIL_TEMPLATE);

        return $this;
    }

    protected function addSubject()
    {
        $this->subject('Authorisation OTP for ' . $this->data["application"]["name"] . ' Integration');

        return $this;
    }

    protected function addMailData()
    {
        $this->with($this->data);

        return $this;
    }

    protected function addHeaders()
    {
        $this->withSymfonyMessage(function (Email $message)
        {
            $headers = $message->getHeaders();
            $headers->addTextHeader(MailTags::HEADER, MailTags::OAUTH_APP_AUTHORIZED);
        });

        return $this;
    }
}
