<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/account_api.proto

namespace Rzp\Accounts\Account\V1\Account;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.Account.ChargeInfo</code>
 */
class ChargeInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string fee_bearer = 1;</code>
     */
    protected $fee_bearer = '';
    /**
     * Generated from protobuf field <code>string fee_model = 2;</code>
     */
    protected $fee_model = '';
    /**
     * Generated from protobuf field <code>int64 fee_credits_threshold = 3;</code>
     */
    protected $fee_credits_threshold = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $fee_bearer
     *     @type string $fee_model
     *     @type int|string $fee_credits_threshold
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\AccountApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string fee_bearer = 1;</code>
     * @return string
     */
    public function getFeeBearer()
    {
        return $this->fee_bearer;
    }

    /**
     * Generated from protobuf field <code>string fee_bearer = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFeeBearer($var)
    {
        GPBUtil::checkString($var, True);
        $this->fee_bearer = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string fee_model = 2;</code>
     * @return string
     */
    public function getFeeModel()
    {
        return $this->fee_model;
    }

    /**
     * Generated from protobuf field <code>string fee_model = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFeeModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->fee_model = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 fee_credits_threshold = 3;</code>
     * @return int|string
     */
    public function getFeeCreditsThreshold()
    {
        return $this->fee_credits_threshold;
    }

    /**
     * Generated from protobuf field <code>int64 fee_credits_threshold = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFeeCreditsThreshold($var)
    {
        GPBUtil::checkInt64($var);
        $this->fee_credits_threshold = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ChargeInfo::class, \Rzp\Accounts\Account\V1\Account_ChargeInfo::class);

