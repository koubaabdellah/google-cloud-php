<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/secretmanager/v1/service.proto

namespace Google\Cloud\SecretManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for [SecretManagerService.AddSecretVersion][google.cloud.secretmanager.v1.SecretManagerService.AddSecretVersion].
 *
 * Generated from protobuf message <code>google.cloud.secretmanager.v1.AddSecretVersionRequest</code>
 */
class AddSecretVersionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the [Secret][google.cloud.secretmanager.v1.Secret] to associate with the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The secret payload of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.SecretPayload payload = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $payload = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the [Secret][google.cloud.secretmanager.v1.Secret] to associate with the
     *           [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format `projects/&#42;&#47;secrets/&#42;`.
     *     @type \Google\Cloud\SecretManager\V1\SecretPayload $payload
     *           Required. The secret payload of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Secretmanager\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the [Secret][google.cloud.secretmanager.v1.Secret] to associate with the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format `projects/&#42;&#47;secrets/&#42;`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the [Secret][google.cloud.secretmanager.v1.Secret] to associate with the
     * [SecretVersion][google.cloud.secretmanager.v1.SecretVersion] in the format `projects/&#42;&#47;secrets/&#42;`.
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
     * Required. The secret payload of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.SecretPayload payload = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\SecretManager\V1\SecretPayload
     */
    public function getPayload()
    {
        return isset($this->payload) ? $this->payload : null;
    }

    public function hasPayload()
    {
        return isset($this->payload);
    }

    public function clearPayload()
    {
        unset($this->payload);
    }

    /**
     * Required. The secret payload of the [SecretVersion][google.cloud.secretmanager.v1.SecretVersion].
     *
     * Generated from protobuf field <code>.google.cloud.secretmanager.v1.SecretPayload payload = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\SecretManager\V1\SecretPayload $var
     * @return $this
     */
    public function setPayload($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\SecretManager\V1\SecretPayload::class);
        $this->payload = $var;

        return $this;
    }

}

