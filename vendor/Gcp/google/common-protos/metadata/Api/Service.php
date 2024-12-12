<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/service.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api;

class Service
{
    public static $is_initialized = \false;
    public static function initOnce()
    {
        $pool = \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == \true) {
            return;
        }
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Auth::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Backend::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Billing::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Client::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Context::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Control::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Documentation::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Endpoint::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Http::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Log::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Logging::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Metric::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\MonitoredResource::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Monitoring::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Quota::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\SourceInfo::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\SystemParameter::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Usage::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Protobuf\Api::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Protobuf\Type::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Protobuf\Wrappers::initOnce();
        $pool->internalAddGeneratedFile('
�
google/api/service.proto
google.apigoogle/api/backend.protogoogle/api/billing.protogoogle/api/client.protogoogle/api/context.protogoogle/api/control.protogoogle/api/documentation.protogoogle/api/endpoint.protogoogle/api/http.protogoogle/api/log.protogoogle/api/logging.protogoogle/api/metric.proto#google/api/monitored_resource.protogoogle/api/monitoring.protogoogle/api/quota.protogoogle/api/source_info.proto!google/api/system_parameter.protogoogle/api/usage.protogoogle/protobuf/api.protogoogle/protobuf/type.protogoogle/protobuf/wrappers.proto"�
Service
name (	
title (	
producer_project_id (	

id! (	"
apis (2.google.protobuf.Api$
types (2.google.protobuf.Type$
enums (2.google.protobuf.Enum0

backend (2.google.api.Backend
http	 (2.google.api.Http 
quota
 (2.google.api.Quota2
authentication (2.google.api.Authentication$
context (2.google.api.Context 
usage (2.google.api.Usage\'
	endpoints (2.google.api.Endpoint$
control (2.google.api.Control\'
logs (2.google.api.LogDescriptor-
metrics (2.google.api.MetricDescriptorD
monitored_resources (2\'.google.api.MonitoredResourceDescriptor$
billing (2.google.api.Billing$
logging (2.google.api.Logging*

monitoring (2.google.api.Monitoring7
system_parameters (2.google.api.SystemParameters+
source_info% (2.google.api.SourceInfo*

publishing- (2.google.api.Publishing4
config_version (2.google.protobuf.UInt32ValueBn
com.google.apiBServiceProtoPZEgoogle.golang.org/genproto/googleapis/api/serviceconfig;serviceconfig�GAPIbproto3', \true);
        static::$is_initialized = \true;
    }
}