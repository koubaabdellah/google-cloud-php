<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/explanation_metadata.proto

namespace Google\Cloud\AIPlatform\V1\ExplanationMetadata\InputMetadata;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Domain details of the input feature value. Provides numeric information
 * about the feature, such as its range (min, max). If the feature has been
 * pre-processed, for example with z-scoring, then it provides information
 * about how to recover the original feature. For example, if the input
 * feature is an image and it has been pre-processed to obtain 0-mean and
 * stddev = 1 values, then original_mean, and original_stddev refer to the
 * mean and stddev of the original feature (e.g. image tensor) from which
 * input feature (with mean = 0 and stddev = 1) was obtained.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ExplanationMetadata.InputMetadata.FeatureValueDomain</code>
 */
class FeatureValueDomain extends \Google\Protobuf\Internal\Message
{
    /**
     * The minimum permissible value for this feature.
     *
     * Generated from protobuf field <code>float min_value = 1;</code>
     */
    protected $min_value = 0.0;
    /**
     * The maximum permissible value for this feature.
     *
     * Generated from protobuf field <code>float max_value = 2;</code>
     */
    protected $max_value = 0.0;
    /**
     * If this input feature has been normalized to a mean value of 0,
     * the original_mean specifies the mean value of the domain prior to
     * normalization.
     *
     * Generated from protobuf field <code>float original_mean = 3;</code>
     */
    protected $original_mean = 0.0;
    /**
     * If this input feature has been normalized to a standard deviation of
     * 1.0, the original_stddev specifies the standard deviation of the domain
     * prior to normalization.
     *
     * Generated from protobuf field <code>float original_stddev = 4;</code>
     */
    protected $original_stddev = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $min_value
     *           The minimum permissible value for this feature.
     *     @type float $max_value
     *           The maximum permissible value for this feature.
     *     @type float $original_mean
     *           If this input feature has been normalized to a mean value of 0,
     *           the original_mean specifies the mean value of the domain prior to
     *           normalization.
     *     @type float $original_stddev
     *           If this input feature has been normalized to a standard deviation of
     *           1.0, the original_stddev specifies the standard deviation of the domain
     *           prior to normalization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ExplanationMetadata::initOnce();
        parent::__construct($data);
    }

    /**
     * The minimum permissible value for this feature.
     *
     * Generated from protobuf field <code>float min_value = 1;</code>
     * @return float
     */
    public function getMinValue()
    {
        return $this->min_value;
    }

    /**
     * The minimum permissible value for this feature.
     *
     * Generated from protobuf field <code>float min_value = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setMinValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->min_value = $var;

        return $this;
    }

    /**
     * The maximum permissible value for this feature.
     *
     * Generated from protobuf field <code>float max_value = 2;</code>
     * @return float
     */
    public function getMaxValue()
    {
        return $this->max_value;
    }

    /**
     * The maximum permissible value for this feature.
     *
     * Generated from protobuf field <code>float max_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setMaxValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->max_value = $var;

        return $this;
    }

    /**
     * If this input feature has been normalized to a mean value of 0,
     * the original_mean specifies the mean value of the domain prior to
     * normalization.
     *
     * Generated from protobuf field <code>float original_mean = 3;</code>
     * @return float
     */
    public function getOriginalMean()
    {
        return $this->original_mean;
    }

    /**
     * If this input feature has been normalized to a mean value of 0,
     * the original_mean specifies the mean value of the domain prior to
     * normalization.
     *
     * Generated from protobuf field <code>float original_mean = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setOriginalMean($var)
    {
        GPBUtil::checkFloat($var);
        $this->original_mean = $var;

        return $this;
    }

    /**
     * If this input feature has been normalized to a standard deviation of
     * 1.0, the original_stddev specifies the standard deviation of the domain
     * prior to normalization.
     *
     * Generated from protobuf field <code>float original_stddev = 4;</code>
     * @return float
     */
    public function getOriginalStddev()
    {
        return $this->original_stddev;
    }

    /**
     * If this input feature has been normalized to a standard deviation of
     * 1.0, the original_stddev specifies the standard deviation of the domain
     * prior to normalization.
     *
     * Generated from protobuf field <code>float original_stddev = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setOriginalStddev($var)
    {
        GPBUtil::checkFloat($var);
        $this->original_stddev = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(FeatureValueDomain::class, \Google\Cloud\AIPlatform\V1\ExplanationMetadata_InputMetadata_FeatureValueDomain::class);

