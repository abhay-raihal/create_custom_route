<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/legaldocumentmanager/v1/legal_documents_manager_api.proto

namespace Platform\Bvs\Legaldocumentmanager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.legaldocumentmanager.v1.LegalDocumentDetails</code>
 */
class LegalDocumentDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string ufh_file_id = 2;</code>
     */
    protected $ufh_file_id = '';
    /**
     * Generated from protobuf field <code>uint64 acceptance_timestamp = 3;</code>
     */
    protected $acceptance_timestamp = 0;
    /**
     * Generated from protobuf field <code>string status = 4;</code>
     */
    protected $status = '';
    /**
     * Generated from protobuf field <code>string error_code = 5;</code>
     */
    protected $error_code = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type string $ufh_file_id
     *     @type int|string $acceptance_timestamp
     *     @type string $status
     *     @type string $error_code
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Legaldocumentmanager\V1\LegalDocumentsManagerApi::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>string type = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkString($var, True);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string ufh_file_id = 2;</code>
     * @return string
     */
    public function getUfhFileId()
    {
        return $this->ufh_file_id;
    }

    /**
     * Generated from protobuf field <code>string ufh_file_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUfhFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ufh_file_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint64 acceptance_timestamp = 3;</code>
     * @return int|string
     */
    public function getAcceptanceTimestamp()
    {
        return $this->acceptance_timestamp;
    }

    /**
     * Generated from protobuf field <code>uint64 acceptance_timestamp = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAcceptanceTimestamp($var)
    {
        GPBUtil::checkUint64($var);
        $this->acceptance_timestamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string status = 4;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Generated from protobuf field <code>string status = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error_code = 5;</code>
     * @return string
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * Generated from protobuf field <code>string error_code = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_code = $var;

        return $this;
    }

}

