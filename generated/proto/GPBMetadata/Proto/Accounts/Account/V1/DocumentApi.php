<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/document_api.proto

namespace GPBMetadata\Proto\Accounts\Account\V1;

class DocumentApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
,proto/accounts/account/v1/document_api.protorzp.accounts.account.v1"�
CreateDocumentsRequestX
	documents (2E.rzp.accounts.account.v1.CreateDocumentsRequest.DocumentCreateRequestg
DocumentCreateRequest
entity_type (	
	entity_id (	
document_type (	
file_id (	"�
Document
entity_type (	
	entity_id (	
document_type (	
file_id (	

id (	
audit_id (	
upload_by_admin_id (	"M
DocumentFetchResponse4
	documents (2!.rzp.accounts.account.v1.Document"�
FetchDocumentsRequestX
entity (2H.rzp.accounts.account.v1.FetchDocumentsRequest.FetchDocumentsRequestBody.

field_mask (2.google.protobuf.FieldMaskc
FetchDocumentsRequestBody
entity_type (	
	entity_id (	

id (	

account_id (	"#
DeleteDocumentRequest

id (	")
DeleteDocumentResponse
deleted ("�
MerchantDocument

id (	
merchant_id (	
file_store_id (	
document_type (	
entity_type (	
	entity_id (	
audit_id (	
upload_by_admin_id (	"^
FetchMerchantDocumentsResponse<
	documents (2).rzp.accounts.account.v1.MerchantDocument"@
FetchMerchantDocumentsRequest

id (	
merchant_id (	2�
DocumentAPIi
Create/.rzp.accounts.account.v1.CreateDocumentsRequest..rzp.accounts.account.v1.DocumentFetchResponseg
Fetch..rzp.accounts.account.v1.FetchDocumentsRequest..rzp.accounts.account.v1.DocumentFetchResponsei
Delete..rzp.accounts.account.v1.DeleteDocumentRequest/.rzp.accounts.account.v1.DeleteDocumentResponse�
FetchMerchantDocuments6.rzp.accounts.account.v1.FetchMerchantDocumentsRequest7.rzp.accounts.account.v1.FetchMerchantDocumentsResponseB9Zaccounts/account/v1;accountv1�Rzp\\Accounts\\Account\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

