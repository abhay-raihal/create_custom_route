<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: credcase/migrate/v1/migrate_api.proto

namespace Rzp\Credcase\Migrate\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.credcase.migrate.v1.MigrateApiKeyRequest</code>
 */
class MigrateApiKeyRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string secret = 2;</code>
     */
    protected $secret = '';
    /**
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 3;</code>
     */
    protected $mode = 0;
    /**
     *deprecated
     *
     * Generated from protobuf field <code>string merchant_id = 4;</code>
     */
    protected $merchant_id = '';
    /**
     * Generated from protobuf field <code>int32 created_at = 5;</code>
     */
    protected $created_at = 0;
    /**
     * Generated from protobuf field <code>int32 expired_at = 6;</code>
     */
    protected $expired_at = 0;
    /**
     * Generated from protobuf field <code>repeated string role_ids = 7;</code>
     */
    private $role_ids;
    /**
     * Generated from protobuf field <code>string domain = 8;</code>
     */
    protected $domain = '';
    /**
     * Generated from protobuf field <code>string owner_type = 9;</code>
     */
    protected $owner_type = '';
    /**
     * Generated from protobuf field <code>string owner_id = 10;</code>
     */
    protected $owner_id = '';
    /**
     * Generated from protobuf field <code>repeated string role_names = 11;</code>
     */
    private $role_names;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $secret
     *     @type int $mode
     *     @type string $merchant_id
     *          deprecated
     *     @type int $created_at
     *     @type int $expired_at
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $role_ids
     *     @type string $domain
     *     @type string $owner_type
     *     @type string $owner_id
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $role_names
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Credcase\Migrate\V1\MigrateApi::initOnce();
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
     * Generated from protobuf field <code>string secret = 2;</code>
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Generated from protobuf field <code>string secret = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSecret($var)
    {
        GPBUtil::checkString($var, True);
        $this->secret = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 3;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 3;</code>
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
     *deprecated
     *
     * Generated from protobuf field <code>string merchant_id = 4;</code>
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     *deprecated
     *
     * Generated from protobuf field <code>string merchant_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setMerchantId($var)
    {
        GPBUtil::checkString($var, True);
        $this->merchant_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 created_at = 5;</code>
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>int32 created_at = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCreatedAt($var)
    {
        GPBUtil::checkInt32($var);
        $this->created_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 expired_at = 6;</code>
     * @return int
     */
    public function getExpiredAt()
    {
        return $this->expired_at;
    }

    /**
     * Generated from protobuf field <code>int32 expired_at = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setExpiredAt($var)
    {
        GPBUtil::checkInt32($var);
        $this->expired_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string role_ids = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoleIds()
    {
        return $this->role_ids;
    }

    /**
     * Generated from protobuf field <code>repeated string role_ids = 7;</code>
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
     * Generated from protobuf field <code>string domain = 8;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Generated from protobuf field <code>string domain = 8;</code>
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
     * Generated from protobuf field <code>string owner_type = 9;</code>
     * @return string
     */
    public function getOwnerType()
    {
        return $this->owner_type;
    }

    /**
     * Generated from protobuf field <code>string owner_type = 9;</code>
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
     * Generated from protobuf field <code>string owner_id = 10;</code>
     * @return string
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 10;</code>
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
     * Generated from protobuf field <code>repeated string role_names = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getRoleNames()
    {
        return $this->role_names;
    }

    /**
     * Generated from protobuf field <code>repeated string role_names = 11;</code>
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

