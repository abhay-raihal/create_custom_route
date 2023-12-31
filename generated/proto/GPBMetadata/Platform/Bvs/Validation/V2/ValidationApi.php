<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/validation/v2/validation_api.proto

namespace GPBMetadata\Platform\Bvs\Validation\V2;

class ValidationApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Platform\Bvs\Validation\V2\Artefact::initOnce();
        \GPBMetadata\Platform\Bvs\Validation\V2\Validation::initOnce();
        \GPBMetadata\Platform\Bvs\Validation\V2\Metadata::initOnce();
        $pool->internalAddGeneratedFile(
            '
�	
/platform/bvs/validation/v2/validation_api.protoplatform.bvs.validation.v2)platform/bvs/validation/v2/artefact.proto+platform/bvs/validation/v2/validation.proto)platform/bvs/validation/v2/metadata.proto"�
CreateValidationRequest6
artefact (2$.platform.bvs.validation.v2.ArtefactY
enrichments (2D.platform.bvs.validation.v2.CreateValidationRequest.EnrichmentsEntry0
rules (2!.platform.bvs.validation.v2.Rules6
metadata (2$.platform.bvs.validation.v2.Metadata$
rule_execution_list_required (V
EnrichmentsEntry
key (	1
value (2".platform.bvs.validation.v2.Fields:8"�
ValidationResponse
validation_id (	
status (	

error_code (	
error_description (	3
enrichment_details (2.google.protobuf.Struct4
rule_execution_list (2.google.protobuf.Struct"v
GetValidationRequest
validation_id (	!
enrichment_details_fields (	$
rule_execution_list_required (2�
ValidationAPIw
CreateValidation3.platform.bvs.validation.v2.CreateValidationRequest..platform.bvs.validation.v2.ValidationResponseq
GetValidation0.platform.bvs.validation.v2.GetValidationRequest..platform.bvs.validation.v2.ValidationResponseB4Zplatform/bvs/validation/v2�Rzp\\Bvs\\Validation\\V2bproto3'
        , true);

        static::$is_initialized = true;
    }
}

