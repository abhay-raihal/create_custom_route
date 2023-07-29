<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: accounts/sync_deviation/v1/sync_deviation_api.proto

namespace Rzp\Accounts\SyncDeviation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.sync_deviation.v1.SyncAccountDeviationRequest</code>
 */
class SyncAccountDeviationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     * Generated from protobuf field <code>bool mock = 2;</code>
     */
    protected $mock = false;
    /**
     * Generated from protobuf field <code>string mode = 3;</code>
     */
    protected $mode = '';
    /**
     * Generated from protobuf field <code>.rzp.accounts.sync_deviation.v1.Metadata metadata = 4;</code>
     */
    protected $metadata = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *     @type bool $mock
     *     @type string $mode
     *     @type \Rzp\Accounts\SyncDeviation\V1\Metadata $metadata
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Accounts\SyncDeviation\V1\SyncDeviationApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @return string
     */
    public function getAccountId()
    {
        return $this->account_id;
    }

    /**
     * Generated from protobuf field <code>string account_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->account_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool mock = 2;</code>
     * @return bool
     */
    public function getMock()
    {
        return $this->mock;
    }

    /**
     * Generated from protobuf field <code>bool mock = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setMock($var)
    {
        GPBUtil::checkBool($var);
        $this->mock = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string mode = 3;</code>
     * @return string
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * Generated from protobuf field <code>string mode = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setMode($var)
    {
        GPBUtil::checkString($var, True);
        $this->mode = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.sync_deviation.v1.Metadata metadata = 4;</code>
     * @return \Rzp\Accounts\SyncDeviation\V1\Metadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.sync_deviation.v1.Metadata metadata = 4;</code>
     * @param \Rzp\Accounts\SyncDeviation\V1\Metadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\SyncDeviation\V1\Metadata::class);
        $this->metadata = $var;

        return $this;
    }

}

