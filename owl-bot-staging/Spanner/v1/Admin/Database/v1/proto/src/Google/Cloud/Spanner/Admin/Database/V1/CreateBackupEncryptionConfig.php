<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/spanner/admin/database/v1/backup.proto

namespace Google\Cloud\Spanner\Admin\Database\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Encryption configuration for the backup to create.
 *
 * Generated from protobuf message <code>google.spanner.admin.database.v1.CreateBackupEncryptionConfig</code>
 */
class CreateBackupEncryptionConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The encryption type of the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CreateBackupEncryptionConfig.EncryptionType encryption_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $encryption_type = 0;
    /**
     * Optional. The Cloud KMS key that will be used to protect the backup.
     * This field should be set only when
     * [encryption_type][google.spanner.admin.database.v1.CreateBackupEncryptionConfig.encryption_type] is
     * `CUSTOMER_MANAGED_ENCRYPTION`. Values are of the form
     * `projects/<project>/locations/<location>/keyRings/<key_ring>/cryptoKeys/<kms_key_name>`.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     */
    protected $kms_key_name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $encryption_type
     *           Required. The encryption type of the backup.
     *     @type string $kms_key_name
     *           Optional. The Cloud KMS key that will be used to protect the backup.
     *           This field should be set only when
     *           [encryption_type][google.spanner.admin.database.v1.CreateBackupEncryptionConfig.encryption_type] is
     *           `CUSTOMER_MANAGED_ENCRYPTION`. Values are of the form
     *           `projects/<project>/locations/<location>/keyRings/<key_ring>/cryptoKeys/<kms_key_name>`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Spanner\Admin\Database\V1\Backup::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The encryption type of the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CreateBackupEncryptionConfig.EncryptionType encryption_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return int
     */
    public function getEncryptionType()
    {
        return $this->encryption_type;
    }

    /**
     * Required. The encryption type of the backup.
     *
     * Generated from protobuf field <code>.google.spanner.admin.database.v1.CreateBackupEncryptionConfig.EncryptionType encryption_type = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param int $var
     * @return $this
     */
    public function setEncryptionType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Spanner\Admin\Database\V1\CreateBackupEncryptionConfig\EncryptionType::class);
        $this->encryption_type = $var;

        return $this;
    }

    /**
     * Optional. The Cloud KMS key that will be used to protect the backup.
     * This field should be set only when
     * [encryption_type][google.spanner.admin.database.v1.CreateBackupEncryptionConfig.encryption_type] is
     * `CUSTOMER_MANAGED_ENCRYPTION`. Values are of the form
     * `projects/<project>/locations/<location>/keyRings/<key_ring>/cryptoKeys/<kms_key_name>`.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * Optional. The Cloud KMS key that will be used to protect the backup.
     * This field should be set only when
     * [encryption_type][google.spanner.admin.database.v1.CreateBackupEncryptionConfig.encryption_type] is
     * `CUSTOMER_MANAGED_ENCRYPTION`. Values are of the form
     * `projects/<project>/locations/<location>/keyRings/<key_ring>/cryptoKeys/<kms_key_name>`.
     *
     * Generated from protobuf field <code>string kms_key_name = 2 [(.google.api.field_behavior) = OPTIONAL, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

}

