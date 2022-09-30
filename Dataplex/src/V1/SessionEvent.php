<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/dataplex/v1/logs.proto

namespace Google\Cloud\Dataplex\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * These messages contain information about sessions within an environment.
 * The monitored resource is 'Environment'.
 *
 * Generated from protobuf message <code>google.cloud.dataplex.v1.SessionEvent</code>
 */
class SessionEvent extends \Google\Protobuf\Internal\Message
{
    /**
     * The log message.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    private $message = '';
    /**
     * The information about the user that created the session. It will be the
     * email address of the user.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     */
    private $user_id = '';
    /**
     * Unique identifier for the session.
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     */
    private $session_id = '';
    /**
     * The type of the event.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.EventType type = 4;</code>
     */
    private $type = 0;
    /**
     * The status of the event.
     *
     * Generated from protobuf field <code>bool event_succeeded = 6;</code>
     */
    private $event_succeeded = false;
    /**
     * If the session is a warm pooled session.
     *
     * Generated from protobuf field <code>bool warm_pool_enabled = 7;</code>
     */
    private $warm_pool_enabled = false;
    /**
     * The idle duration of a warm pooled session before it is assigned to user.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration unassigned_duration = 8;</code>
     */
    private $unassigned_duration = null;
    protected $detail;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           The log message.
     *     @type string $user_id
     *           The information about the user that created the session. It will be the
     *           email address of the user.
     *     @type string $session_id
     *           Unique identifier for the session.
     *     @type int $type
     *           The type of the event.
     *     @type \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail $query
     *           The execution details of the query.
     *     @type bool $event_succeeded
     *           The status of the event.
     *     @type bool $warm_pool_enabled
     *           If the session is a warm pooled session.
     *     @type \Google\Protobuf\Duration $unassigned_duration
     *           The idle duration of a warm pooled session before it is assigned to user.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Dataplex\V1\Logs::initOnce();
        parent::__construct($data);
    }

    /**
     * The log message.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * The log message.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * The information about the user that created the session. It will be the
     * email address of the user.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @return string
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * The information about the user that created the session. It will be the
     * email address of the user.
     *
     * Generated from protobuf field <code>string user_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUserId($var)
    {
        GPBUtil::checkString($var, True);
        $this->user_id = $var;

        return $this;
    }

    /**
     * Unique identifier for the session.
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     * @return string
     */
    public function getSessionId()
    {
        return $this->session_id;
    }

    /**
     * Unique identifier for the session.
     *
     * Generated from protobuf field <code>string session_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSessionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->session_id = $var;

        return $this;
    }

    /**
     * The type of the event.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.EventType type = 4;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The type of the event.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.EventType type = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Dataplex\V1\SessionEvent\EventType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * The execution details of the query.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.QueryDetail query = 5;</code>
     * @return \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail|null
     */
    public function getQuery()
    {
        return $this->readOneof(5);
    }

    public function hasQuery()
    {
        return $this->hasOneof(5);
    }

    /**
     * The execution details of the query.
     *
     * Generated from protobuf field <code>.google.cloud.dataplex.v1.SessionEvent.QueryDetail query = 5;</code>
     * @param \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Dataplex\V1\SessionEvent\QueryDetail::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * The status of the event.
     *
     * Generated from protobuf field <code>bool event_succeeded = 6;</code>
     * @return bool
     */
    public function getEventSucceeded()
    {
        return $this->event_succeeded;
    }

    /**
     * The status of the event.
     *
     * Generated from protobuf field <code>bool event_succeeded = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setEventSucceeded($var)
    {
        GPBUtil::checkBool($var);
        $this->event_succeeded = $var;

        return $this;
    }

    /**
     * If the session is a warm pooled session.
     *
     * Generated from protobuf field <code>bool warm_pool_enabled = 7;</code>
     * @return bool
     */
    public function getWarmPoolEnabled()
    {
        return $this->warm_pool_enabled;
    }

    /**
     * If the session is a warm pooled session.
     *
     * Generated from protobuf field <code>bool warm_pool_enabled = 7;</code>
     * @param bool $var
     * @return $this
     */
    public function setWarmPoolEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->warm_pool_enabled = $var;

        return $this;
    }

    /**
     * The idle duration of a warm pooled session before it is assigned to user.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration unassigned_duration = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getUnassignedDuration()
    {
        return $this->unassigned_duration;
    }

    public function hasUnassignedDuration()
    {
        return isset($this->unassigned_duration);
    }

    public function clearUnassignedDuration()
    {
        unset($this->unassigned_duration);
    }

    /**
     * The idle duration of a warm pooled session before it is assigned to user.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration unassigned_duration = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setUnassignedDuration($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Duration::class);
        $this->unassigned_duration = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getDetail()
    {
        return $this->whichOneof("detail");
    }

}

