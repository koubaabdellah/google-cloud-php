<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\SubordinateConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message describes a subordinate CA's issuer certificate chain. This
 * wrapper exists for compatibility reasons.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.SubordinateConfig.SubordinateConfigChain</code>
 */
class SubordinateConfigChain extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Expected to be in leaf-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificates = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $pem_certificates;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $pem_certificates
     *           Required. Expected to be in leaf-to-root order according to RFC 5246.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Expected to be in leaf-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificates = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPemCertificates()
    {
        return $this->pem_certificates;
    }

    /**
     * Required. Expected to be in leaf-to-root order according to RFC 5246.
     *
     * Generated from protobuf field <code>repeated string pem_certificates = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPemCertificates($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->pem_certificates = $arr;

        return $this;
    }

}


