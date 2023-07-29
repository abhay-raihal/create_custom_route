<?php


namespace RZP\Mail\Batch;


use Carbon\Carbon;
use RZP\Constants\MailTags;
use RZP\Constants\Timezone;
use RZP\Mail\Base\Constants;
use RZP\Models\BankingAccount;
use RZP\Models\BankingAccount\Activation\Comment;

class RblBulkUploadComments extends Base
{
    protected static $mailTag     = MailTags::BATCH_RBL_BULK_UPLOAD_COMMENTS_FILE;

    protected static $sender      = Constants::BANKING_ACCOUNT;

    protected static $subjectLine = 'RazorpayX | RBL Bulk Upload Comments file dated %s';

    protected static $body        = 'Please find attached the RBL Bulk Upload Comments file created.';

    protected function addSubject()
    {
        $today = Carbon::now(Timezone::IST)->format('d-m-Y');

        $this->subject(sprintf(static::$subjectLine, $today));

        return $this;
    }

    protected function addRecipients()
    {
        $adminEmail = $this->batchSettings[Comment\Entity::ADMIN_EMAIL];

        $this->to($adminEmail);

        return $this;
    }
}
