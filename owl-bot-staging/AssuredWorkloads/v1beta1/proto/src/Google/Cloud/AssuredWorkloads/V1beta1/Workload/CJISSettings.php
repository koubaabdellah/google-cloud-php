<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/assuredworkloads/v1beta1/assuredworkloads.proto

namespace Google\Cloud\AssuredWorkloads\V1beta1\Workload;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Settings specific to resources needed for CJIS.
 *
 * Generated from protobuf message <code>google.cloud.assuredworkloads.v1beta1.Workload.CJISSettings</code>
 */
class CJISSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Input only. Immutable. Settings used to create a CMEK crypto key.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 1 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $kms_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings $kms_settings
     *           Input only. Immutable. Settings used to create a CMEK crypto key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Assuredworkloads\V1Beta1\Assuredworkloads::initOnce();
        parent::__construct($data);
    }

    /**
     * Input only. Immutable. Settings used to create a CMEK crypto key.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 1 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @return \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings|null
     */
    public function getKmsSettings()
    {
        return $this->kms_settings;
    }

    public function hasKmsSettings()
    {
        return isset($this->kms_settings);
    }

    public function clearKmsSettings()
    {
        unset($this->kms_settings);
    }

    /**
     * Input only. Immutable. Settings used to create a CMEK crypto key.
     *
     * Generated from protobuf field <code>.google.cloud.assuredworkloads.v1beta1.Workload.KMSSettings kms_settings = 1 [(.google.api.field_behavior) = INPUT_ONLY, (.google.api.field_behavior) = IMMUTABLE];</code>
     * @param \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings $var
     * @return $this
     */
    public function setKmsSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AssuredWorkloads\V1beta1\Workload\KMSSettings::class);
        $this->kms_settings = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(CJISSettings::class, \Google\Cloud\AssuredWorkloads\V1beta1\Workload_CJISSettings::class);

