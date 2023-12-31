<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/entities.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.BankAccount</code>
 */
class BankAccount extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string bank_account_type = 1;</code>
     */
    protected $bank_account_type = '';
    /**
     * Generated from protobuf field <code>string beneficiary_name = 2;</code>
     */
    protected $beneficiary_name = '';
    /**
     * Generated from protobuf field <code>string ifsc_code = 3;</code>
     */
    protected $ifsc_code = '';
    /**
     * Generated from protobuf field <code>string bank_account_number = 4;</code>
     */
    protected $bank_account_number = '';
    /**
     * Generated from protobuf field <code>bool is_primary = 5;</code>
     */
    protected $is_primary = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $bank_account_type
     *     @type string $beneficiary_name
     *     @type string $ifsc_code
     *     @type string $bank_account_number
     *     @type bool $is_primary
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\Entities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string bank_account_type = 1;</code>
     * @return string
     */
    public function getBankAccountType()
    {
        return $this->bank_account_type;
    }

    /**
     * Generated from protobuf field <code>string bank_account_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setBankAccountType($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_account_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string beneficiary_name = 2;</code>
     * @return string
     */
    public function getBeneficiaryName()
    {
        return $this->beneficiary_name;
    }

    /**
     * Generated from protobuf field <code>string beneficiary_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBeneficiaryName($var)
    {
        GPBUtil::checkString($var, True);
        $this->beneficiary_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ifsc_code = 3;</code>
     * @return string
     */
    public function getIfscCode()
    {
        return $this->ifsc_code;
    }

    /**
     * Generated from protobuf field <code>string ifsc_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIfscCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->ifsc_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string bank_account_number = 4;</code>
     * @return string
     */
    public function getBankAccountNumber()
    {
        return $this->bank_account_number;
    }

    /**
     * Generated from protobuf field <code>string bank_account_number = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setBankAccountNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->bank_account_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_primary = 5;</code>
     * @return bool
     */
    public function getIsPrimary()
    {
        return $this->is_primary;
    }

    /**
     * Generated from protobuf field <code>bool is_primary = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPrimary($var)
    {
        GPBUtil::checkBool($var);
        $this->is_primary = $var;

        return $this;
    }

}

