<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/validation/v1/artefact.proto

namespace GPBMetadata\Platform\Bvs\Validation\V1;

class Artefact
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
)platform/bvs/validation/v1/artefact.protoplatform.bvs.validation.v1"�
Artefact
type (	
owner_id (	

owner_type (	&
notes (2.google.protobuf.Struct

identifier (	(
details (2.google.protobuf.Struct@
proofs (20.platform.bvs.validation.v1.Artefact.ProofsEntry
expiry_date (	
platform	 (	W
ProofsEntry
key (7
value (2(.platform.bvs.validation.v1.ProofDetails:8"#
ProofDetails
ufh_file_id (	B4Zplatform/bvs/validation/v1�Rzp\\Bvs\\Validation\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
