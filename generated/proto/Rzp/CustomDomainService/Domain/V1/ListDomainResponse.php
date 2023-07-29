<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: custom-domain-service/domain/v1/domain_api.proto

namespace Rzp\CustomDomainService\Domain\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.custom_domain_service.domain.v1.ListDomainResponse</code>
 */
class ListDomainResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 count = 1;</code>
     */
    protected $count = 0;
    /**
     * Generated from protobuf field <code>string entity = 2;</code>
     */
    protected $entity = '';
    /**
     * Generated from protobuf field <code>repeated .rzp.custom_domain_service.domain.v1.DomainResponse items = 3;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $count
     *     @type string $entity
     *     @type \Rzp\CustomDomainService\Domain\V1\DomainResponse[]|\Google\Protobuf\Internal\RepeatedField $items
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
     * Generated from protobuf field <code>string entity = 2;</code>
     * @return string
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * Generated from protobuf field <code>string entity = 2;</code>
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
     * Generated from protobuf field <code>repeated .rzp.custom_domain_service.domain.v1.DomainResponse items = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .rzp.custom_domain_service.domain.v1.DomainResponse items = 3;</code>
     * @param \Rzp\CustomDomainService\Domain\V1\DomainResponse[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rzp\CustomDomainService\Domain\V1\DomainResponse::class);
        $this->items = $arr;

        return $this;
    }

}

