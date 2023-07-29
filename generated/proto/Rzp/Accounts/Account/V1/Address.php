<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/entities.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.Address</code>
 */
class Address extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string street1 = 1;</code>
     */
    protected $street1 = '';
    /**
     * Generated from protobuf field <code>string street2 = 2;</code>
     */
    protected $street2 = '';
    /**
     * Generated from protobuf field <code>string city = 3;</code>
     */
    protected $city = '';
    /**
     * Generated from protobuf field <code>string state = 4;</code>
     */
    protected $state = '';
    /**
     * Generated from protobuf field <code>string postal_code = 5;</code>
     */
    protected $postal_code = '';
    /**
     * Generated from protobuf field <code>string country = 6;</code>
     */
    protected $country = '';
    /**
     * Generated from protobuf field <code>string district = 7;</code>
     */
    protected $district = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $street1
     *     @type string $street2
     *     @type string $city
     *     @type string $state
     *     @type string $postal_code
     *     @type string $country
     *     @type string $district
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\Entities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string street1 = 1;</code>
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }

    /**
     * Generated from protobuf field <code>string street1 = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setStreet1($var)
    {
        GPBUtil::checkString($var, True);
        $this->street1 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string street2 = 2;</code>
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }

    /**
     * Generated from protobuf field <code>string street2 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStreet2($var)
    {
        GPBUtil::checkString($var, True);
        $this->street2 = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string city = 3;</code>
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Generated from protobuf field <code>string city = 3;</code>
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
     * Generated from protobuf field <code>string state = 4;</code>
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>string state = 4;</code>
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
     * Generated from protobuf field <code>string postal_code = 5;</code>
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postal_code;
    }

    /**
     * Generated from protobuf field <code>string postal_code = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setPostalCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->postal_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string country = 6;</code>
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Generated from protobuf field <code>string country = 6;</code>
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
     * Generated from protobuf field <code>string district = 7;</code>
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Generated from protobuf field <code>string district = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDistrict($var)
    {
        GPBUtil::checkString($var, True);
        $this->district = $var;

        return $this;
    }

}

