<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/consentdocumentmanager/v2/get_consent_documents.proto

namespace Platform\Bvs\Consentdocumentmanager\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.consentdocumentmanager.v2.GetConsentDocumentsByOwnerIdRequest</code>
 */
class GetConsentDocumentsByOwnerIdRequest extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>.platform.bvs.consentdocumentmanager.v2.Page page = 3;</code>
     */
    protected $page = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $owner_id
     *     @type string $platform
     *     @type \Platform\Bvs\Consentdocumentmanager\V2\Page $page
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Consentdocumentmanager\V2\GetConsentDocuments::initOnce();
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

    /**
     * Generated from protobuf field <code>.platform.bvs.consentdocumentmanager.v2.Page page = 3;</code>
     * @return \Platform\Bvs\Consentdocumentmanager\V2\Page|null
     */
    public function getPage()
    {
        return $this->page;
    }

    public function hasPage()
    {
        return isset($this->page);
    }

    public function clearPage()
    {
        unset($this->page);
    }

    /**
     * Generated from protobuf field <code>.platform.bvs.consentdocumentmanager.v2.Page page = 3;</code>
     * @param \Platform\Bvs\Consentdocumentmanager\V2\Page $var
     * @return $this
     */
    public function setPage($var)
    {
        GPBUtil::checkMessage($var, \Platform\Bvs\Consentdocumentmanager\V2\Page::class);
        $this->page = $var;

        return $this;
    }

}

