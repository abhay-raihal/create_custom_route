<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/artefactcurator/probe/v1/company_search.proto

namespace Rzp\Bvs\ArtefactCurator\Probe\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.artefactcurator.probe.v1.CompanyResult</code>
 */
class CompanyResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string company_name = 1;</code>
     */
    protected $company_name = '';
    /**
     * Generated from protobuf field <code>string identity_number = 2;</code>
     */
    protected $identity_number = '';
    /**
     * Generated from protobuf field <code>string identity_type = 3;</code>
     */
    protected $identity_type = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $company_name
     *     @type string $identity_number
     *     @type string $identity_type
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Artefactcurator\Probe\V1\CompanySearch::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string company_name = 1;</code>
     * @return string
     */
    public function getCompanyName()
    {
        return $this->company_name;
    }

    /**
     * Generated from protobuf field <code>string company_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setCompanyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->company_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity_number = 2;</code>
     * @return string
     */
    public function getIdentityNumber()
    {
        return $this->identity_number;
    }

    /**
     * Generated from protobuf field <code>string identity_number = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentityNumber($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string identity_type = 3;</code>
     * @return string
     */
    public function getIdentityType()
    {
        return $this->identity_type;
    }

    /**
     * Generated from protobuf field <code>string identity_type = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setIdentityType($var)
    {
        GPBUtil::checkString($var, True);
        $this->identity_type = $var;

        return $this;
    }

}
