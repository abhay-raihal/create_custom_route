<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/validation/v2/validation.proto

namespace Rzp\Bvs\Validation\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.validation.v2.Rule</code>
 */
class Rule extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string rule_type = 1;</code>
     */
    protected $rule_type = '';
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct rule_def = 2;</code>
     */
    protected $rule_def = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $rule_type
     *     @type \Google\Protobuf\Struct $rule_def
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Validation\V2\Validation::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string rule_type = 1;</code>
     * @return string
     */
    public function getRuleType()
    {
        return $this->rule_type;
    }

    /**
     * Generated from protobuf field <code>string rule_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRuleType($var)
    {
        GPBUtil::checkString($var, True);
        $this->rule_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct rule_def = 2;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getRuleDef()
    {
        return $this->rule_def;
    }

    public function hasRuleDef()
    {
        return isset($this->rule_def);
    }

    public function clearRuleDef()
    {
        unset($this->rule_def);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct rule_def = 2;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setRuleDef($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->rule_def = $var;

        return $this;
    }

}

