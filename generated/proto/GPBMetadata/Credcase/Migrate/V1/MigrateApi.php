<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: credcase/migrate/v1/migrate_api.proto

namespace GPBMetadata\Credcase\Migrate\V1;

class MigrateApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Common\Mode\V1\Mode::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
%credcase/migrate/v1/migrate_api.protorzp.credcase.migrate.v1"�
MigrateApiKeyRequest

id (	
secret (	&
mode (2.rzp.common.mode.v1.Mode
merchant_id (	

created_at (

expired_at (
role_ids (	
domain (	

owner_type	 (	
owner_id
 (	

role_names (	"
MigrateApiKeyResponse"E
ExpireApiKeyRequest

id (	

expired_at (
domain (	"
ExpireApiKeyResponse"�
RotateApiKeyRequest@

expire_key (2,.rzp.credcase.migrate.v1.ExpireApiKeyRequestA

create_key (2-.rzp.credcase.migrate.v1.MigrateApiKeyRequest"
RotateApiKeyResponse2�

MigrateAPIn

ExpireApiKey,.rzp.credcase.migrate.v1.ExpireApiKeyRequest-.rzp.credcase.migrate.v1.ExpireApiKeyResponsek
RotateApiKey,.rzp.credcase.migrate.v1.RotateApiKeyRequest-.rzp.credcase.migrate.v1.RotateApiKeyResponseBu
com.rzp.credcase.migrate.v1BMigrateApiProtoPZ	migratev1�RCM�Rzp.Credcase.Migrate.V1�Rzp\\Credcase\\Migrate\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}
