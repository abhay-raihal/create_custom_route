<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/consentdocumentmanager/v2/get_consent_documents.proto

namespace Platform\Bvs\Consentdocumentmanager\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.consentdocumentmanager.v2.Page</code>
 */
class Page extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.google.protobuf.UInt32Value number = 1;</code>
     */
    protected $number = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.UInt32Value limit = 2;</code>
     */
    protected $limit = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\UInt32Value $number
     *     @type \Google\Protobuf\UInt32Value $limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Consentdocumentmanager\V2\GetConsentDocuments::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.UInt32Value number = 1;</code>
     * @return \Google\Protobuf\UInt32Value|null
     */
    public function getNumber()
    {
        return $this->number;
    }

    public function hasNumber()
    {
        return isset($this->number);
    }

    public function clearNumber()
    {
        unset($this->number);
    }

    /**
     * Returns the unboxed value from <code>getNumber()</code>

     * Generated from protobuf field <code>.google.protobuf.UInt32Value number = 1;</code>
     * @return int|null
     */
    public function getNumberUnwrapped()
    {
        return $this->readWrapperValue("number");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.UInt32Value number = 1;</code>
     * @param \Google\Protobuf\UInt32Value $var
     * @return $this
     */
    public function setNumber($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\UInt32Value::class);
        $this->number = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\UInt32Value object.

     * Generated from protobuf field <code>.google.protobuf.UInt32Value number = 1;</code>
     * @param int|null $var
     * @return $this
     */
    public function setNumberUnwrapped($var)
    {
        $this->writeWrapperValue("number", $var);
        return $this;}

    /**
     * Generated from protobuf field <code>.google.protobuf.UInt32Value limit = 2;</code>
     * @return \Google\Protobuf\UInt32Value|null
     */
    public function getLimit()
    {
        return $this->limit;
    }

    public function hasLimit()
    {
        return isset($this->limit);
    }

    public function clearLimit()
    {
        unset($this->limit);
    }

    /**
     * Returns the unboxed value from <code>getLimit()</code>

     * Generated from protobuf field <code>.google.protobuf.UInt32Value limit = 2;</code>
     * @return int|null
     */
    public function getLimitUnwrapped()
    {
        return $this->readWrapperValue("limit");
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.UInt32Value limit = 2;</code>
     * @param \Google\Protobuf\UInt32Value $var
     * @return $this
     */
    public function setLimit($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\UInt32Value::class);
        $this->limit = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\UInt32Value object.

     * Generated from protobuf field <code>.google.protobuf.UInt32Value limit = 2;</code>
     * @param int|null $var
     * @return $this
     */
    public function setLimitUnwrapped($var)
    {
        $this->writeWrapperValue("limit", $var);
        return $this;}

}

