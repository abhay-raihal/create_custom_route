<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/consentdocumentmanager/v2/create_consent_documents.proto

namespace Platform\Bvs\Consentdocumentmanager\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.consentdocumentmanager.v2.EmailDetails</code>
 */
class EmailDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string service = 1;</code>
     */
    protected $service = '';
    /**
     * Generated from protobuf field <code>string owner_id = 2;</code>
     */
    protected $owner_id = '';
    /**
     * Generated from protobuf field <code>string owner_type = 3;</code>
     */
    protected $owner_type = '';
    /**
     * Generated from protobuf field <code>string org_id = 4;</code>
     */
    protected $org_id = '';
    /**
     * Generated from protobuf field <code>string template_name = 5;</code>
     */
    protected $template_name = '';
    /**
     * Generated from protobuf field <code>string template_namespace = 6;</code>
     */
    protected $template_namespace = '';
    /**
     * Generated from protobuf field <code>.platform.bvs.consentdocumentmanager.v2.Email from = 7;</code>
     */
    protected $from = null;
    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email to = 8;</code>
     */
    private $to;
    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email cc = 9;</code>
     */
    private $cc;
    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email bcc = 10;</code>
     */
    private $bcc;
    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email reply_to = 11;</code>
     */
    private $reply_to;
    /**
     * Generated from protobuf field <code>.google.protobuf.Struct params = 12;</code>
     */
    protected $params = null;
    /**
     * Generated from protobuf field <code>string subject = 13;</code>
     */
    protected $subject = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *     @type string $owner_id
     *     @type string $owner_type
     *     @type string $org_id
     *     @type string $template_name
     *     @type string $template_namespace
     *     @type \Platform\Bvs\Consentdocumentmanager\V2\Email $from
     *     @type array<\Platform\Bvs\Consentdocumentmanager\V2\Email>|\Google\Protobuf\Internal\RepeatedField $to
     *     @type array<\Platform\Bvs\Consentdocumentmanager\V2\Email>|\Google\Protobuf\Internal\RepeatedField $cc
     *     @type array<\Platform\Bvs\Consentdocumentmanager\V2\Email>|\Google\Protobuf\Internal\RepeatedField $bcc
     *     @type array<\Platform\Bvs\Consentdocumentmanager\V2\Email>|\Google\Protobuf\Internal\RepeatedField $reply_to
     *     @type \Google\Protobuf\Struct $params
     *     @type string $subject
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Consentdocumentmanager\V2\CreateConsentDocuments::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string service = 1;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Generated from protobuf field <code>string service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 2;</code>
     * @return string
     */
    public function getOwnerId()
    {
        return $this->owner_id;
    }

    /**
     * Generated from protobuf field <code>string owner_id = 2;</code>
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
     * Generated from protobuf field <code>string owner_type = 3;</code>
     * @return string
     */
    public function getOwnerType()
    {
        return $this->owner_type;
    }

    /**
     * Generated from protobuf field <code>string owner_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOwnerType($var)
    {
        GPBUtil::checkString($var, True);
        $this->owner_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string org_id = 4;</code>
     * @return string
     */
    public function getOrgId()
    {
        return $this->org_id;
    }

    /**
     * Generated from protobuf field <code>string org_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setOrgId($var)
    {
        GPBUtil::checkString($var, True);
        $this->org_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string template_name = 5;</code>
     * @return string
     */
    public function getTemplateName()
    {
        return $this->template_name;
    }

    /**
     * Generated from protobuf field <code>string template_name = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateName($var)
    {
        GPBUtil::checkString($var, True);
        $this->template_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string template_namespace = 6;</code>
     * @return string
     */
    public function getTemplateNamespace()
    {
        return $this->template_namespace;
    }

    /**
     * Generated from protobuf field <code>string template_namespace = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTemplateNamespace($var)
    {
        GPBUtil::checkString($var, True);
        $this->template_namespace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.platform.bvs.consentdocumentmanager.v2.Email from = 7;</code>
     * @return \Platform\Bvs\Consentdocumentmanager\V2\Email|null
     */
    public function getFrom()
    {
        return $this->from;
    }

    public function hasFrom()
    {
        return isset($this->from);
    }

    public function clearFrom()
    {
        unset($this->from);
    }

    /**
     * Generated from protobuf field <code>.platform.bvs.consentdocumentmanager.v2.Email from = 7;</code>
     * @param \Platform\Bvs\Consentdocumentmanager\V2\Email $var
     * @return $this
     */
    public function setFrom($var)
    {
        GPBUtil::checkMessage($var, \Platform\Bvs\Consentdocumentmanager\V2\Email::class);
        $this->from = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email to = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email to = 8;</code>
     * @param array<\Platform\Bvs\Consentdocumentmanager\V2\Email>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Platform\Bvs\Consentdocumentmanager\V2\Email::class);
        $this->to = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email cc = 9;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email cc = 9;</code>
     * @param array<\Platform\Bvs\Consentdocumentmanager\V2\Email>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Platform\Bvs\Consentdocumentmanager\V2\Email::class);
        $this->cc = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email bcc = 10;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBcc()
    {
        return $this->bcc;
    }

    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email bcc = 10;</code>
     * @param array<\Platform\Bvs\Consentdocumentmanager\V2\Email>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBcc($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Platform\Bvs\Consentdocumentmanager\V2\Email::class);
        $this->bcc = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email reply_to = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getReplyTo()
    {
        return $this->reply_to;
    }

    /**
     * Generated from protobuf field <code>repeated .platform.bvs.consentdocumentmanager.v2.Email reply_to = 11;</code>
     * @param array<\Platform\Bvs\Consentdocumentmanager\V2\Email>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setReplyTo($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Platform\Bvs\Consentdocumentmanager\V2\Email::class);
        $this->reply_to = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct params = 12;</code>
     * @return \Google\Protobuf\Struct|null
     */
    public function getParams()
    {
        return $this->params;
    }

    public function hasParams()
    {
        return isset($this->params);
    }

    public function clearParams()
    {
        unset($this->params);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Struct params = 12;</code>
     * @param \Google\Protobuf\Struct $var
     * @return $this
     */
    public function setParams($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Struct::class);
        $this->params = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subject = 13;</code>
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Generated from protobuf field <code>string subject = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setSubject($var)
    {
        GPBUtil::checkString($var, True);
        $this->subject = $var;

        return $this;
    }

}

