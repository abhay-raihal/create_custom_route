<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/legaldocumentmanager/v1/create_legal_documents.proto

namespace GPBMetadata\Platform\Bvs\Legaldocumentmanager\V1;

class CreateLegalDocuments
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Aplatform/bvs/legaldocumentmanager/v1/create_legal_documents.proto$platform.bvs.legaldocumentmanager.v1"!
ClientDetails
platform (	"�
OwnerDetails
owner_id (	

owner_name (	

ip_address (	
acceptance_timestamp (
signatory_name (	
contact_number (	
email (	"R
LegalDocumentRequestDetails
type (	
content_type (	
content (	"�
CreateLegalDocumentsRequestI
owner_details (22.platform.bvs.legaldocumentmanager.v1.OwnerDetailsK
client_details (23.platform.bvs.legaldocumentmanager.v1.ClientDetails[
documents_detail (2A.platform.bvs.legaldocumentmanager.v1.LegalDocumentRequestDetailsB&Z$platform/bvs/legaldocumentmanager/v1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

