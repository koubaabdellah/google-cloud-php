<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataproc/v1/clusters.proto

namespace Google\Cloud\Dataproc\V1\DataprocMetricConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Dataproc OSS metric.
 *
 * Generated from protobuf message <code>google.cloud.dataproc.v1.DataprocMetricConfig.Metric</code>
 */
class Metric extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Default metrics are collected unless `metricOverrides` are
     * specified for the metric source (see [Available OSS metrics]
     * (https://cloud.google.com/dataproc/docs/guides/monitoring#available_oss_metrics)
     * for more information).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.DataprocMetricConfig.MetricSource metric_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $metric_source = 0;
    /**
     * Optional. Specify one or more [available OSS metrics]
     * (https://cloud.google.com/dataproc/docs/guides/monitoring#available_oss_metrics)
     * to collect for the metric course (for the `SPARK` metric source, any
     * [Spark metric]
     * (https://spark.apache.org/docs/latest/monitoring.html#metrics) can be
     * specified).
     * Provide metrics in the following format:
     * <code><var>METRIC_SOURCE</var>:<var>INSTANCE</var>:<var>GROUP</var>:<var>METRIC</var></code>
     * Use camelcase as appropriate.
     * Examples:
     * ```
     * yarn:ResourceManager:QueueMetrics:AppsCompleted
     * spark:driver:DAGScheduler:job.allJobs
     * sparkHistoryServer:JVM:Memory:NonHeapMemoryUsage.committed
     * hiveserver2:JVM:Memory:NonHeapMemoryUsage.used
     * ```
     * Notes:
     * * Only the specified overridden metrics will be collected for the
     *   metric source. For example, if one or more `spark:executive` metrics
     *   are listed as metric overrides, other `SPARK` metrics will not be
     *   collected. The collection of the default metrics for other OSS metric
     *   sources is unaffected. For example, if both `SPARK` andd `YARN` metric
     *   sources are enabled, and overrides are provided for Spark metrics only,
     *   all default YARN metrics will be collected.
     *
     * Generated from protobuf field <code>repeated string metric_overrides = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $metric_overrides;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $metric_source
     *           Required. Default metrics are collected unless `metricOverrides` are
     *           specified for the metric source (see [Available OSS metrics]
     *           (https://cloud.google.com/dataproc/docs/guides/monitoring#available_oss_metrics)
     *           for more information).
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $metric_overrides
     *           Optional. Specify one or more [available OSS metrics]
     *           (https://cloud.google.com/dataproc/docs/guides/monitoring#available_oss_metrics)
     *           to collect for the metric course (for the `SPARK` metric source, any
     *           [Spark metric]
     *           (https://spark.apache.org/docs/latest/monitoring.html#metrics) can be
     *           specified).
     *           Provide metrics in the following format:
     *           <code><var>METRIC_SOURCE</var>:<var>INSTANCE</var>:<var>GROUP</var>:<var>METRIC</var></code>
     *           Use camelcase as appropriate.
     *           Examples:
     *           ```
     *           yarn:ResourceManager:QueueMetrics:AppsCompleted
     *           spark:driver:DAGScheduler:job.allJobs
     *           sparkHistoryServer:JVM:Memory:NonHeapMemoryUsage.committed
     *           hiveserver2:JVM:Memory:NonHeapMemoryUsage.used
     *           ```
     *           Notes:
     *           * Only the specified overridden metrics will be collected for the
     *             metric source. For example, if one or more `spark:executive` metrics
     *             are listed as metric overrides, other `SPARK` metrics will not be
     *             collected. The collection of the default metrics for other OSS metric
     *             sources is unaffected. For example, if both `SPARK` andd `YARN` metric
     *             sources are enabled, and overrides are provided for Spark metrics only,
     *             all default YARN metrics will be collected.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataproc\V1\Clusters::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Default metrics are collected unless `metricOverrides` are
     * specified for the metric source (see [Available OSS metrics]
     * (https://cloud.google.com/dataproc/docs/guides/monitoring#available_oss_metrics)
     * for more information).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.DataprocMetricConfig.MetricSource metric_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getMetricSource()
    {
        return $this->metric_source;
    }

    /**
     * Required. Default metrics are collected unless `metricOverrides` are
     * specified for the metric source (see [Available OSS metrics]
     * (https://cloud.google.com/dataproc/docs/guides/monitoring#available_oss_metrics)
     * for more information).
     *
     * Generated from protobuf field <code>.google.cloud.dataproc.v1.DataprocMetricConfig.MetricSource metric_source = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setMetricSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataproc\V1\DataprocMetricConfig\MetricSource::class);
        $this->metric_source = $var;

        return $this;
    }

    /**
     * Optional. Specify one or more [available OSS metrics]
     * (https://cloud.google.com/dataproc/docs/guides/monitoring#available_oss_metrics)
     * to collect for the metric course (for the `SPARK` metric source, any
     * [Spark metric]
     * (https://spark.apache.org/docs/latest/monitoring.html#metrics) can be
     * specified).
     * Provide metrics in the following format:
     * <code><var>METRIC_SOURCE</var>:<var>INSTANCE</var>:<var>GROUP</var>:<var>METRIC</var></code>
     * Use camelcase as appropriate.
     * Examples:
     * ```
     * yarn:ResourceManager:QueueMetrics:AppsCompleted
     * spark:driver:DAGScheduler:job.allJobs
     * sparkHistoryServer:JVM:Memory:NonHeapMemoryUsage.committed
     * hiveserver2:JVM:Memory:NonHeapMemoryUsage.used
     * ```
     * Notes:
     * * Only the specified overridden metrics will be collected for the
     *   metric source. For example, if one or more `spark:executive` metrics
     *   are listed as metric overrides, other `SPARK` metrics will not be
     *   collected. The collection of the default metrics for other OSS metric
     *   sources is unaffected. For example, if both `SPARK` andd `YARN` metric
     *   sources are enabled, and overrides are provided for Spark metrics only,
     *   all default YARN metrics will be collected.
     *
     * Generated from protobuf field <code>repeated string metric_overrides = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricOverrides()
    {
        return $this->metric_overrides;
    }

    /**
     * Optional. Specify one or more [available OSS metrics]
     * (https://cloud.google.com/dataproc/docs/guides/monitoring#available_oss_metrics)
     * to collect for the metric course (for the `SPARK` metric source, any
     * [Spark metric]
     * (https://spark.apache.org/docs/latest/monitoring.html#metrics) can be
     * specified).
     * Provide metrics in the following format:
     * <code><var>METRIC_SOURCE</var>:<var>INSTANCE</var>:<var>GROUP</var>:<var>METRIC</var></code>
     * Use camelcase as appropriate.
     * Examples:
     * ```
     * yarn:ResourceManager:QueueMetrics:AppsCompleted
     * spark:driver:DAGScheduler:job.allJobs
     * sparkHistoryServer:JVM:Memory:NonHeapMemoryUsage.committed
     * hiveserver2:JVM:Memory:NonHeapMemoryUsage.used
     * ```
     * Notes:
     * * Only the specified overridden metrics will be collected for the
     *   metric source. For example, if one or more `spark:executive` metrics
     *   are listed as metric overrides, other `SPARK` metrics will not be
     *   collected. The collection of the default metrics for other OSS metric
     *   sources is unaffected. For example, if both `SPARK` andd `YARN` metric
     *   sources are enabled, and overrides are provided for Spark metrics only,
     *   all default YARN metrics will be collected.
     *
     * Generated from protobuf field <code>repeated string metric_overrides = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricOverrides($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metric_overrides = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Metric::class, \Google\Cloud\Dataproc\V1\DataprocMetricConfig_Metric::class);

