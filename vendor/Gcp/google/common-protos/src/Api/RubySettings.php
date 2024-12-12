<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/client.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Api;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * Settings for Ruby client libraries.
 *
 * Generated from protobuf message <code>google.api.RubySettings</code>
 */
class RubySettings extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * Some settings.
     *
     * Generated from protobuf field <code>.google.api.CommonLanguageSettings common = 1;</code>
     */
    protected $common = null;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\CommonLanguageSettings $common
     *           Some settings.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Api\Client::initOnce();
        parent::__construct($data);
    }
    /**
     * Some settings.
     *
     * Generated from protobuf field <code>.google.api.CommonLanguageSettings common = 1;</code>
     * @return \Google\Api\CommonLanguageSettings|null
     */
    public function getCommon()
    {
        return $this->common;
    }
    public function hasCommon()
    {
        return isset($this->common);
    }
    public function clearCommon()
    {
        unset($this->common);
    }
    /**
     * Some settings.
     *
     * Generated from protobuf field <code>.google.api.CommonLanguageSettings common = 1;</code>
     * @param \Google\Api\CommonLanguageSettings $var
     * @return $this
     */
    public function setCommon($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Api\CommonLanguageSettings::class);
        $this->common = $var;
        return $this;
    }
}
