<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: credcase/apikey/v1/api_key_api.proto

namespace Rzp\Credcase\Apikey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.credcase.apikey.v1.ApiKeyCreateRequest</code>
 */
class ApiKeyCreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string domain = 1;</code>
     */
    protected $domain = '';
    /**
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 2;</code>
     */
    protected $mode = 0;
    /**
     * Generated from protobuf field <code>string owner_id = 3;</code>
     */
    protected $owner_id = '';
    /**
     * Generated from protobuf field <code>string owner_type = 4;</code>
     */
    protected $owner_type = '';
    /**
     * Generated from protobuf field <code>repeated string role_ids = 5;</code>
     */
    private $role_ids;
    /**
     * Generated from protobuf field <code>repeated string role_names = 6;</code>
     */
    private $role_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain
     *     @type int $mode
     *     @type string $owner_id
     *     @type string $owner_type
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $role_ids
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $role_names
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Credcase\Apikey\V1\ApiKeyApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string domain = 1;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Generated from protobuf field <code>string domain = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 2;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkEnum($var, \Rzp\Common\Mode\V1\Mode::class);
        $this->mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 3;</code>
     * @return string
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner_type = 4;</code>
     * @return string
     */
    public function getOwnerType()
    {
        return $this->owner_type;
    }

    /**
     * Generated from protobuf field <code>string owner_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerType($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string role_ids = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoleIds()
    {
        return $this->role_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string role_ids = 5;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoleIds($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->role_ids = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string role_names = 6;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoleNames()
    {
        return $this->role_names;
    }

    /**
     * Generated from protobuf field <code>repeated string role_names = 6;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setRoleNames($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->role_names = $arr;

        return $this;
    }

}
