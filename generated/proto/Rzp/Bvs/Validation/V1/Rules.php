<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/validation/v1/validation.proto

namespace Rzp\Bvs\Validation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.validation.v1.Rules</code>
 */
class Rules extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string version = 1;</code>
     */
    protected $version = '';
    /**
     * Generated from protobuf field <code>map<int32, .platform.bvs.validation.v1.Rule> rules_list = 2;</code>
     */
    private $rules_list;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $version
     *     @type array|\Google\Protobuf\Internal\MapField $rules_list
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Validation\V1\Validation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string version = 1;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Generated from protobuf field <code>string version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>map<int32, .platform.bvs.validation.v1.Rule> rules_list = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getRulesList()
    {
        return $this->rules_list;
    }

    /**
     * Generated from protobuf field <code>map<int32, .platform.bvs.validation.v1.Rule> rules_list = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setRulesList($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rzp\Bvs\Validation\V1\Rule::class);
        $this->rules_list = $arr;

        return $this;
    }

}

