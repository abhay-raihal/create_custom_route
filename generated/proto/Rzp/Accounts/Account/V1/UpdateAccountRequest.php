<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/account_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.UpdateAccountRequest</code>
 */
class UpdateAccountRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.UpdateAccountRequest.UpdateAccountRequestBody entity = 1;</code>
     */
    protected $entity = null;
    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     */
    protected $field_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Rzp\Accounts\Account\V1\UpdateAccountRequest\UpdateAccountRequestBody $entity
     *     @type \Google\Protobuf\FieldMask $field_mask
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\AccountApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.UpdateAccountRequest.UpdateAccountRequestBody entity = 1;</code>
     * @return \Rzp\Accounts\Account\V1\UpdateAccountRequest\UpdateAccountRequestBody|null
     */
    public function getEntity()
    {
        return $this->entity;
    }

    public function hasEntity()
    {
        return isset($this->entity);
    }

    public function clearEntity()
    {
        unset($this->entity);
    }

    /**
     * Generated from protobuf field <code>.rzp.accounts.account.v1.UpdateAccountRequest.UpdateAccountRequestBody entity = 1;</code>
     * @param \Rzp\Accounts\Account\V1\UpdateAccountRequest\UpdateAccountRequestBody $var
     * @return $this
     */
    public function setEntity($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Accounts\Account\V1\UpdateAccountRequest\UpdateAccountRequestBody::class);
        $this->entity = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getFieldMask()
    {
        return $this->field_mask;
    }

    public function hasFieldMask()
    {
        return isset($this->field_mask);
    }

    public function clearFieldMask()
    {
        unset($this->field_mask);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.FieldMask field_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setFieldMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->field_mask = $var;

        return $this;
    }

}

