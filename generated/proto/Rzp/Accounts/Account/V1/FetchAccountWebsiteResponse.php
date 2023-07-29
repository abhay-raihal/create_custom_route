<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/websites_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.FetchAccountWebsiteResponse</code>
 */
class FetchAccountWebsiteResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string audit_id = 2;</code>
     */
    protected $audit_id = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct account_data = 3;</code>
     */
    protected $account_data = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct admin_data = 4;</code>
     */
    protected $admin_data = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct additional_data = 5;</code>
     */
    protected $additional_data = null;
    /**
     * Generated from protobuf field <code>string account_id = 6;</code>
     */
    protected $account_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $audit_id
     *     @type \Google\Protobuf\Struct $account_data
     *     @type \Google\Protobuf\Struct $admin_data
     *     @type \Google\Protobuf\Struct $additional_data
     *     @type string $account_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\WebsitesApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string audit_id = 2;</code>
     * @return string
     */
    public function getAuditId()
    {
        return $this->audit_id;
    }

    /**
     * Generated from protobuf field <code>string audit_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAuditId($var)
    {
        GPBUtil::checkString($var, True);
        $this->audit_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct account_data = 3;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getAccountData()
    {
        return $this->account_data;
    }

    public function hasAccountData()
    {
        return isset($this->account_data);
    }

    public function clearAccountData()
    {
        unset($this->account_data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct account_data = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setAccountData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->account_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct admin_data = 4;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getAdminData()
    {
        return $this->admin_data;
    }

    public function hasAdminData()
    {
        return isset($this->admin_data);
    }

    public function clearAdminData()
    {
        unset($this->admin_data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct admin_data = 4;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setAdminData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->admin_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct additional_data = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getAdditionalData()
    {
        return $this->additional_data;
    }

    public function hasAdditionalData()
    {
        return isset($this->additional_data);
    }

    public function clearAdditionalData()
    {
        unset($this->additional_data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct additional_data = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setAdditionalData($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->additional_data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_id = 6;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Generated from protobuf field <code>string account_id = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

}
