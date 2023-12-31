<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/artefactcurator/verify/v1/digilocker.proto

namespace Rzp\Bvs\ArtefactCurator\Verify\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.artefactcurator.verify.v1.FetchAadhaarXmlDetailsResponse</code>
 */
class FetchAadhaarXmlDetailsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>bool is_valid = 1;</code>
     */
    protected $is_valid = false;
    /**
     * Generated from protobuf field <code>string artefact_curator_id = 2;</code>
     */
    protected $artefact_curator_id = '';
    /**
     * Generated from protobuf field <code>string aadhaar_xml_file = 3;</code>
     */
    protected $aadhaar_xml_file = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_valid
     *     @type string $artefact_curator_id
     *     @type string $aadhaar_xml_file
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Artefactcurator\Verify\V1\Digilocker::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>bool is_valid = 1;</code>
     * @return bool
     */
    public function getIsValid()
    {
        return $this->is_valid;
    }

    /**
     * Generated from protobuf field <code>bool is_valid = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsValid($var)
    {
        GPBUtil::checkBool($var);
        $this->is_valid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string artefact_curator_id = 2;</code>
     * @return string
     */
    public function getArtefactCuratorId()
    {
        return $this->artefact_curator_id;
    }

    /**
     * Generated from protobuf field <code>string artefact_curator_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setArtefactCuratorId($var)
    {
        GPBUtil::checkString($var, True);
        $this->artefact_curator_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string aadhaar_xml_file = 3;</code>
     * @return string
     */
    public function getAadhaarXmlFile()
    {
        return $this->aadhaar_xml_file;
    }

    /**
     * Generated from protobuf field <code>string aadhaar_xml_file = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAadhaarXmlFile($var)
    {
        GPBUtil::checkString($var, True);
        $this->aadhaar_xml_file = $var;

        return $this;
    }

}

