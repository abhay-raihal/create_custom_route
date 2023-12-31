<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/save_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.SaveAccountEntityResponse</code>
 */
class SaveAccountEntityResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_saved = 1;</code>
     */
    protected $is_saved = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_saved
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\SaveApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_saved = 1;</code>
     * @return bool
     */
    public function getIsSaved()
    {
        return $this->is_saved;
    }

    /**
     * Generated from protobuf field <code>bool is_saved = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsSaved($var)
    {
        GPBUtil::checkBool($var);
        $this->is_saved = $var;

        return $this;
    }

}

