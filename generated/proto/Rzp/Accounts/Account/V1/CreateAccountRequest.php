<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/account_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.CreateAccountRequest</code>
 */
class CreateAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string org_id = 1;</code>
     */
    protected $org_id = '';
    /**
     * Generated from protobuf field <code>string email = 2;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string reference_id = 3;</code>
     */
    protected $reference_id = '';
    /**
     * Generated from protobuf field <code>string parent_id = 4;</code>
     */
    protected $parent_id = '';
    /**
     * Generated from protobuf field <code>string legal_entity_id = 5;</code>
     */
    protected $legal_entity_id = '';
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Profile profile = 6;</code>
     */
    protected $profile = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct notes = 7;</code>
     */
    protected $notes = null;
    /**
     * Generated from protobuf field <code>string display_name = 8;</code>
     */
    protected $display_name = '';
    /**
     * Generated from protobuf field <code>repeated string transaction_report_emails = 9;</code>
     */
    private $transaction_report_emails;
    /**
     * Generated from protobuf field <code>map<string, string> legal_info = 10;</code>
     */
    private $legal_info;
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Apps apps = 11;</code>
     */
    protected $apps = null;
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Brand brand = 12;</code>
     */
    protected $brand = null;
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.ContactInfo contact_info = 13;</code>
     */
    protected $contact_info = null;
    /**
     * Generated from protobuf field <code>string legal_business_name = 14;</code>
     */
    protected $legal_business_name = '';
    /**
     * Generated from protobuf field <code>string customer_facing_business_name = 15;</code>
     */
    protected $customer_facing_business_name = '';
    /**
     * Generated from protobuf field <code>string business_type = 16;</code>
     */
    protected $business_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $org_id
     *     @type string $email
     *     @type string $reference_id
     *     @type string $parent_id
     *     @type string $legal_entity_id
     *     @type \Rzp\Accounts\Account\V1\Account\Profile $profile
     *     @type \Google\Protobuf\Struct $notes
     *     @type string $display_name
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $transaction_report_emails
     *     @type array|\Google\Protobuf\Internal\MapField $legal_info
     *     @type \Rzp\Accounts\Account\V1\Account\Apps $apps
     *     @type \Rzp\Accounts\Account\V1\Account\Brand $brand
     *     @type \Rzp\Accounts\Account\V1\Account\ContactInfo $contact_info
     *     @type string $legal_business_name
     *     @type string $customer_facing_business_name
     *     @type string $business_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\AccountApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string org_id = 1;</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * Generated from protobuf field <code>string org_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string email = 2;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 2;</code>
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
     * Generated from protobuf field <code>string reference_id = 3;</code>
     * @return string
     */
    public function getReferenceId()
    {
        return $this->reference_id;
    }

    /**
     * Generated from protobuf field <code>string reference_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setReferenceId($var)
    {
        GPBUtil::checkString($var, True);
        $this->reference_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string parent_id = 4;</code>
     * @return string
     */
    public function getParentId()
    {
        return $this->parent_id;
    }

    /**
     * Generated from protobuf field <code>string parent_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setParentId($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string legal_entity_id = 5;</code>
     * @return string
     */
    public function getLegalEntityId()
    {
        return $this->legal_entity_id;
    }

    /**
     * Generated from protobuf field <code>string legal_entity_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setLegalEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->legal_entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Profile profile = 6;</code>
     * @return \Rzp\Accounts\Account\V1\Account\Profile|null
     */
    public function getProfile()
    {
        return $this->profile;
    }

    public function hasProfile()
    {
        return isset($this->profile);
    }

    public function clearProfile()
    {
        unset($this->profile);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Profile profile = 6;</code>
     * @param \Rzp\Accounts\Account\V1\Account\Profile $var
     * @return $this
     */
    public function setProfile($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\Account\Profile::class);
        $this->profile = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct notes = 7;</code>
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
     * Generated from protobuf field <code>.google.protobuf.Struct notes = 7;</code>
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
     * Generated from protobuf field <code>string display_name = 8;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Generated from protobuf field <code>string display_name = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string transaction_report_emails = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransactionReportEmails()
    {
        return $this->transaction_report_emails;
    }

    /**
     * Generated from protobuf field <code>repeated string transaction_report_emails = 9;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransactionReportEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->transaction_report_emails = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, string> legal_info = 10;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLegalInfo()
    {
        return $this->legal_info;
    }

    /**
     * Generated from protobuf field <code>map<string, string> legal_info = 10;</code>
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
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Apps apps = 11;</code>
     * @return \Rzp\Accounts\Account\V1\Account\Apps|null
     */
    public function getApps()
    {
        return $this->apps;
    }

    public function hasApps()
    {
        return isset($this->apps);
    }

    public function clearApps()
    {
        unset($this->apps);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Apps apps = 11;</code>
     * @param \Rzp\Accounts\Account\V1\Account\Apps $var
     * @return $this
     */
    public function setApps($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\Account\Apps::class);
        $this->apps = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Brand brand = 12;</code>
     * @return \Rzp\Accounts\Account\V1\Account\Brand|null
     */
    public function getBrand()
    {
        return $this->brand;
    }

    public function hasBrand()
    {
        return isset($this->brand);
    }

    public function clearBrand()
    {
        unset($this->brand);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.Brand brand = 12;</code>
     * @param \Rzp\Accounts\Account\V1\Account\Brand $var
     * @return $this
     */
    public function setBrand($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\Account\Brand::class);
        $this->brand = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.ContactInfo contact_info = 13;</code>
     * @return \Rzp\Accounts\Account\V1\Account\ContactInfo|null
     */
    public function getContactInfo()
    {
        return $this->contact_info;
    }

    public function hasContactInfo()
    {
        return isset($this->contact_info);
    }

    public function clearContactInfo()
    {
        unset($this->contact_info);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.ContactInfo contact_info = 13;</code>
     * @param \Rzp\Accounts\Account\V1\Account\ContactInfo $var
     * @return $this
     */
    public function setContactInfo($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\Account\ContactInfo::class);
        $this->contact_info = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string legal_business_name = 14;</code>
     * @return string
     */
    public function getLegalBusinessName()
    {
        return $this->legal_business_name;
    }

    /**
     * Generated from protobuf field <code>string legal_business_name = 14;</code>
     * @param string $var
     * @return $this
     */
    public function setLegalBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->legal_business_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string customer_facing_business_name = 15;</code>
     * @return string
     */
    public function getCustomerFacingBusinessName()
    {
        return $this->customer_facing_business_name;
    }

    /**
     * Generated from protobuf field <code>string customer_facing_business_name = 15;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomerFacingBusinessName($var)
    {
        GPBUtil::checkString($var, True);
        $this->customer_facing_business_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_type = 16;</code>
     * @return string
     */
    public function getBusinessType()
    {
        return $this->business_type;
    }

    /**
     * Generated from protobuf field <code>string business_type = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessType($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_type = $var;

        return $this;
    }

}

