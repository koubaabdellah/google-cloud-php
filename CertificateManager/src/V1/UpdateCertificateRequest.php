<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/certificatemanager/v1/certificate_manager.proto

namespace Google\Cloud\CertificateManager\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request for the `UpdateCertificate` method.
 *
 * Generated from protobuf message <code>google.cloud.certificatemanager.v1.UpdateCertificateRequest</code>
 */
class UpdateCertificateRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. A definition of the certificate to update.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate certificate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $certificate = null;
    /**
     * Required. The update mask applies to the resource. For the `FieldMask`
     * definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $update_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\CertificateManager\V1\Certificate $certificate
     *           Required. A definition of the certificate to update.
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           Required. The update mask applies to the resource. For the `FieldMask`
     *           definition, see
     *           https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Certificatemanager\V1\CertificateManager::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. A definition of the certificate to update.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate certificate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\CertificateManager\V1\Certificate|null
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    public function hasCertificate()
    {
        return isset($this->certificate);
    }

    public function clearCertificate()
    {
        unset($this->certificate);
    }

    /**
     * Required. A definition of the certificate to update.
     *
     * Generated from protobuf field <code>.google.cloud.certificatemanager.v1.Certificate certificate = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\CertificateManager\V1\Certificate $var
     * @return $this
     */
    public function setCertificate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\CertificateManager\V1\Certificate::class);
        $this->certificate = $var;

        return $this;
    }

    /**
     * Required. The update mask applies to the resource. For the `FieldMask`
     * definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * Required. The update mask applies to the resource. For the `FieldMask`
     * definition, see
     * https://developers.google.com/protocol-buffers/docs/reference/google.protobuf#fieldmask.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

}

