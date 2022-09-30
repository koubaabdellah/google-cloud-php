<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/firestore/v1/write.proto

namespace Google\Cloud\Firestore\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result of applying a write.
 *
 * Generated from protobuf message <code>google.firestore.v1.WriteResult</code>
 */
class WriteResult extends \Google\Protobuf\Internal\Message
{
    /**
     * The last update time of the document after applying the write. Not set
     * after a `delete`.
     * If the write did not actually change the document, this will be the
     * previous update_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1;</code>
     */
    protected $update_time = null;
    /**
     * The results of applying each [DocumentTransform.FieldTransform][google.firestore.v1.DocumentTransform.FieldTransform], in the
     * same order.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Value transform_results = 2;</code>
     */
    private $transform_results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Timestamp $update_time
     *           The last update time of the document after applying the write. Not set
     *           after a `delete`.
     *           If the write did not actually change the document, this will be the
     *           previous update_time.
     *     @type array<\Google\Cloud\Firestore\V1\Value>|\Google\Protobuf\Internal\RepeatedField $transform_results
     *           The results of applying each [DocumentTransform.FieldTransform][google.firestore.v1.DocumentTransform.FieldTransform], in the
     *           same order.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Firestore\V1\Write::initOnce();
        parent::__construct($data);
    }

    /**
     * The last update time of the document after applying the write. Not set
     * after a `delete`.
     * If the write did not actually change the document, this will be the
     * previous update_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * The last update time of the document after applying the write. Not set
     * after a `delete`.
     * If the write did not actually change the document, this will be the
     * previous update_time.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 1;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * The results of applying each [DocumentTransform.FieldTransform][google.firestore.v1.DocumentTransform.FieldTransform], in the
     * same order.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Value transform_results = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTransformResults()
    {
        return $this->transform_results;
    }

    /**
     * The results of applying each [DocumentTransform.FieldTransform][google.firestore.v1.DocumentTransform.FieldTransform], in the
     * same order.
     *
     * Generated from protobuf field <code>repeated .google.firestore.v1.Value transform_results = 2;</code>
     * @param array<\Google\Cloud\Firestore\V1\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTransformResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Firestore\V1\Value::class);
        $this->transform_results = $arr;

        return $this;
    }

}

