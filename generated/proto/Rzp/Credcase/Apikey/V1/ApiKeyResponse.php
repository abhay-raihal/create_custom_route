<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: credcase/apikey/v1/api_key_api.proto

namespace Rzp\Credcase\Apikey\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.credcase.apikey.v1.ApiKeyResponse</code>
 */
class ApiKeyResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 2;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string entity = 3;</code>
     */
    protected $entity = '';
    /**
     * Generated from protobuf field <code>string domain = 4;</code>
     */
    protected $domain = '';
    /**
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 5;</code>
     */
    protected $mode = 0;
    /**
     * Generated from protobuf field <code>string owner_id = 6;</code>
     */
    protected $owner_id = '';
    /**
     * Generated from protobuf field <code>string owner_type = 7;</code>
     */
    protected $owner_type = '';
    /**
     * Generated from protobuf field <code>int32 created_at = 8;</code>
     */
    protected $created_at = 0;
    /**
     * Generated from protobuf field <code>int32 updated_at = 9;</code>
     */
    protected $updated_at = 0;
    /**
     * Generated from protobuf field <code>int32 expired_at = 10;</code>
     */
    protected $expired_at = 0;
    /**
     * Generated from protobuf field <code>int32 deleted_at = 11;</code>
     */
    protected $deleted_at = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $entity
     *     @type string $domain
     *     @type int $mode
     *     @type string $owner_id
     *     @type string $owner_type
     *     @type int $created_at
     *     @type int $updated_at
     *     @type int $expired_at
     *     @type int $deleted_at
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Credcase\Apikey\V1\ApiKeyApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
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
     * Generated from protobuf field <code>string entity = 3;</code>
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Generated from protobuf field <code>string entity = 3;</code>
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
     * Generated from protobuf field <code>string domain = 4;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Generated from protobuf field <code>string domain = 4;</code>
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
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 5;</code>
     * @return int
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Generated from protobuf field <code>.rzp.common.mode.v1.Mode mode = 5;</code>
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
     * Generated from protobuf field <code>string owner_id = 6;</code>
     * @return string
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 6;</code>
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
     * Generated from protobuf field <code>string owner_type = 7;</code>
     * @return string
     */
    public function getOwnerType()
    {
        return $this->owner_type;
    }

    /**
     * Generated from protobuf field <code>string owner_type = 7;</code>
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
     * Generated from protobuf field <code>int32 created_at = 8;</code>
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * Generated from protobuf field <code>int32 created_at = 8;</code>
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
     * Generated from protobuf field <code>int32 updated_at = 9;</code>
     * @return int
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * Generated from protobuf field <code>int32 updated_at = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setUpdatedAt($var)
    {
        GPBUtil::checkInt32($var);
        $this->updated_at = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 expired_at = 10;</code>
     * @return int
     */
    public function getExpiredAt()
    {
        return $this->expired_at;
    }

    /**
     * Generated from protobuf field <code>int32 expired_at = 10;</code>
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
     * Generated from protobuf field <code>int32 deleted_at = 11;</code>
     * @return int
     */
    public function getDeletedAt()
    {
        return $this->deleted_at;
    }

    /**
     * Generated from protobuf field <code>int32 deleted_at = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setDeletedAt($var)
    {
        GPBUtil::checkInt32($var);
        $this->deleted_at = $var;

        return $this;
    }

}

