<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/save_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.SaveAccountEntityRequest</code>
 */
class SaveAccountEntityRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string account_id = 1;</code>
     */
    protected $account_id = '';
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.ENTITY_NAME entity_name = 2;</code>
     */
    protected $entity_name = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct entity_value = 3;</code>
     */
    protected $entity_value = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $account_id
     *     @type int $entity_name
     *     @type \Google\Protobuf\Struct $entity_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\SaveApi::initOnce();
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
     * Generated from protobuf field <code>.rzp.accounts.account.v1.ENTITY_NAME entity_name = 2;</code>
     * @return int
     */
    public function getEntityName()
    {
        return $this->entity_name;
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.ENTITY_NAME entity_name = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setEntityName($var)
    {
        GPBUtil::checkEnum($var, \Rzp\Accounts\Account\V1\ENTITY_NAME::class);
        $this->entity_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct entity_value = 3;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getEntityValue()
    {
        return $this->entity_value;
    }

    public function hasEntityValue()
    {
        return isset($this->entity_value);
    }

    public function clearEntityValue()
    {
        unset($this->entity_value);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct entity_value = 3;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setEntityValue($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->entity_value = $var;

        return $this;
    }

}

