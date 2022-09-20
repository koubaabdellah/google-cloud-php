<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_monitoring.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The config for feature monitoring threshold.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ThresholdConfig</code>
 */
class ThresholdConfig extends \Google\Protobuf\Internal\Message
{
    protected $threshold;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $value
     *           Specify a threshold value that can trigger the alert.
     *           If this threshold config is for feature distribution distance:
     *             1. For categorical feature, the distribution distance is calculated by
     *                L-inifinity norm.
     *             2. For numerical feature, the distribution distance is calculated by
     *                Jensen–Shannon divergence.
     *           Each feature must have a non-zero threshold if they need to be monitored.
     *           Otherwise no alert will be triggered for that feature.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Specify a threshold value that can trigger the alert.
     * If this threshold config is for feature distribution distance:
     *   1. For categorical feature, the distribution distance is calculated by
     *      L-inifinity norm.
     *   2. For numerical feature, the distribution distance is calculated by
     *      Jensen–Shannon divergence.
     * Each feature must have a non-zero threshold if they need to be monitored.
     * Otherwise no alert will be triggered for that feature.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     * @return float
     */
    public function getValue()
    {
        return $this->readOneof(1);
    }

    public function hasValue()
    {
        return $this->hasOneof(1);
    }

    /**
     * Specify a threshold value that can trigger the alert.
     * If this threshold config is for feature distribution distance:
     *   1. For categorical feature, the distribution distance is calculated by
     *      L-inifinity norm.
     *   2. For numerical feature, the distribution distance is calculated by
     *      Jensen–Shannon divergence.
     * Each feature must have a non-zero threshold if they need to be monitored.
     * Otherwise no alert will be triggered for that feature.
     *
     * Generated from protobuf field <code>double value = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setValue($var)
    {
        GPBUtil::checkDouble($var);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getThreshold()
    {
        return $this->whichOneof("threshold");
    }

}

