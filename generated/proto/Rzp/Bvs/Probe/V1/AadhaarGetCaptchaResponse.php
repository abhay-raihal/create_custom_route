<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/probe/v1/aadhaar_verification.proto

namespace Rzp\Bvs\Probe\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.probe.v1.AadhaarGetCaptchaResponse</code>
 */
class AadhaarGetCaptchaResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string session_id = 1;</code>
     */
    protected $session_id = '';
    /**
     * Generated from protobuf field <code>string captcha_image = 2;</code>
     */
    protected $captcha_image = '';
    /**
     * Generated from protobuf field <code>string error_code = 3;</code>
     */
    protected $error_code = '';
    /**
     * Generated from protobuf field <code>string error_description = 4;</code>
     */
    protected $error_description = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session_id
     *     @type string $captcha_image
     *     @type string $error_code
     *     @type string $error_description
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Probe\V1\AadhaarVerification::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string session_id = 1;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Generated from protobuf field <code>string session_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string captcha_image = 2;</code>
     * @return string
     */
    public function getCaptchaImage()
    {
        return $this->captcha_image;
    }

    /**
     * Generated from protobuf field <code>string captcha_image = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setCaptchaImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->captcha_image = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error_code = 3;</code>
     * @return string
     */
    public function getErrorCode()
    {
        return $this->error_code;
    }

    /**
     * Generated from protobuf field <code>string error_code = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error_description = 4;</code>
     * @return string
     */
    public function getErrorDescription()
    {
        return $this->error_description;
    }

    /**
     * Generated from protobuf field <code>string error_description = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setErrorDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->error_description = $var;

        return $this;
    }

}

