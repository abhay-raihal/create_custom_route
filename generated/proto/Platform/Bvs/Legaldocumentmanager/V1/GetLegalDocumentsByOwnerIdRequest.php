<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/legaldocumentmanager/v1/get_legal_documents.proto

namespace Platform\Bvs\Legaldocumentmanager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.legaldocumentmanager.v1.GetLegalDocumentsByOwnerIdRequest</code>
 */
class GetLegalDocumentsByOwnerIdRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string owner_id = 1;</code>
     */
    protected $owner_id = '';
    /**
     * Generated from protobuf field <code>string platform = 2;</code>
     */
    protected $platform = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $owner_id
     *     @type string $platform
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Legaldocumentmanager\V1\GetLegalDocuments::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string owner_id = 1;</code>
     * @return string
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string platform = 2;</code>
     * @return string
     */
    public function getPlatform()
    {
        return $this->platform;
    }

    /**
     * Generated from protobuf field <code>string platform = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPlatform($var)
    {
        GPBUtil::checkString($var, True);
        $this->platform = $var;

        return $this;
    }

}
