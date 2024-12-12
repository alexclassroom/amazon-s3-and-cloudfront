<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/field_info.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Api;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * Rich semantic information of an API field beyond basic typing.
 *
 * Generated from protobuf message <code>google.api.FieldInfo</code>
 */
class FieldInfo extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * The standard format of a field value. This does not explicitly configure
     * any API consumer, just documents the API's format for the field it is
     * applied to.
     *
     * Generated from protobuf field <code>.google.api.FieldInfo.Format format = 1;</code>
     */
    protected $format = 0;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $format
     *           The standard format of a field value. This does not explicitly configure
     *           any API consumer, just documents the API's format for the field it is
     *           applied to.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\FieldInfo::initOnce();
        parent::__construct($data);
    }
    /**
     * The standard format of a field value. This does not explicitly configure
     * any API consumer, just documents the API's format for the field it is
     * applied to.
     *
     * Generated from protobuf field <code>.google.api.FieldInfo.Format format = 1;</code>
     * @return int
     */
    public function getFormat()
    {
        return $this->format;
    }
    /**
     * The standard format of a field value. This does not explicitly configure
     * any API consumer, just documents the API's format for the field it is
     * applied to.
     *
     * Generated from protobuf field <code>.google.api.FieldInfo.Format format = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkEnum($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Api\FieldInfo\Format::class);
        $this->format = $var;
        return $this;
    }
}