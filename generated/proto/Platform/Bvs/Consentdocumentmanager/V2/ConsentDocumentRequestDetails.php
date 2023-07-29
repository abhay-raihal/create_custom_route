<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/consentdocumentmanager/v2/create_consent_documents.proto

namespace Platform\Bvs\Consentdocumentmanager\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.consentdocumentmanager.v2.ConsentDocumentRequestDetails</code>
 */
class ConsentDocumentRequestDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string type = 1;</code>
     */
    protected $type = '';
    /**
     * Generated from protobuf field <code>string template_id = 2;</code>
     */
    protected $template_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $type
     *     @type string $template_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Consentdocumentmanager\V2\CreateConsentDocuments::initOnce();
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
     * Generated from protobuf field <code>string template_id = 2;</code>
     * @return string
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * Generated from protobuf field <code>string template_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateId($var)
    {
        GPBUtil::checkString($var, True);
        $this->template_id = $var;

        return $this;
    }

}

