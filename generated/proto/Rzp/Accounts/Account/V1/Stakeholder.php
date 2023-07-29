<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/stakeholder_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.Stakeholder</code>
 */
class Stakeholder extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string entity = 2;</code>
     */
    protected $entity = '';
    /**
     * Generated from protobuf field <code>string account_id = 3;</code>
     */
    protected $account_id = '';
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Stakeholder.Relationship relationship = 4;</code>
     */
    protected $relationship = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct notes = 5;</code>
     */
    protected $notes = null;
    /**
     * Generated from protobuf field <code>map<string, string> legal_info = 6;</code>
     */
    private $legal_info;
    /**
     * Generated from protobuf field <code>string name = 7;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>int32 percentage_ownership = 8;</code>
     */
    protected $percentage_ownership = 0;
    /**
     * Generated from protobuf field <code>map<string, .rzp.accounts.account.v1.Address> addresses = 9;</code>
     */
    private $addresses;
    /**
     * Generated from protobuf field <code>string email = 10;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string phone_primary = 11;</code>
     */
    protected $phone_primary = '';
    /**
     * Generated from protobuf field <code>string phone_secondary = 12;</code>
     */
    protected $phone_secondary = '';
    /**
     * Generated from protobuf field <code>string audit_id = 13;</code>
     */
    protected $audit_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $entity
     *     @type string $account_id
     *     @type \Rzp\Accounts\Account\V1\Stakeholder\Relationship $relationship
     *     @type \Google\Protobuf\Struct $notes
     *     @type array|\Google\Protobuf\Internal\MapField $legal_info
     *     @type string $name
     *     @type int $percentage_ownership
     *     @type array|\Google\Protobuf\Internal\MapField $addresses
     *     @type string $email
     *     @type string $phone_primary
     *     @type string $phone_secondary
     *     @type string $audit_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\StakeholderApi::initOnce();
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
     * Generated from protobuf field <code>string entity = 2;</code>
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Generated from protobuf field <code>string entity = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string account_id = 3;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Generated from protobuf field <code>string account_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Stakeholder.Relationship relationship = 4;</code>
     * @return \Rzp\Accounts\Account\V1\Stakeholder\Relationship|null
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    public function hasRelationship()
    {
        return isset($this->relationship);
    }

    public function clearRelationship()
    {
        unset($this->relationship);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Stakeholder.Relationship relationship = 4;</code>
     * @param \Rzp\Accounts\Account\V1\Stakeholder\Relationship $var
     * @return $this
     */
    public function setRelationship($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\Stakeholder\Relationship::class);
        $this->relationship = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct notes = 5;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getNotes()
    {
        return $this->notes;
    }

    public function hasNotes()
    {
        return isset($this->notes);
    }

    public function clearNotes()
    {
        unset($this->notes);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct notes = 5;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setNotes($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->notes = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> legal_info = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLegalInfo()
    {
        return $this->legal_info;
    }

    /**
     * Generated from protobuf field <code>map<string, string> legal_info = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLegalInfo($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->legal_info = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string name = 7;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 percentage_ownership = 8;</code>
     * @return int
     */
    public function getPercentageOwnership()
    {
        return $this->percentage_ownership;
    }

    /**
     * Generated from protobuf field <code>int32 percentage_ownership = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPercentageOwnership($var)
    {
        GPBUtil::checkInt32($var);
        $this->percentage_ownership = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .rzp.accounts.account.v1.Address> addresses = 9;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Generated from protobuf field <code>map<string, .rzp.accounts.account.v1.Address> addresses = 9;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAddresses($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rzp\Accounts\Account\V1\Address::class);
        $this->addresses = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 10;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEmail($var)
    {
        GPBUtil::checkString($var, True);
        $this->email = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone_primary = 11;</code>
     * @return string
     */
    public function getPhonePrimary()
    {
        return $this->phone_primary;
    }

    /**
     * Generated from protobuf field <code>string phone_primary = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPhonePrimary($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_primary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string phone_secondary = 12;</code>
     * @return string
     */
    public function getPhoneSecondary()
    {
        return $this->phone_secondary;
    }

    /**
     * Generated from protobuf field <code>string phone_secondary = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setPhoneSecondary($var)
    {
        GPBUtil::checkString($var, True);
        $this->phone_secondary = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string audit_id = 13;</code>
     * @return string
     */
    public function getAuditId()
    {
        return $this->audit_id;
    }

    /**
     * Generated from protobuf field <code>string audit_id = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setAuditId($var)
    {
        GPBUtil::checkString($var, True);
        $this->audit_id = $var;

        return $this;
    }

}
