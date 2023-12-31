<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: custom-domain-service/domain/v1/domain_api.proto

namespace Rzp\CustomDomainService\Domain\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.custom_domain_service.domain.v1.ListDomainRequest</code>
 */
class ListDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 count = 1;</code>
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>int32 skip = 2;</code>
     */
    protected $skip = 0;
    /**
     * Generated from protobuf field <code>int32 from = 3;</code>
     */
    protected $from = 0;
    /**
     * Generated from protobuf field <code>int32 to = 4;</code>
     */
    protected $to = 0;
    /**
     * custom fields to filter on
     *
     * Generated from protobuf field <code>string merchant_id = 11;</code>
     */
    protected $merchant_id = '';
    /**
     * Generated from protobuf field <code>string domain_name = 12;</code>
     */
    protected $domain_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $count
     *     @type int $skip
     *     @type int $from
     *     @type int $to
     *     @type string $merchant_id
     *           custom fields to filter on
     *     @type string $domain_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CustomDomainService\Domain\V1\DomainApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 count = 1;</code>
     * @return int
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Generated from protobuf field <code>int32 count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 skip = 2;</code>
     * @return int
     */
    public function getSkip()
    {
        return $this->skip;
    }

    /**
     * Generated from protobuf field <code>int32 skip = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSkip($var)
    {
        GPBUtil::checkInt32($var);
        $this->skip = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 from = 3;</code>
     * @return int
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Generated from protobuf field <code>int32 from = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkInt32($var);
        $this->from = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 to = 4;</code>
     * @return int
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Generated from protobuf field <code>int32 to = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setTo($var)
    {
        GPBUtil::checkInt32($var);
        $this->to = $var;

        return $this;
    }

    /**
     * custom fields to filter on
     *
     * Generated from protobuf field <code>string merchant_id = 11;</code>
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchant_id;
    }

    /**
     * custom fields to filter on
     *
     * Generated from protobuf field <code>string merchant_id = 11;</code>
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
     * Generated from protobuf field <code>string domain_name = 12;</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * Generated from protobuf field <code>string domain_name = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainName($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain_name = $var;

        return $this;
    }

}

