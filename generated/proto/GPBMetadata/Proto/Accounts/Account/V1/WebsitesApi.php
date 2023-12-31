<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: proto/accounts/account/v1/websites_api.proto

namespace GPBMetadata\Proto\Accounts\Account\V1;

class WebsitesApi
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
�
,proto/accounts/account/v1/websites_api.protorzp.accounts.account.v1"�
FetchAccountWebsiteResponse

id (	
audit_id (	-
account_data (2.google.protobuf.Struct+

admin_data (2.google.protobuf.Struct0
additional_data (2.google.protobuf.Struct

account_id (	"�
FetchMerchantWebsiteResponse
merchant_id (	
audit_id (	
deliverable_type (	
shipping_period (	
refund_request_period (	
refund_process_period (	
warranty_period (	9
merchant_website_details (2.google.protobuf.Struct6
admin_website_details	 (2.google.protobuf.Struct0
additional_data
 (2.google.protobuf.Struct

id (	"<
FetchAccountWebsiteRequest

id (	

account_id (	2�

WebsiteAPIr
Fetch3.rzp.accounts.account.v1.FetchAccountWebsiteRequest4.rzp.accounts.account.v1.FetchAccountWebsiteResponse�
FetchMerchantWebsite3.rzp.accounts.account.v1.FetchAccountWebsiteRequest5.rzp.accounts.account.v1.FetchMerchantWebsiteResponseB9Zaccounts/account/v1;accountv1�Rzp\\Accounts\\Account\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

