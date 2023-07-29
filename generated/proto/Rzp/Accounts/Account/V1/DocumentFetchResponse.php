<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/document_api.proto

namespace Rzp\Accounts\Account\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.DocumentFetchResponse</code>
 */
class DocumentFetchResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .rzp.accounts.account.v1.Document documents = 1;</code>
     */
    private $documents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Rzp\Accounts\Account\V1\Document>|\Google\Protobuf\Internal\RepeatedField $documents
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\DocumentApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .rzp.accounts.account.v1.Document documents = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * Generated from protobuf field <code>repeated .rzp.accounts.account.v1.Document documents = 1;</code>
     * @param array<\Rzp\Accounts\Account\V1\Document>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDocuments($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Rzp\Accounts\Account\V1\Document::class);
        $this->documents = $arr;

        return $this;
    }

}
