<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/rpc/context/attribute_context.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Rpc\Context\AttributeContext;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * This message defines attributes associated with API operations, such as
 * a network API request. The terminology is based on the conventions used
 * by Google APIs, Istio, and OpenAPI.
 *
 * Generated from protobuf message <code>google.rpc.context.AttributeContext.Api</code>
 */
class Api extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * The API service name. It is a logical identifier for a networked API,
     * such as "pubsub.googleapis.com". The naming syntax depends on the
     * API management system being used for handling the request.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     */
    protected $service = '';
    /**
     * The API operation name. For gRPC requests, it is the fully qualified API
     * method name, such as "google.pubsub.v1.Publisher.Publish". For OpenAPI
     * requests, it is the `operationId`, such as "getPet".
     *
     * Generated from protobuf field <code>string operation = 2;</code>
     */
    protected $operation = '';
    /**
     * The API protocol used for sending the request, such as "http", "https",
     * "grpc", or "internal".
     *
     * Generated from protobuf field <code>string protocol = 3;</code>
     */
    protected $protocol = '';
    /**
     * The API version associated with the API operation above, such as "v1" or
     * "v1alpha1".
     *
     * Generated from protobuf field <code>string version = 4;</code>
     */
    protected $version = '';
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $service
     *           The API service name. It is a logical identifier for a networked API,
     *           such as "pubsub.googleapis.com". The naming syntax depends on the
     *           API management system being used for handling the request.
     *     @type string $operation
     *           The API operation name. For gRPC requests, it is the fully qualified API
     *           method name, such as "google.pubsub.v1.Publisher.Publish". For OpenAPI
     *           requests, it is the `operationId`, such as "getPet".
     *     @type string $protocol
     *           The API protocol used for sending the request, such as "http", "https",
     *           "grpc", or "internal".
     *     @type string $version
     *           The API version associated with the API operation above, such as "v1" or
     *           "v1alpha1".
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Rpc\Context\AttributeContext::initOnce();
        parent::__construct($data);
    }
    /**
     * The API service name. It is a logical identifier for a networked API,
     * such as "pubsub.googleapis.com". The naming syntax depends on the
     * API management system being used for handling the request.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }
    /**
     * The API service name. It is a logical identifier for a networked API,
     * such as "pubsub.googleapis.com". The naming syntax depends on the
     * API management system being used for handling the request.
     *
     * Generated from protobuf field <code>string service = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->service = $var;
        return $this;
    }
    /**
     * The API operation name. For gRPC requests, it is the fully qualified API
     * method name, such as "google.pubsub.v1.Publisher.Publish". For OpenAPI
     * requests, it is the `operationId`, such as "getPet".
     *
     * Generated from protobuf field <code>string operation = 2;</code>
     * @return string
     */
    public function getOperation()
    {
        return $this->operation;
    }
    /**
     * The API operation name. For gRPC requests, it is the fully qualified API
     * method name, such as "google.pubsub.v1.Publisher.Publish". For OpenAPI
     * requests, it is the `operationId`, such as "getPet".
     *
     * Generated from protobuf field <code>string operation = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOperation($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation = $var;
        return $this;
    }
    /**
     * The API protocol used for sending the request, such as "http", "https",
     * "grpc", or "internal".
     *
     * Generated from protobuf field <code>string protocol = 3;</code>
     * @return string
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
    /**
     * The API protocol used for sending the request, such as "http", "https",
     * "grpc", or "internal".
     *
     * Generated from protobuf field <code>string protocol = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setProtocol($var)
    {
        GPBUtil::checkString($var, True);
        $this->protocol = $var;
        return $this;
    }
    /**
     * The API version associated with the API operation above, such as "v1" or
     * "v1alpha1".
     *
     * Generated from protobuf field <code>string version = 4;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * The API version associated with the API operation above, such as "v1" or
     * "v1alpha1".
     *
     * Generated from protobuf field <code>string version = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->version = $var;
        return $this;
    }
}
