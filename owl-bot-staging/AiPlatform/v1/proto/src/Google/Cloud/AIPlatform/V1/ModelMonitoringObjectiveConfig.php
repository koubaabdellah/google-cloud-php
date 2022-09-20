<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model_monitoring.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The objective configuration for model monitoring, including the information
 * needed to detect anomalies for one particular model.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig</code>
 */
class ModelMonitoringObjectiveConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Training dataset for models. This field has to be set only if
     * TrainingPredictionSkewDetectionConfig is specified.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.TrainingDataset training_dataset = 1;</code>
     */
    protected $training_dataset = null;
    /**
     * The config for skew between training data and prediction data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.TrainingPredictionSkewDetectionConfig training_prediction_skew_detection_config = 2;</code>
     */
    protected $training_prediction_skew_detection_config = null;
    /**
     * The config for drift of prediction data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.PredictionDriftDetectionConfig prediction_drift_detection_config = 3;</code>
     */
    protected $prediction_drift_detection_config = null;
    /**
     * The config for integrating with Vertex Explainable AI.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig explanation_config = 5;</code>
     */
    protected $explanation_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\TrainingDataset $training_dataset
     *           Training dataset for models. This field has to be set only if
     *           TrainingPredictionSkewDetectionConfig is specified.
     *     @type \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\TrainingPredictionSkewDetectionConfig $training_prediction_skew_detection_config
     *           The config for skew between training data and prediction data.
     *     @type \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\PredictionDriftDetectionConfig $prediction_drift_detection_config
     *           The config for drift of prediction data.
     *     @type \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig $explanation_config
     *           The config for integrating with Vertex Explainable AI.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\ModelMonitoring::initOnce();
        parent::__construct($data);
    }

    /**
     * Training dataset for models. This field has to be set only if
     * TrainingPredictionSkewDetectionConfig is specified.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.TrainingDataset training_dataset = 1;</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\TrainingDataset|null
     */
    public function getTrainingDataset()
    {
        return $this->training_dataset;
    }

    public function hasTrainingDataset()
    {
        return isset($this->training_dataset);
    }

    public function clearTrainingDataset()
    {
        unset($this->training_dataset);
    }

    /**
     * Training dataset for models. This field has to be set only if
     * TrainingPredictionSkewDetectionConfig is specified.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.TrainingDataset training_dataset = 1;</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\TrainingDataset $var
     * @return $this
     */
    public function setTrainingDataset($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\TrainingDataset::class);
        $this->training_dataset = $var;

        return $this;
    }

    /**
     * The config for skew between training data and prediction data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.TrainingPredictionSkewDetectionConfig training_prediction_skew_detection_config = 2;</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\TrainingPredictionSkewDetectionConfig|null
     */
    public function getTrainingPredictionSkewDetectionConfig()
    {
        return $this->training_prediction_skew_detection_config;
    }

    public function hasTrainingPredictionSkewDetectionConfig()
    {
        return isset($this->training_prediction_skew_detection_config);
    }

    public function clearTrainingPredictionSkewDetectionConfig()
    {
        unset($this->training_prediction_skew_detection_config);
    }

    /**
     * The config for skew between training data and prediction data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.TrainingPredictionSkewDetectionConfig training_prediction_skew_detection_config = 2;</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\TrainingPredictionSkewDetectionConfig $var
     * @return $this
     */
    public function setTrainingPredictionSkewDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\TrainingPredictionSkewDetectionConfig::class);
        $this->training_prediction_skew_detection_config = $var;

        return $this;
    }

    /**
     * The config for drift of prediction data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.PredictionDriftDetectionConfig prediction_drift_detection_config = 3;</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\PredictionDriftDetectionConfig|null
     */
    public function getPredictionDriftDetectionConfig()
    {
        return $this->prediction_drift_detection_config;
    }

    public function hasPredictionDriftDetectionConfig()
    {
        return isset($this->prediction_drift_detection_config);
    }

    public function clearPredictionDriftDetectionConfig()
    {
        unset($this->prediction_drift_detection_config);
    }

    /**
     * The config for drift of prediction data.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.PredictionDriftDetectionConfig prediction_drift_detection_config = 3;</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\PredictionDriftDetectionConfig $var
     * @return $this
     */
    public function setPredictionDriftDetectionConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\PredictionDriftDetectionConfig::class);
        $this->prediction_drift_detection_config = $var;

        return $this;
    }

    /**
     * The config for integrating with Vertex Explainable AI.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig explanation_config = 5;</code>
     * @return \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig|null
     */
    public function getExplanationConfig()
    {
        return $this->explanation_config;
    }

    public function hasExplanationConfig()
    {
        return isset($this->explanation_config);
    }

    public function clearExplanationConfig()
    {
        unset($this->explanation_config);
    }

    /**
     * The config for integrating with Vertex Explainable AI.
     *
     * Generated from protobuf field <code>.google.cloud.aiplatform.v1.ModelMonitoringObjectiveConfig.ExplanationConfig explanation_config = 5;</code>
     * @param \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig $var
     * @return $this
     */
    public function setExplanationConfig($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\AIPlatform\V1\ModelMonitoringObjectiveConfig\ExplanationConfig::class);
        $this->explanation_config = $var;

        return $this;
    }

}

