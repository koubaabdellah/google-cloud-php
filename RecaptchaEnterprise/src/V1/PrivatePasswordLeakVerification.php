<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recaptchaenterprise/v1/recaptchaenterprise.proto

namespace Google\Cloud\RecaptchaEnterprise\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Private password leak verification info.
 *
 * Generated from protobuf message <code>google.cloud.recaptchaenterprise.v1.PrivatePasswordLeakVerification</code>
 */
class PrivatePasswordLeakVerification extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. Exactly 26-bit prefix of the SHA-256 hash of the canonicalized username. It
     * is used to look up password leaks associated with that hash prefix.
     *
     * Generated from protobuf field <code>bytes lookup_hash_prefix = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $lookup_hash_prefix = '';
    /**
     * Optional. Encrypted Scrypt hash of the canonicalized username+password. It is
     * re-encrypted by the server and returned through
     * `reencrypted_user_credentials_hash`.
     *
     * Generated from protobuf field <code>bytes encrypted_user_credentials_hash = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $encrypted_user_credentials_hash = '';
    /**
     * Output only. List of prefixes of the encrypted potential password leaks that matched the
     * given parameters. They must be compared with the client-side decryption
     * prefix of `reencrypted_user_credentials_hash`
     *
     * Generated from protobuf field <code>repeated bytes encrypted_leak_match_prefixes = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $encrypted_leak_match_prefixes;
    /**
     * Output only. Corresponds to the re-encryption of the `encrypted_user_credentials_hash`
     * field. It is used to match potential password leaks within
     * `encrypted_leak_match_prefixes`.
     *
     * Generated from protobuf field <code>bytes reencrypted_user_credentials_hash = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $reencrypted_user_credentials_hash = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $lookup_hash_prefix
     *           Optional. Exactly 26-bit prefix of the SHA-256 hash of the canonicalized username. It
     *           is used to look up password leaks associated with that hash prefix.
     *     @type string $encrypted_user_credentials_hash
     *           Optional. Encrypted Scrypt hash of the canonicalized username+password. It is
     *           re-encrypted by the server and returned through
     *           `reencrypted_user_credentials_hash`.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $encrypted_leak_match_prefixes
     *           Output only. List of prefixes of the encrypted potential password leaks that matched the
     *           given parameters. They must be compared with the client-side decryption
     *           prefix of `reencrypted_user_credentials_hash`
     *     @type string $reencrypted_user_credentials_hash
     *           Output only. Corresponds to the re-encryption of the `encrypted_user_credentials_hash`
     *           field. It is used to match potential password leaks within
     *           `encrypted_leak_match_prefixes`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Recaptchaenterprise\V1\Recaptchaenterprise::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. Exactly 26-bit prefix of the SHA-256 hash of the canonicalized username. It
     * is used to look up password leaks associated with that hash prefix.
     *
     * Generated from protobuf field <code>bytes lookup_hash_prefix = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getLookupHashPrefix()
    {
        return $this->lookup_hash_prefix;
    }

    /**
     * Optional. Exactly 26-bit prefix of the SHA-256 hash of the canonicalized username. It
     * is used to look up password leaks associated with that hash prefix.
     *
     * Generated from protobuf field <code>bytes lookup_hash_prefix = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setLookupHashPrefix($var)
    {
        GPBUtil::checkString($var, False);
        $this->lookup_hash_prefix = $var;

        return $this;
    }

    /**
     * Optional. Encrypted Scrypt hash of the canonicalized username+password. It is
     * re-encrypted by the server and returned through
     * `reencrypted_user_credentials_hash`.
     *
     * Generated from protobuf field <code>bytes encrypted_user_credentials_hash = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getEncryptedUserCredentialsHash()
    {
        return $this->encrypted_user_credentials_hash;
    }

    /**
     * Optional. Encrypted Scrypt hash of the canonicalized username+password. It is
     * re-encrypted by the server and returned through
     * `reencrypted_user_credentials_hash`.
     *
     * Generated from protobuf field <code>bytes encrypted_user_credentials_hash = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setEncryptedUserCredentialsHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->encrypted_user_credentials_hash = $var;

        return $this;
    }

    /**
     * Output only. List of prefixes of the encrypted potential password leaks that matched the
     * given parameters. They must be compared with the client-side decryption
     * prefix of `reencrypted_user_credentials_hash`
     *
     * Generated from protobuf field <code>repeated bytes encrypted_leak_match_prefixes = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEncryptedLeakMatchPrefixes()
    {
        return $this->encrypted_leak_match_prefixes;
    }

    /**
     * Output only. List of prefixes of the encrypted potential password leaks that matched the
     * given parameters. They must be compared with the client-side decryption
     * prefix of `reencrypted_user_credentials_hash`
     *
     * Generated from protobuf field <code>repeated bytes encrypted_leak_match_prefixes = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEncryptedLeakMatchPrefixes($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::BYTES);
        $this->encrypted_leak_match_prefixes = $arr;

        return $this;
    }

    /**
     * Output only. Corresponds to the re-encryption of the `encrypted_user_credentials_hash`
     * field. It is used to match potential password leaks within
     * `encrypted_leak_match_prefixes`.
     *
     * Generated from protobuf field <code>bytes reencrypted_user_credentials_hash = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getReencryptedUserCredentialsHash()
    {
        return $this->reencrypted_user_credentials_hash;
    }

    /**
     * Output only. Corresponds to the re-encryption of the `encrypted_user_credentials_hash`
     * field. It is used to match potential password leaks within
     * `encrypted_leak_match_prefixes`.
     *
     * Generated from protobuf field <code>bytes reencrypted_user_credentials_hash = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setReencryptedUserCredentialsHash($var)
    {
        GPBUtil::checkString($var, False);
        $this->reencrypted_user_credentials_hash = $var;

        return $this;
    }

}

