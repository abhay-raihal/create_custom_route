<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/entities.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.Contact</code>
 */
class Contact extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string email = 1;</code>
     */
    protected $email = '';
    /**
     * Generated from protobuf field <code>string phone_primary = 2;</code>
     */
    protected $phone_primary = '';
    /**
     * Generated from protobuf field <code>string phone_secondary = 3;</code>
     */
    protected $phone_secondary = '';
    /**
     * Generated from protobuf field <code>string landline = 4;</code>
     */
    protected $landline = '';
    /**
     * Generated from protobuf field <code>string url = 5;</code>
     */
    protected $url = '';
    /**
     * Generated from protobuf field <code>string policy = 6;</code>
     */
    protected $policy = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $email
     *     @type string $phone_primary
     *     @type string $phone_secondary
     *     @type string $landline
     *     @type string $url
     *     @type string $policy
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\Entities::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Generated from protobuf field <code>string email = 1;</code>
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
     * Generated from protobuf field <code>string phone_primary = 2;</code>
     * @return string
     */
    public function getPhonePrimary()
    {
        return $this->phone_primary;
    }

    /**
     * Generated from protobuf field <code>string phone_primary = 2;</code>
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
     * Generated from protobuf field <code>string phone_secondary = 3;</code>
     * @return string
     */
    public function getPhoneSecondary()
    {
        return $this->phone_secondary;
    }

    /**
     * Generated from protobuf field <code>string phone_secondary = 3;</code>
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
     * Generated from protobuf field <code>string landline = 4;</code>
     * @return string
     */
    public function getLandline()
    {
        return $this->landline;
    }

    /**
     * Generated from protobuf field <code>string landline = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setLandline($var)
    {
        GPBUtil::checkString($var, True);
        $this->landline = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string url = 5;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Generated from protobuf field <code>string url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string policy = 6;</code>
     * @return string
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * Generated from protobuf field <code>string policy = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setPolicy($var)
    {
        GPBUtil::checkString($var, True);
        $this->policy = $var;

        return $this;
    }

}

