<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: credcase/consumer/v1/consumer_api.proto

namespace GPBMetadata\Credcase\Consumer\V1;

class ConsumerApi
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
\'credcase/consumer/v1/consumer_api.protorzp.credcase.consumer.v1"�
Consumer

id (	
domain (	
owner_id (	

owner_type (	:
meta (2,.rzp.credcase.consumer.v1.Consumer.MetaEntry+
	MetaEntry
key (	
value (	:8"
Empty2�
ConsumerAPIX
CreateConsumer".rzp.credcase.consumer.v1.Consumer".rzp.credcase.consumer.v1.ConsumerU
DeleteConsumer".rzp.credcase.consumer.v1.Consumer.rzp.credcase.consumer.v1.EmptyBz
com.rzp.credcase.consumer.v1BConsumerApiProtoPZ
consumerv1�RCA�Rzp.Credcase.Consumer.V1�Rzp\\Credcase\\Consumer\\V1bproto3'
        , true);

        static::$is_initialized = true;
    }
}

