<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/deploy/v1/cloud_deploy.proto

namespace Google\Cloud\Deploy\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration of the environment to use when calling Skaffold.
 *
 * Generated from protobuf message <code>google.cloud.deploy.v1.ExecutionConfig</code>
 */
class ExecutionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Usages when this configuration should be applied.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.ExecutionConfig.ExecutionEnvironmentUsage usages = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $usages;
    /**
     * Optional. The resource name of the `WorkerPool`, with the format
     * `projects/{project}/locations/{location}/workerPools/{worker_pool}`.
     * If this optional field is unspecified, the default Cloud Build pool will be
     * used.
     *
     * Generated from protobuf field <code>string worker_pool = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $worker_pool = '';
    /**
     * Optional. Google service account to use for execution. If unspecified,
     * the project execution service account
     * (<PROJECT_NUMBER>-compute&#64;developer.gserviceaccount.com) is used.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $service_account = '';
    /**
     * Optional. Cloud Storage location in which to store execution outputs. This can
     * either be a bucket ("gs://my-bucket") or a path within a bucket
     * ("gs://my-bucket/my-dir").
     * If unspecified, a default bucket located in the same region will be used.
     *
     * Generated from protobuf field <code>string artifact_storage = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $artifact_storage = '';
    /**
     * Optional. Execution timeout for a Cloud Build Execution. This must be between 10m and
     * 24h in seconds format.
     * If unspecified, a default timeout of 1h is used.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $execution_timeout = null;
    protected $execution_environment;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $usages
     *           Required. Usages when this configuration should be applied.
     *     @type \Google\Cloud\Deploy\V1\DefaultPool $default_pool
     *           Optional. Use default Cloud Build pool.
     *     @type \Google\Cloud\Deploy\V1\PrivatePool $private_pool
     *           Optional. Use private Cloud Build pool.
     *     @type string $worker_pool
     *           Optional. The resource name of the `WorkerPool`, with the format
     *           `projects/{project}/locations/{location}/workerPools/{worker_pool}`.
     *           If this optional field is unspecified, the default Cloud Build pool will be
     *           used.
     *     @type string $service_account
     *           Optional. Google service account to use for execution. If unspecified,
     *           the project execution service account
     *           (<PROJECT_NUMBER>-compute&#64;developer.gserviceaccount.com) is used.
     *     @type string $artifact_storage
     *           Optional. Cloud Storage location in which to store execution outputs. This can
     *           either be a bucket ("gs://my-bucket") or a path within a bucket
     *           ("gs://my-bucket/my-dir").
     *           If unspecified, a default bucket located in the same region will be used.
     *     @type \Google\Protobuf\Duration $execution_timeout
     *           Optional. Execution timeout for a Cloud Build Execution. This must be between 10m and
     *           24h in seconds format.
     *           If unspecified, a default timeout of 1h is used.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Deploy\V1\CloudDeploy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Usages when this configuration should be applied.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.ExecutionConfig.ExecutionEnvironmentUsage usages = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getUsages()
    {
        return $this->usages;
    }

    /**
     * Required. Usages when this configuration should be applied.
     *
     * Generated from protobuf field <code>repeated .google.cloud.deploy.v1.ExecutionConfig.ExecutionEnvironmentUsage usages = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setUsages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Deploy\V1\ExecutionConfig\ExecutionEnvironmentUsage::class);
        $this->usages = $arr;

        return $this;
    }

    /**
     * Optional. Use default Cloud Build pool.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DefaultPool default_pool = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\DefaultPool|null
     */
    public function getDefaultPool()
    {
        return $this->readOneof(2);
    }

    public function hasDefaultPool()
    {
        return $this->hasOneof(2);
    }

    /**
     * Optional. Use default Cloud Build pool.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.DefaultPool default_pool = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\DefaultPool $var
     * @return $this
     */
    public function setDefaultPool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\DefaultPool::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Optional. Use private Cloud Build pool.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PrivatePool private_pool = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Cloud\Deploy\V1\PrivatePool|null
     */
    public function getPrivatePool()
    {
        return $this->readOneof(3);
    }

    public function hasPrivatePool()
    {
        return $this->hasOneof(3);
    }

    /**
     * Optional. Use private Cloud Build pool.
     *
     * Generated from protobuf field <code>.google.cloud.deploy.v1.PrivatePool private_pool = 3 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Cloud\Deploy\V1\PrivatePool $var
     * @return $this
     */
    public function setPrivatePool($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Deploy\V1\PrivatePool::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Optional. The resource name of the `WorkerPool`, with the format
     * `projects/{project}/locations/{location}/workerPools/{worker_pool}`.
     * If this optional field is unspecified, the default Cloud Build pool will be
     * used.
     *
     * Generated from protobuf field <code>string worker_pool = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getWorkerPool()
    {
        return $this->worker_pool;
    }

    /**
     * Optional. The resource name of the `WorkerPool`, with the format
     * `projects/{project}/locations/{location}/workerPools/{worker_pool}`.
     * If this optional field is unspecified, the default Cloud Build pool will be
     * used.
     *
     * Generated from protobuf field <code>string worker_pool = 4 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setWorkerPool($var)
    {
        GPBUtil::checkString($var, True);
        $this->worker_pool = $var;

        return $this;
    }

    /**
     * Optional. Google service account to use for execution. If unspecified,
     * the project execution service account
     * (<PROJECT_NUMBER>-compute&#64;developer.gserviceaccount.com) is used.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getServiceAccount()
    {
        return $this->service_account;
    }

    /**
     * Optional. Google service account to use for execution. If unspecified,
     * the project execution service account
     * (<PROJECT_NUMBER>-compute&#64;developer.gserviceaccount.com) is used.
     *
     * Generated from protobuf field <code>string service_account = 5 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account = $var;

        return $this;
    }

    /**
     * Optional. Cloud Storage location in which to store execution outputs. This can
     * either be a bucket ("gs://my-bucket") or a path within a bucket
     * ("gs://my-bucket/my-dir").
     * If unspecified, a default bucket located in the same region will be used.
     *
     * Generated from protobuf field <code>string artifact_storage = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getArtifactStorage()
    {
        return $this->artifact_storage;
    }

    /**
     * Optional. Cloud Storage location in which to store execution outputs. This can
     * either be a bucket ("gs://my-bucket") or a path within a bucket
     * ("gs://my-bucket/my-dir").
     * If unspecified, a default bucket located in the same region will be used.
     *
     * Generated from protobuf field <code>string artifact_storage = 6 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setArtifactStorage($var)
    {
        GPBUtil::checkString($var, True);
        $this->artifact_storage = $var;

        return $this;
    }

    /**
     * Optional. Execution timeout for a Cloud Build Execution. This must be between 10m and
     * 24h in seconds format.
     * If unspecified, a default timeout of 1h is used.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getExecutionTimeout()
    {
        return $this->execution_timeout;
    }

    public function hasExecutionTimeout()
    {
        return isset($this->execution_timeout);
    }

    public function clearExecutionTimeout()
    {
        unset($this->execution_timeout);
    }

    /**
     * Optional. Execution timeout for a Cloud Build Execution. This must be between 10m and
     * 24h in seconds format.
     * If unspecified, a default timeout of 1h is used.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration execution_timeout = 7 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setExecutionTimeout($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->execution_timeout = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getExecutionEnvironment()
    {
        return $this->whichOneof("execution_environment");
    }

}

