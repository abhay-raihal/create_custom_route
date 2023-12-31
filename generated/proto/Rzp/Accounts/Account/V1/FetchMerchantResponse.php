<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/account_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.FetchMerchantResponse</code>
 */
class FetchMerchantResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Merchant merchant = 1;</code>
     */
    protected $merchant = null;
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.MerchantDetail merchant_detail = 2;</code>
     */
    protected $merchant_detail = null;
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.MerchantBusinessDetail merchant_business_detail = 3;</code>
     */
    protected $merchant_business_detail = null;
    /**
     * Generated from protobuf field <code>repeated .rzp.accounts.account.v1.MerchantEmail merchant_emails = 4;</code>
     */
    private $merchant_emails;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rzp\Accounts\Account\V1\Merchant $merchant
     *     @type \Rzp\Accounts\Account\V1\MerchantDetail $merchant_detail
     *     @type \Rzp\Accounts\Account\V1\MerchantBusinessDetail $merchant_business_detail
     *     @type array<\Rzp\Accounts\Account\V1\MerchantEmail>|\Google\Protobuf\Internal\RepeatedField $merchant_emails
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\AccountApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Merchant merchant = 1;</code>
     * @return \Rzp\Accounts\Account\V1\Merchant|null
     */
    public function getMerchant()
    {
        return $this->merchant;
    }

    public function hasMerchant()
    {
        return isset($this->merchant);
    }

    public function clearMerchant()
    {
        unset($this->merchant);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Merchant merchant = 1;</code>
     * @param \Rzp\Accounts\Account\V1\Merchant $var
     * @return $this
     */
    public function setMerchant($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\Merchant::class);
        $this->merchant = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.MerchantDetail merchant_detail = 2;</code>
     * @return \Rzp\Accounts\Account\V1\MerchantDetail|null
     */
    public function getMerchantDetail()
    {
        return $this->merchant_detail;
    }

    public function hasMerchantDetail()
    {
        return isset($this->merchant_detail);
    }

    public function clearMerchantDetail()
    {
        unset($this->merchant_detail);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.MerchantDetail merchant_detail = 2;</code>
     * @param \Rzp\Accounts\Account\V1\MerchantDetail $var
     * @return $this
     */
    public function setMerchantDetail($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\MerchantDetail::class);
        $this->merchant_detail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.MerchantBusinessDetail merchant_business_detail = 3;</code>
     * @return \Rzp\Accounts\Account\V1\MerchantBusinessDetail|null
     */
    public function getMerchantBusinessDetail()
    {
        return $this->merchant_business_detail;
    }

    public function hasMerchantBusinessDetail()
    {
        return isset($this->merchant_business_detail);
    }

    public function clearMerchantBusinessDetail()
    {
        unset($this->merchant_business_detail);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.MerchantBusinessDetail merchant_business_detail = 3;</code>
     * @param \Rzp\Accounts\Account\V1\MerchantBusinessDetail $var
     * @return $this
     */
    public function setMerchantBusinessDetail($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\MerchantBusinessDetail::class);
        $this->merchant_business_detail = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .rzp.accounts.account.v1.MerchantEmail merchant_emails = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMerchantEmails()
    {
        return $this->merchant_emails;
    }

    /**
     * Generated from protobuf field <code>repeated .rzp.accounts.account.v1.MerchantEmail merchant_emails = 4;</code>
     * @param array<\Rzp\Accounts\Account\V1\MerchantEmail>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMerchantEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rzp\Accounts\Account\V1\MerchantEmail::class);
        $this->merchant_emails = $arr;

        return $this;
    }

}

