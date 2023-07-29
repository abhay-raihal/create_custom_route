<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/artefactcurator/probe/v1/company_search.proto

namespace Rzp\Bvs\ArtefactCurator\Probe\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.artefactcurator.probe.v1.CompanySearchRequest</code>
 */
class CompanySearchRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string search_string = 1;</code>
     */
    protected $search_string = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $search_string
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Artefactcurator\Probe\V1\CompanySearch::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string search_string = 1;</code>
     * @return string
     */
    public function getSearchString()
    {
        return $this->search_string;
    }

    /**
     * Generated from protobuf field <code>string search_string = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSearchString($var)
    {
        GPBUtil::checkString($var, True);
        $this->search_string = $var;

        return $this;
    }

}
