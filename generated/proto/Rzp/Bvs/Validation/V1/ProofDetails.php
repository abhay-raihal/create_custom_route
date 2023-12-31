<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/validation/v1/artefact.proto

namespace Rzp\Bvs\Validation\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>platform.bvs.validation.v1.ProofDetails</code>
 */
class ProofDetails extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string ufh_file_id = 1;</code>
     */
    protected $ufh_file_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $ufh_file_id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Platform\Bvs\Validation\V1\Artefact::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string ufh_file_id = 1;</code>
     * @return string
     */
    public function getUfhFileId()
    {
        return $this->ufh_file_id;
    }

    /**
     * Generated from protobuf field <code>string ufh_file_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setUfhFileId($var)
    {
        GPBUtil::checkString($var, True);
        $this->ufh_file_id = $var;

        return $this;
    }

}

