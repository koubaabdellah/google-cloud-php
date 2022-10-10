<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A session in the Cloud Spanner API.
 *
 * Generated from protobuf message <code>google.spanner.v1.Session</code>
 */
class Session extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The name of the session. This is always system-assigned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * The labels for the session.
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     *  * No more than 64 labels can be associated with a given session.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     */
    private $labels;
    /**
     * Output only. The timestamp when the session is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. The approximate timestamp when the session is last used. It is
     * typically earlier than the actual last use time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approximate_last_use_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $approximate_last_use_time = null;
    /**
     * The database role which created this session.
     *
     * Generated from protobuf field <code>string creator_role = 5;</code>
     */
    protected $creator_role = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. The name of the session. This is always system-assigned.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           The labels for the session.
     *            * Label keys must be between 1 and 63 characters long and must conform to
     *              the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     *            * Label values must be between 0 and 63 characters long and must conform
     *              to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     *            * No more than 64 labels can be associated with a given session.
     *           See https://goo.gl/xmQnxf for more information on and examples of labels.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when the session is created.
     *     @type \Google\Protobuf\Timestamp $approximate_last_use_time
     *           Output only. The approximate timestamp when the session is last used. It is
     *           typically earlier than the actual last use time.
     *     @type string $creator_role
     *           The database role which created this session.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The name of the session. This is always system-assigned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. The name of the session. This is always system-assigned.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * The labels for the session.
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     *  * No more than 64 labels can be associated with a given session.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * The labels for the session.
     *  * Label keys must be between 1 and 63 characters long and must conform to
     *    the following regular expression: `[a-z]([-a-z0-9]*[a-z0-9])?`.
     *  * Label values must be between 0 and 63 characters long and must conform
     *    to the regular expression `([a-z]([-a-z0-9]*[a-z0-9])?)?`.
     *  * No more than 64 labels can be associated with a given session.
     * See https://goo.gl/xmQnxf for more information on and examples of labels.
     *
     * Generated from protobuf field <code>map<string, string> labels = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Output only. The timestamp when the session is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. The timestamp when the session is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. The approximate timestamp when the session is last used. It is
     * typically earlier than the actual last use time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approximate_last_use_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getApproximateLastUseTime()
    {
        return $this->approximate_last_use_time;
    }

    public function hasApproximateLastUseTime()
    {
        return isset($this->approximate_last_use_time);
    }

    public function clearApproximateLastUseTime()
    {
        unset($this->approximate_last_use_time);
    }

    /**
     * Output only. The approximate timestamp when the session is last used. It is
     * typically earlier than the actual last use time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp approximate_last_use_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setApproximateLastUseTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->approximate_last_use_time = $var;

        return $this;
    }

    /**
     * The database role which created this session.
     *
     * Generated from protobuf field <code>string creator_role = 5;</code>
     * @return string
     */
    public function getCreatorRole()
    {
        return $this->creator_role;
    }

    /**
     * The database role which created this session.
     *
     * Generated from protobuf field <code>string creator_role = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setCreatorRole($var)
    {
        GPBUtil::checkString($var, True);
        $this->creator_role = $var;

        return $this;
    }

}

