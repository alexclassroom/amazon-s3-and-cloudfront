<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/monitored_resource.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api;

class MonitoredResource
{
    public static $is_initialized = \false;
    public static function initOnce()
    {
        $pool = \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == \true) {
            return;
        }
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Label::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\LaunchStage::initOnce();
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Protobuf\Struct::initOnce();
        $pool->internalAddGeneratedFile('
�
#google/api/monitored_resource.proto
google.apigoogle/api/launch_stage.protogoogle/protobuf/struct.proto"�
MonitoredResourceDescriptor
name (	
type (	
display_name (	
description (	+
labels (2.google.api.LabelDescriptor-
launch_stage (2.google.api.LaunchStage"�
MonitoredResource
type (	9
labels (2).google.api.MonitoredResource.LabelsEntry-
LabelsEntry
key (	
value (	:8"�
MonitoredResourceMetadata.
system_labels (2.google.protobuf.StructJ
user_labels (25.google.api.MonitoredResourceMetadata.UserLabelsEntry1
UserLabelsEntry
key (	
value (	:8By
com.google.apiBMonitoredResourceProtoPZCgoogle.golang.org/genproto/googleapis/api/monitoredres;monitoredres��GAPIbproto3', \true);
        static::$is_initialized = \true;
    }
}
