<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/probe/v1/get_gst_details.proto

namespace GPBMetadata\Platform\Bvs\Probe\V1;

class GetGstDetails
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
+platform/bvs/probe/v1/get_gst_details.protoplatform.bvs.probe.v1"T
GetGstDetailsRequest
pan (	
auth_status (	
application_status (	"t
GetGstDetailsResponse*
count (2.google.protobuf.Int32Value/
items (2 .platform.bvs.probe.v1.GstResult"
	GstResult
gstin (	B*Zplatform/bvs/probe/v1�Rzp\\Bvs\\Probe\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

