<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/artefactcurator/probe/v1/get_gst_details.proto

namespace Rzp\Bvs\ArtefactCurator\Probe\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.artefactcurator.probe.v1.GetGstDetailsRequest</code>
 */
class GetGstDetailsRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string pan = 1;</code>
     */
    protected $pan = '';
    /**
     * Generated from protobuf field <code>.platform.bvs.artefactcurator.probe.v1.AuthStatusFilter auth_status = 2;</code>
     */
    protected $auth_status = null;
    /**
     * Generated from protobuf field <code>.platform.bvs.artefactcurator.probe.v1.ApplicationStatusFilter application_status = 3;</code>
     */
    protected $application_status = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $pan
     *     @type \Rzp\Bvs\ArtefactCurator\Probe\V1\AuthStatusFilter $auth_status
     *     @type \Rzp\Bvs\ArtefactCurator\Probe\V1\ApplicationStatusFilter $application_status
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Artefactcurator\Probe\V1\GetGstDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string pan = 1;</code>
     * @return string
     */
    public function getPan()
    {
        return $this->pan;
    }

    /**
     * Generated from protobuf field <code>string pan = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setPan($var)
    {
        GPBUtil::checkString($var, True);
        $this->pan = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.platform.bvs.artefactcurator.probe.v1.AuthStatusFilter auth_status = 2;</code>
     * @return \Rzp\Bvs\ArtefactCurator\Probe\V1\AuthStatusFilter|null
     */
    public function getAuthStatus()
    {
        return $this->auth_status;
    }

    public function hasAuthStatus()
    {
        return isset($this->auth_status);
    }

    public function clearAuthStatus()
    {
        unset($this->auth_status);
    }

    /**
     * Generated from protobuf field <code>.platform.bvs.artefactcurator.probe.v1.AuthStatusFilter auth_status = 2;</code>
     * @param \Rzp\Bvs\ArtefactCurator\Probe\V1\AuthStatusFilter $var
     * @return $this
     */
    public function setAuthStatus($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Bvs\ArtefactCurator\Probe\V1\AuthStatusFilter::class);
        $this->auth_status = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.platform.bvs.artefactcurator.probe.v1.ApplicationStatusFilter application_status = 3;</code>
     * @return \Rzp\Bvs\ArtefactCurator\Probe\V1\ApplicationStatusFilter|null
     */
    public function getApplicationStatus()
    {
        return $this->application_status;
    }

    public function hasApplicationStatus()
    {
        return isset($this->application_status);
    }

    public function clearApplicationStatus()
    {
        unset($this->application_status);
    }

    /**
     * Generated from protobuf field <code>.platform.bvs.artefactcurator.probe.v1.ApplicationStatusFilter application_status = 3;</code>
     * @param \Rzp\Bvs\ArtefactCurator\Probe\V1\ApplicationStatusFilter $var
     * @return $this
     */
    public function setApplicationStatus($var)
    {
        GPBUtil::checkMessage($var, \Rzp\Bvs\ArtefactCurator\Probe\V1\ApplicationStatusFilter::class);
        $this->application_status = $var;

        return $this;
    }

}
