<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: custom-domain-service/propagation/v1/propagation_api.proto

namespace Rzp\CustomDomainService\Propagation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.custom_domain_service.propagation.v1.CheckRequest</code>
 */
class CheckRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string domain_name = 1;</code>
     */
    protected $domain_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $domain_name
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\CustomDomainService\Propagation\V1\PropagationApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string domain_name = 1;</code>
     * @return string
     */
    public function getDomainName()
    {
        return $this->domain_name;
    }

    /**
     * Generated from protobuf field <code>string domain_name = 1;</code>
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

