<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/stakeholder_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.MerchantAddress</code>
 */
class MerchantAddress extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string line1 = 2;</code>
     */
    protected $line1 = '';
    /**
     * Generated from protobuf field <code>string line2 = 3;</code>
     */
    protected $line2 = '';
    /**
     * Generated from protobuf field <code>string city = 4;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>string state = 5;</code>
     */
    protected $state = '';
    /**
     * Generated from protobuf field <code>string zipcode = 6;</code>
     */
    protected $zipcode = '';
    /**
     * Generated from protobuf field <code>string country = 7;</code>
     */
    protected $country = '';
    /**
     * Generated from protobuf field <code>string district = 8;</code>
     */
    protected $district = '';
    /**
     * Generated from protobuf field <code>string entity_id = 9;</code>
     */
    protected $entity_id = '';
    /**
     * Generated from protobuf field <code>string entity_type = 10;</code>
     */
    protected $entity_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $line1
     *     @type string $line2
     *     @type string $city
     *     @type string $state
     *     @type string $zipcode
     *     @type string $country
     *     @type string $district
     *     @type string $entity_id
     *     @type string $entity_type
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
     * Generated from protobuf field <code>string line1 = 2;</code>
     * @return string
     */
    public function getLine1()
    {
        return $this->line1;
    }

    /**
     * Generated from protobuf field <code>string line1 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLine1($var)
    {
        GPBUtil::checkString($var, True);
        $this->line1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string line2 = 3;</code>
     * @return string
     */
    public function getLine2()
    {
        return $this->line2;
    }

    /**
     * Generated from protobuf field <code>string line2 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setLine2($var)
    {
        GPBUtil::checkString($var, True);
        $this->line2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 4;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCity($var)
    {
        GPBUtil::checkString($var, True);
        $this->city = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string state = 5;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>string state = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string zipcode = 6;</code>
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Generated from protobuf field <code>string zipcode = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setZipcode($var)
    {
        GPBUtil::checkString($var, True);
        $this->zipcode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 7;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setCountry($var)
    {
        GPBUtil::checkString($var, True);
        $this->country = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string district = 8;</code>
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Generated from protobuf field <code>string district = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setDistrict($var)
    {
        GPBUtil::checkString($var, True);
        $this->district = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string entity_id = 9;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Generated from protobuf field <code>string entity_id = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string entity_type = 10;</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Generated from protobuf field <code>string entity_type = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

}
