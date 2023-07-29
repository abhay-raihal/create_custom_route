<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/account_api.proto

namespace Rzp\Accounts\Account\V1\Account;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.Account.Profile</code>
 */
class Profile extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string category = 1;</code>
     */
    protected $category = '';
    /**
     * Generated from protobuf field <code>string subcategory = 2;</code>
     */
    protected $subcategory = '';
    /**
     * Generated from protobuf field <code>map<string, .rzp.accounts.account.v1.Address> addresses = 3;</code>
     */
    private $addresses;
    /**
     * Generated from protobuf field <code>string description = 4;</code>
     */
    protected $description = '';
    /**
     * Generated from protobuf field <code>string business_model = 5;</code>
     */
    protected $business_model = '';
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.AuthorizedSignatory authorized_signatory = 6;</code>
     */
    protected $authorized_signatory = null;
    /**
     * Generated from protobuf field <code>string date_of_establishment = 7;</code>
     */
    protected $date_of_establishment = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $category
     *     @type string $subcategory
     *     @type array|\Google\Protobuf\Internal\MapField $addresses
     *     @type string $description
     *     @type string $business_model
     *     @type \Rzp\Accounts\Account\V1\Account\AuthorizedSignatory $authorized_signatory
     *     @type string $date_of_establishment
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\AccountApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string category = 1;</code>
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Generated from protobuf field <code>string category = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->category = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subcategory = 2;</code>
     * @return string
     */
    public function getSubcategory()
    {
        return $this->subcategory;
    }

    /**
     * Generated from protobuf field <code>string subcategory = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubcategory($var)
    {
        GPBUtil::checkString($var, True);
        $this->subcategory = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<string, .rzp.accounts.account.v1.Address> addresses = 3;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAddresses()
    {
        return $this->addresses;
    }

    /**
     * Generated from protobuf field <code>map<string, .rzp.accounts.account.v1.Address> addresses = 3;</code>
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
     * Generated from protobuf field <code>string description = 4;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Generated from protobuf field <code>string description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string business_model = 5;</code>
     * @return string
     */
    public function getBusinessModel()
    {
        return $this->business_model;
    }

    /**
     * Generated from protobuf field <code>string business_model = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setBusinessModel($var)
    {
        GPBUtil::checkString($var, True);
        $this->business_model = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.AuthorizedSignatory authorized_signatory = 6;</code>
     * @return \Rzp\Accounts\Account\V1\Account\AuthorizedSignatory|null
     */
    public function getAuthorizedSignatory()
    {
        return $this->authorized_signatory;
    }

    public function hasAuthorizedSignatory()
    {
        return isset($this->authorized_signatory);
    }

    public function clearAuthorizedSignatory()
    {
        unset($this->authorized_signatory);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.Account.AuthorizedSignatory authorized_signatory = 6;</code>
     * @param \Rzp\Accounts\Account\V1\Account\AuthorizedSignatory $var
     * @return $this
     */
    public function setAuthorizedSignatory($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\Account\AuthorizedSignatory::class);
        $this->authorized_signatory = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string date_of_establishment = 7;</code>
     * @return string
     */
    public function getDateOfEstablishment()
    {
        return $this->date_of_establishment;
    }

    /**
     * Generated from protobuf field <code>string date_of_establishment = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDateOfEstablishment($var)
    {
        GPBUtil::checkString($var, True);
        $this->date_of_establishment = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Profile::class, \Rzp\Accounts\Account\V1\Account_Profile::class);

