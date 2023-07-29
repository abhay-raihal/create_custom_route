<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/sync_deviation/v1/sync_deviation_api.proto

namespace Rzp\Accounts\SyncDeviation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.sync_deviation.v1.StringList</code>
 */
class StringList extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated string value = 1;</code>
     */
    private $value;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Accounts\SyncDeviation\V1\SyncDeviationApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated string value = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Generated from protobuf field <code>repeated string value = 1;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValue($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->value = $arr;

        return $this;
    }

}
