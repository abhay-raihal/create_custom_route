<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/kycdocumentmanager/v1/kyc_documents_manager_api.proto

namespace GPBMetadata\Platform\Bvs\Kycdocumentmanager\V1;

class KycDocumentsManagerApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Platform\Bvs\Kycdocumentmanager\V1\CreateDocumentRecord::initOnce();
        \GPBMetadata\Platform\Bvs\Kycdocumentmanager\V1\GetDocumentRecordById::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bplatform/bvs/kycdocumentmanager/v1/kyc_documents_manager_api.proto"platform.bvs.kycdocumentmanager.v1Bplatform/bvs/kycdocumentmanager/v1/get_document_record_by_id.protogoogle/protobuf/struct.proto"�
DocumentRecordResponse

id (	
status (	

error_code (	
error_description (	
owner_id (	
file_id (	

document_details (2.google.protobuf.Struct2�
KYCDocumentManagerAPI�
CreateDocumentRecord?.platform.bvs.kycdocumentmanager.v1.CreateDocumentRecordRequest:.platform.bvs.kycdocumentmanager.v1.DocumentRecordResponse�
GetDocumentRecordById@.platform.bvs.kycdocumentmanager.v1.GetDocumentRecordByIdRequest:.platform.bvs.kycdocumentmanager.v1.DocumentRecordResponseB$Z"platform/bvs/kycdocumentmanager/v1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
