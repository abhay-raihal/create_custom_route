<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/document_api.proto

namespace Rzp\Accounts\Account\V1\CreateDocumentsRequest;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>rzp.accounts.account.v1.CreateDocumentsRequest.DocumentCreateRequest</code>
 */
class DocumentCreateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string entity_type = 1;</code>
     */
    protected $entity_type = '';
    /**
     * Generated from protobuf field <code>string entity_id = 2;</code>
     */
    protected $entity_id = '';
    /**
     * Generated from protobuf field <code>string document_type = 3;</code>
     */
    protected $document_type = '';
    /**
     * Generated from protobuf field <code>string file_id = 4;</code>
     */
    protected $file_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $entity_type
     *     @type string $entity_id
     *     @type string $document_type
     *     @type string $file_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Proto\Accounts\Account\V1\DocumentApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string entity_type = 1;</code>
     * @return string
     */
    public function getEntityType()
    {
        return $this->entity_type;
    }

    /**
     * Generated from protobuf field <code>string entity_type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string entity_id = 2;</code>
     * @return string
     */
    public function getEntityId()
    {
        return $this->entity_id;
    }

    /**
     * Generated from protobuf field <code>string entity_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setEntityId($var)
    {
        GPBUtil::checkString($var, True);
        $this->entity_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string document_type = 3;</code>
     * @return string
     */
    public function getDocumentType()
    {
        return $this->document_type;
    }

    /**
     * Generated from protobuf field <code>string document_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setDocumentType($var)
    {
        GPBUtil::checkString($var, True);
        $this->document_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string file_id = 4;</code>
     * @return string
     */
    public function getFileId()
    {
        return $this->file_id;
    }

    /**
     * Generated from protobuf field <code>string file_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->file_id = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DocumentCreateRequest::class, \Rzp\Accounts\Account\V1\CreateDocumentsRequest_DocumentCreateRequest::class);

