<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Shielded Instance Config for clusters using [Compute Engine Shielded
 * VMs](https://cloud.google.com/security/shielded-cloud/shielded-vm).
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.ShieldedInstanceConfig</code>
 */
class ShieldedInstanceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Defines whether instances have Secure Boot enabled.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_secure_boot = false;
    /**
     * Optional. Defines whether instances have the vTPM enabled.
     *
     * Generated from protobuf field <code>bool enable_vtpm = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_vtpm = false;
    /**
     * Optional. Defines whether instances have integrity monitoring enabled.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $enable_integrity_monitoring = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_secure_boot
     *           Optional. Defines whether instances have Secure Boot enabled.
     *     @type bool $enable_vtpm
     *           Optional. Defines whether instances have the vTPM enabled.
     *     @type bool $enable_integrity_monitoring
     *           Optional. Defines whether instances have integrity monitoring enabled.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Defines whether instances have Secure Boot enabled.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableSecureBoot()
    {
        return $this->enable_secure_boot;
    }

    /**
     * Optional. Defines whether instances have Secure Boot enabled.
     *
     * Generated from protobuf field <code>bool enable_secure_boot = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableSecureBoot($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_secure_boot = $var;

        return $this;
    }

    /**
     * Optional. Defines whether instances have the vTPM enabled.
     *
     * Generated from protobuf field <code>bool enable_vtpm = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableVtpm()
    {
        return $this->enable_vtpm;
    }

    /**
     * Optional. Defines whether instances have the vTPM enabled.
     *
     * Generated from protobuf field <code>bool enable_vtpm = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableVtpm($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_vtpm = $var;

        return $this;
    }

    /**
     * Optional. Defines whether instances have integrity monitoring enabled.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getEnableIntegrityMonitoring()
    {
        return $this->enable_integrity_monitoring;
    }

    /**
     * Optional. Defines whether instances have integrity monitoring enabled.
     *
     * Generated from protobuf field <code>bool enable_integrity_monitoring = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableIntegrityMonitoring($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_integrity_monitoring = $var;

        return $this;
    }

}

