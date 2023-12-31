<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: credcase/identifier/v1/identifier_api.proto

namespace Rzp\Credcase\Identifier\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.credcase.identifier.v1.IdentifierCreatePublicRequest</code>
 */
class IdentifierCreatePublicRequest extends \Google\Protobuf\Internal\Message
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
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain
     *     @type int $mode
     *     @type string $owner_id
     *     @type string $owner_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Credcase\Identifier\V1\IdentifierApi::initOnce();
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

}

