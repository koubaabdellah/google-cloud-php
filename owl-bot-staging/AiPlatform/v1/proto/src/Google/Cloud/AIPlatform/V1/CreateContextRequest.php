<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/metadata_service.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [MetadataService.CreateContext][google.cloud.aiplatform.v1.MetadataService.CreateContext].
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.CreateContextRequest</code>
 */
class CreateContextRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the MetadataStore where the Context should be
     * created.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The Context to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context context = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $context = null;
    /**
     * The {context} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`.
     * If not provided, the Context's ID will be a UUID generated by the service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all Contexts in the parent MetadataStore. (Otherwise
     * the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED if the
     * caller can't view the preexisting Context.)
     *
     * Generated from protobuf field <code>string context_id = 3;</code>
     */
    protected $context_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the MetadataStore where the Context should be
     *           created.
     *           Format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *     @type \Google\Cloud\AIPlatform\V1\Context $context
     *           Required. The Context to create.
     *     @type string $context_id
     *           The {context} portion of the resource name with the format:
     *           `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`.
     *           If not provided, the Context's ID will be a UUID generated by the service.
     *           Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     *           Must be unique across all Contexts in the parent MetadataStore. (Otherwise
     *           the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED if the
     *           caller can't view the preexisting Context.)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\MetadataService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the MetadataStore where the Context should be
     * created.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the MetadataStore where the Context should be
     * created.
     * Format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}`
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The Context to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context context = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\AIPlatform\V1\Context|null
     */
    public function getContext()
    {
        return $this->context;
    }

    public function hasContext()
    {
        return isset($this->context);
    }

    public function clearContext()
    {
        unset($this->context);
    }

    /**
     * Required. The Context to create.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.Context context = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\AIPlatform\V1\Context $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\Context::class);
        $this->context = $var;

        return $this;
    }

    /**
     * The {context} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`.
     * If not provided, the Context's ID will be a UUID generated by the service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all Contexts in the parent MetadataStore. (Otherwise
     * the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED if the
     * caller can't view the preexisting Context.)
     *
     * Generated from protobuf field <code>string context_id = 3;</code>
     * @return string
     */
    public function getContextId()
    {
        return $this->context_id;
    }

    /**
     * The {context} portion of the resource name with the format:
     * `projects/{project}/locations/{location}/metadataStores/{metadatastore}/contexts/{context}`.
     * If not provided, the Context's ID will be a UUID generated by the service.
     * Must be 4-128 characters in length. Valid characters are `/[a-z][0-9]-/`.
     * Must be unique across all Contexts in the parent MetadataStore. (Otherwise
     * the request will fail with ALREADY_EXISTS, or PERMISSION_DENIED if the
     * caller can't view the preexisting Context.)
     *
     * Generated from protobuf field <code>string context_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setContextId($var)
    {
        GPBUtil::checkString($var, True);
        $this->context_id = $var;

        return $this;
    }

}

