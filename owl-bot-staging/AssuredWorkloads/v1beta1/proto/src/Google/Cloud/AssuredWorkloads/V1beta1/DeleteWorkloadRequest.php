<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for deleting a Workload.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1beta1.DeleteWorkloadRequest</code>
 */
class DeleteWorkloadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The `name` field is used to identify the workload.
     * Format:
     * organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional. The etag of the workload.
     * If this is provided, it must match the server's etag.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $etag = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The `name` field is used to identify the workload.
     *           Format:
     *           organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     *     @type string $etag
     *           Optional. The etag of the workload.
     *           If this is provided, it must match the server's etag.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\Assuredworkloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The `name` field is used to identify the workload.
     * Format:
     * organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The `name` field is used to identify the workload.
     * Format:
     * organizations/{org_id}/locations/{location_id}/workloads/{workload_id}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Optional. The etag of the workload.
     * If this is provided, it must match the server's etag.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEtag()
    {
        return $this->etag;
    }

    /**
     * Optional. The etag of the workload.
     * If this is provided, it must match the server's etag.
     *
     * Generated from protobuf field <code>string etag = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEtag($var)
    {
        GPBUtil::checkString($var, True);
        $this->etag = $var;

        return $this;
    }

}

