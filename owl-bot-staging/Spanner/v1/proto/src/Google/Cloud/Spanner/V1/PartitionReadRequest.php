<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/v1/spanner.proto

namespace Google\Cloud\Spanner\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request for [PartitionRead][google.spanner.v1.Spanner.PartitionRead]
 *
 * Generated from protobuf message <code>google.spanner.v1.PartitionReadRequest</code>
 */
class PartitionReadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The session used to create the partitions.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $session = '';
    /**
     * Read only snapshot transactions are supported, read/write and single use
     * transactions are not.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     */
    protected $transaction = null;
    /**
     * Required. The name of the table in the database to be read.
     *
     * Generated from protobuf field <code>string table = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $table = '';
    /**
     * If non-empty, the name of an index on [table][google.spanner.v1.PartitionReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.PartitionReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.PartitionReadRequest.key_set] for further information.
     *
     * Generated from protobuf field <code>string index = 4;</code>
     */
    protected $index = '';
    /**
     * The columns of [table][google.spanner.v1.PartitionReadRequest.table] to be returned for each row matching
     * this request.
     *
     * Generated from protobuf field <code>repeated string columns = 5;</code>
     */
    private $columns;
    /**
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.PartitionReadRequest.table] to be yielded, unless [index][google.spanner.v1.PartitionReadRequest.index]
     * is present. If [index][google.spanner.v1.PartitionReadRequest.index] is present, then [key_set][google.spanner.v1.PartitionReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.PartitionReadRequest.index].
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $key_set = null;
    /**
     * Additional options that affect how many partitions are created.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PartitionOptions partition_options = 9;</code>
     */
    protected $partition_options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $session
     *           Required. The session used to create the partitions.
     *     @type \Google\Cloud\Spanner\V1\TransactionSelector $transaction
     *           Read only snapshot transactions are supported, read/write and single use
     *           transactions are not.
     *     @type string $table
     *           Required. The name of the table in the database to be read.
     *     @type string $index
     *           If non-empty, the name of an index on [table][google.spanner.v1.PartitionReadRequest.table]. This index is
     *           used instead of the table primary key when interpreting [key_set][google.spanner.v1.PartitionReadRequest.key_set]
     *           and sorting result rows. See [key_set][google.spanner.v1.PartitionReadRequest.key_set] for further information.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $columns
     *           The columns of [table][google.spanner.v1.PartitionReadRequest.table] to be returned for each row matching
     *           this request.
     *     @type \Google\Cloud\Spanner\V1\KeySet $key_set
     *           Required. `key_set` identifies the rows to be yielded. `key_set` names the
     *           primary keys of the rows in [table][google.spanner.v1.PartitionReadRequest.table] to be yielded, unless [index][google.spanner.v1.PartitionReadRequest.index]
     *           is present. If [index][google.spanner.v1.PartitionReadRequest.index] is present, then [key_set][google.spanner.v1.PartitionReadRequest.key_set] instead names
     *           index keys in [index][google.spanner.v1.PartitionReadRequest.index].
     *           It is not an error for the `key_set` to name rows that do not
     *           exist in the database. Read yields nothing for nonexistent rows.
     *     @type \Google\Cloud\Spanner\V1\PartitionOptions $partition_options
     *           Additional options that affect how many partitions are created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\V1\Spanner::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The session used to create the partitions.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Required. The session used to create the partitions.
     *
     * Generated from protobuf field <code>string session = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setSession($var)
    {
        GPBUtil::checkString($var, True);
        $this->session = $var;

        return $this;
    }

    /**
     * Read only snapshot transactions are supported, read/write and single use
     * transactions are not.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     * @return \Google\Cloud\Spanner\V1\TransactionSelector|null
     */
    public function getTransaction()
    {
        return $this->transaction;
    }

    public function hasTransaction()
    {
        return isset($this->transaction);
    }

    public function clearTransaction()
    {
        unset($this->transaction);
    }

    /**
     * Read only snapshot transactions are supported, read/write and single use
     * transactions are not.
     *
     * Generated from protobuf field <code>.google.spanner.v1.TransactionSelector transaction = 2;</code>
     * @param \Google\Cloud\Spanner\V1\TransactionSelector $var
     * @return $this
     */
    public function setTransaction($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\TransactionSelector::class);
        $this->transaction = $var;

        return $this;
    }

    /**
     * Required. The name of the table in the database to be read.
     *
     * Generated from protobuf field <code>string table = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTable()
    {
        return $this->table;
    }

    /**
     * Required. The name of the table in the database to be read.
     *
     * Generated from protobuf field <code>string table = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTable($var)
    {
        GPBUtil::checkString($var, True);
        $this->table = $var;

        return $this;
    }

    /**
     * If non-empty, the name of an index on [table][google.spanner.v1.PartitionReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.PartitionReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.PartitionReadRequest.key_set] for further information.
     *
     * Generated from protobuf field <code>string index = 4;</code>
     * @return string
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * If non-empty, the name of an index on [table][google.spanner.v1.PartitionReadRequest.table]. This index is
     * used instead of the table primary key when interpreting [key_set][google.spanner.v1.PartitionReadRequest.key_set]
     * and sorting result rows. See [key_set][google.spanner.v1.PartitionReadRequest.key_set] for further information.
     *
     * Generated from protobuf field <code>string index = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setIndex($var)
    {
        GPBUtil::checkString($var, True);
        $this->index = $var;

        return $this;
    }

    /**
     * The columns of [table][google.spanner.v1.PartitionReadRequest.table] to be returned for each row matching
     * this request.
     *
     * Generated from protobuf field <code>repeated string columns = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumns()
    {
        return $this->columns;
    }

    /**
     * The columns of [table][google.spanner.v1.PartitionReadRequest.table] to be returned for each row matching
     * this request.
     *
     * Generated from protobuf field <code>repeated string columns = 5;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumns($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->columns = $arr;

        return $this;
    }

    /**
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.PartitionReadRequest.table] to be yielded, unless [index][google.spanner.v1.PartitionReadRequest.index]
     * is present. If [index][google.spanner.v1.PartitionReadRequest.index] is present, then [key_set][google.spanner.v1.PartitionReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.PartitionReadRequest.index].
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Spanner\V1\KeySet|null
     */
    public function getKeySet()
    {
        return $this->key_set;
    }

    public function hasKeySet()
    {
        return isset($this->key_set);
    }

    public function clearKeySet()
    {
        unset($this->key_set);
    }

    /**
     * Required. `key_set` identifies the rows to be yielded. `key_set` names the
     * primary keys of the rows in [table][google.spanner.v1.PartitionReadRequest.table] to be yielded, unless [index][google.spanner.v1.PartitionReadRequest.index]
     * is present. If [index][google.spanner.v1.PartitionReadRequest.index] is present, then [key_set][google.spanner.v1.PartitionReadRequest.key_set] instead names
     * index keys in [index][google.spanner.v1.PartitionReadRequest.index].
     * It is not an error for the `key_set` to name rows that do not
     * exist in the database. Read yields nothing for nonexistent rows.
     *
     * Generated from protobuf field <code>.google.spanner.v1.KeySet key_set = 6 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Spanner\V1\KeySet $var
     * @return $this
     */
    public function setKeySet($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\KeySet::class);
        $this->key_set = $var;

        return $this;
    }

    /**
     * Additional options that affect how many partitions are created.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PartitionOptions partition_options = 9;</code>
     * @return \Google\Cloud\Spanner\V1\PartitionOptions|null
     */
    public function getPartitionOptions()
    {
        return $this->partition_options;
    }

    public function hasPartitionOptions()
    {
        return isset($this->partition_options);
    }

    public function clearPartitionOptions()
    {
        unset($this->partition_options);
    }

    /**
     * Additional options that affect how many partitions are created.
     *
     * Generated from protobuf field <code>.google.spanner.v1.PartitionOptions partition_options = 9;</code>
     * @param \Google\Cloud\Spanner\V1\PartitionOptions $var
     * @return $this
     */
    public function setPartitionOptions($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Spanner\V1\PartitionOptions::class);
        $this->partition_options = $var;

        return $this;
    }

}

