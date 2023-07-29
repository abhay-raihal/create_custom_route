<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/obs/verification/v1/update_verification_request_status.proto

namespace Rzp\Obs\Verification\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.obs.verification.v1.Detail</code>
 */
class Detail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string failure_reason = 2;</code>
     */
    protected $failure_reason = '';
    /**
     * Generated from protobuf field <code>string failure_reason_type = 3;</code>
     */
    protected $failure_reason_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $failure_reason
     *     @type string $failure_reason_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Obs\Verification\V1\UpdateVerificationRequestStatus::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string failure_reason = 2;</code>
     * @return string
     */
    public function getFailureReason()
    {
        return $this->failure_reason;
    }

    /**
     * Generated from protobuf field <code>string failure_reason = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setFailureReason($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_reason = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string failure_reason_type = 3;</code>
     * @return string
     */
    public function getFailureReasonType()
    {
        return $this->failure_reason_type;
    }

    /**
     * Generated from protobuf field <code>string failure_reason_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setFailureReasonType($var)
    {
        GPBUtil::checkString($var, True);
        $this->failure_reason_type = $var;

        return $this;
    }

}

