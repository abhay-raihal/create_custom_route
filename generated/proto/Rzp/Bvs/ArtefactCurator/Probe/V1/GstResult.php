<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/artefactcurator/probe/v1/get_gst_details.proto

namespace Rzp\Bvs\ArtefactCurator\Probe\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.artefactcurator.probe.v1.GstResult</code>
 */
class GstResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string gstin = 1;</code>
     */
    protected $gstin = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $gstin
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Artefactcurator\Probe\V1\GetGstDetails::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string gstin = 1;</code>
     * @return string
     */
    public function getGstin()
    {
        return $this->gstin;
    }

    /**
     * Generated from protobuf field <code>string gstin = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGstin($var)
    {
        GPBUtil::checkString($var, True);
        $this->gstin = $var;

        return $this;
    }

}

