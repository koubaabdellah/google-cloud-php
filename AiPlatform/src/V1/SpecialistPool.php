<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/specialist_pool.proto

namespace Google\Cloud\AIPlatform\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * SpecialistPool represents customers' own workforce to work on their data
 * labeling jobs. It includes a group of specialist managers and workers.
 * Managers are responsible for managing the workers in this pool as well as
 * customers' data labeling jobs associated with this pool. Customers create
 * specialist pool as well as start data labeling jobs on Cloud, managers and
 * workers handle the jobs using CrowdCompute console.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.SpecialistPool</code>
 */
class SpecialistPool extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the SpecialistPool.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Required. The user-defined name of the SpecialistPool.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     * This field should be unique on project-level.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $display_name = '';
    /**
     * Output only. The number of managers in this SpecialistPool.
     *
     * Generated from protobuf field <code>int32 specialist_managers_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $specialist_managers_count = 0;
    /**
     * The email addresses of the managers in the SpecialistPool.
     *
     * Generated from protobuf field <code>repeated string specialist_manager_emails = 4;</code>
     */
    private $specialist_manager_emails;
    /**
     * Output only. The resource name of the pending data labeling jobs.
     *
     * Generated from protobuf field <code>repeated string pending_data_labeling_jobs = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $pending_data_labeling_jobs;
    /**
     * The email addresses of workers in the SpecialistPool.
     *
     * Generated from protobuf field <code>repeated string specialist_worker_emails = 7;</code>
     */
    private $specialist_worker_emails;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the SpecialistPool.
     *     @type string $display_name
     *           Required. The user-defined name of the SpecialistPool.
     *           The name can be up to 128 characters long and can be consist of any UTF-8
     *           characters.
     *           This field should be unique on project-level.
     *     @type int $specialist_managers_count
     *           Output only. The number of managers in this SpecialistPool.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $specialist_manager_emails
     *           The email addresses of the managers in the SpecialistPool.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pending_data_labeling_jobs
     *           Output only. The resource name of the pending data labeling jobs.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $specialist_worker_emails
     *           The email addresses of workers in the SpecialistPool.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\SpecialistPool::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the SpecialistPool.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the SpecialistPool.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The user-defined name of the SpecialistPool.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     * This field should be unique on project-level.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. The user-defined name of the SpecialistPool.
     * The name can be up to 128 characters long and can be consist of any UTF-8
     * characters.
     * This field should be unique on project-level.
     *
     * Generated from protobuf field <code>string display_name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The number of managers in this SpecialistPool.
     *
     * Generated from protobuf field <code>int32 specialist_managers_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getSpecialistManagersCount()
    {
        return $this->specialist_managers_count;
    }

    /**
     * Output only. The number of managers in this SpecialistPool.
     *
     * Generated from protobuf field <code>int32 specialist_managers_count = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setSpecialistManagersCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->specialist_managers_count = $var;

        return $this;
    }

    /**
     * The email addresses of the managers in the SpecialistPool.
     *
     * Generated from protobuf field <code>repeated string specialist_manager_emails = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpecialistManagerEmails()
    {
        return $this->specialist_manager_emails;
    }

    /**
     * The email addresses of the managers in the SpecialistPool.
     *
     * Generated from protobuf field <code>repeated string specialist_manager_emails = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpecialistManagerEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->specialist_manager_emails = $arr;

        return $this;
    }

    /**
     * Output only. The resource name of the pending data labeling jobs.
     *
     * Generated from protobuf field <code>repeated string pending_data_labeling_jobs = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPendingDataLabelingJobs()
    {
        return $this->pending_data_labeling_jobs;
    }

    /**
     * Output only. The resource name of the pending data labeling jobs.
     *
     * Generated from protobuf field <code>repeated string pending_data_labeling_jobs = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPendingDataLabelingJobs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pending_data_labeling_jobs = $arr;

        return $this;
    }

    /**
     * The email addresses of workers in the SpecialistPool.
     *
     * Generated from protobuf field <code>repeated string specialist_worker_emails = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSpecialistWorkerEmails()
    {
        return $this->specialist_worker_emails;
    }

    /**
     * The email addresses of workers in the SpecialistPool.
     *
     * Generated from protobuf field <code>repeated string specialist_worker_emails = 7;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSpecialistWorkerEmails($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->specialist_worker_emails = $arr;

        return $this;
    }

}

