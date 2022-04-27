<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/channel/v1/entitlements.proto

namespace Google\Cloud\Channel\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An entitlement is a representation of a customer's ability to use a service.
 *
 * Generated from protobuf message <code>google.cloud.channel.v1.Entitlement</code>
 */
class Entitlement extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of an entitlement in the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $name = '';
    /**
     * Output only. The time at which the entitlement is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The time at which the entitlement is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Required. The offer resource name for which the entitlement is to be
     * created. Takes the form: accounts/{account_id}/offers/{offer_id}.
     *
     * Generated from protobuf field <code>string offer = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $offer = '';
    /**
     * Commitment settings for a commitment-based Offer.
     * Required for commitment based offers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CommitmentSettings commitment_settings = 12;</code>
     */
    private $commitment_settings = null;
    /**
     * Output only. Current provisioning state of the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Entitlement.ProvisioningState provisioning_state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $provisioning_state = 0;
    /**
     * Output only. Service provisioning details for the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ProvisionedService provisioned_service = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $provisioned_service = null;
    /**
     * Output only. Enumerable of all current suspension reasons for an entitlement.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement.SuspensionReason suspension_reasons = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $suspension_reasons;
    /**
     * Optional. This purchase order (PO) information is for resellers to use for their
     * company tracking usage. If a purchaseOrderId value is given, it appears in
     * the API responses and shows up in the invoice. The property accepts up to
     * 80 plain text characters. This is only supported for Google Workspace
     * entitlements.
     *
     * Generated from protobuf field <code>string purchase_order_id = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $purchase_order_id = '';
    /**
     * Output only. Settings for trial offers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TrialSettings trial_settings = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $trial_settings = null;
    /**
     * Association information to other entitlements.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.AssociationInfo association_info = 23;</code>
     */
    private $association_info = null;
    /**
     * Extended entitlement parameters. When creating an entitlement, valid
     * parameter names and values are defined in the
     * [Offer.parameter_definitions][google.cloud.channel.v1.Offer.parameter_definitions].
     * The response may include the following output-only Parameters:
     * - assigned_units: The number of licenses assigned to users.
     * - max_units: The maximum assignable units for a flexible offer.
     * - num_units: The total commitment for commitment-based offers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Parameter parameters = 26;</code>
     */
    private $parameters;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of an entitlement in the form:
     *           accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The time at which the entitlement is created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The time at which the entitlement is updated.
     *     @type string $offer
     *           Required. The offer resource name for which the entitlement is to be
     *           created. Takes the form: accounts/{account_id}/offers/{offer_id}.
     *     @type \Google\Cloud\Channel\V1\CommitmentSettings $commitment_settings
     *           Commitment settings for a commitment-based Offer.
     *           Required for commitment based offers.
     *     @type int $provisioning_state
     *           Output only. Current provisioning state of the entitlement.
     *     @type \Google\Cloud\Channel\V1\ProvisionedService $provisioned_service
     *           Output only. Service provisioning details for the entitlement.
     *     @type int[]|\Google\Protobuf\Internal\RepeatedField $suspension_reasons
     *           Output only. Enumerable of all current suspension reasons for an entitlement.
     *     @type string $purchase_order_id
     *           Optional. This purchase order (PO) information is for resellers to use for their
     *           company tracking usage. If a purchaseOrderId value is given, it appears in
     *           the API responses and shows up in the invoice. The property accepts up to
     *           80 plain text characters. This is only supported for Google Workspace
     *           entitlements.
     *     @type \Google\Cloud\Channel\V1\TrialSettings $trial_settings
     *           Output only. Settings for trial offers.
     *     @type \Google\Cloud\Channel\V1\AssociationInfo $association_info
     *           Association information to other entitlements.
     *     @type \Google\Cloud\Channel\V1\Parameter[]|\Google\Protobuf\Internal\RepeatedField $parameters
     *           Extended entitlement parameters. When creating an entitlement, valid
     *           parameter names and values are defined in the
     *           [Offer.parameter_definitions][google.cloud.channel.v1.Offer.parameter_definitions].
     *           The response may include the following output-only Parameters:
     *           - assigned_units: The number of licenses assigned to users.
     *           - max_units: The maximum assignable units for a flexible offer.
     *           - num_units: The total commitment for commitment-based offers.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Channel\V1\Entitlements::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of an entitlement in the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of an entitlement in the form:
     * accounts/{account_id}/customers/{customer_id}/entitlements/{entitlement_id}.
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
     * Output only. The time at which the entitlement is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the entitlement is created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 5 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the entitlement is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The time at which the entitlement is updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 6 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Required. The offer resource name for which the entitlement is to be
     * created. Takes the form: accounts/{account_id}/offers/{offer_id}.
     *
     * Generated from protobuf field <code>string offer = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getOffer()
    {
        return $this->offer;
    }

    /**
     * Required. The offer resource name for which the entitlement is to be
     * created. Takes the form: accounts/{account_id}/offers/{offer_id}.
     *
     * Generated from protobuf field <code>string offer = 8 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setOffer($var)
    {
        GPBUtil::checkString($var, True);
        $this->offer = $var;

        return $this;
    }

    /**
     * Commitment settings for a commitment-based Offer.
     * Required for commitment based offers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CommitmentSettings commitment_settings = 12;</code>
     * @return \Google\Cloud\Channel\V1\CommitmentSettings|null
     */
    public function getCommitmentSettings()
    {
        return $this->commitment_settings;
    }

    public function hasCommitmentSettings()
    {
        return isset($this->commitment_settings);
    }

    public function clearCommitmentSettings()
    {
        unset($this->commitment_settings);
    }

    /**
     * Commitment settings for a commitment-based Offer.
     * Required for commitment based offers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.CommitmentSettings commitment_settings = 12;</code>
     * @param \Google\Cloud\Channel\V1\CommitmentSettings $var
     * @return $this
     */
    public function setCommitmentSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\CommitmentSettings::class);
        $this->commitment_settings = $var;

        return $this;
    }

    /**
     * Output only. Current provisioning state of the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Entitlement.ProvisioningState provisioning_state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getProvisioningState()
    {
        return $this->provisioning_state;
    }

    /**
     * Output only. Current provisioning state of the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.Entitlement.ProvisioningState provisioning_state = 13 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setProvisioningState($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\Channel\V1\Entitlement\ProvisioningState::class);
        $this->provisioning_state = $var;

        return $this;
    }

    /**
     * Output only. Service provisioning details for the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ProvisionedService provisioned_service = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Channel\V1\ProvisionedService|null
     */
    public function getProvisionedService()
    {
        return $this->provisioned_service;
    }

    public function hasProvisionedService()
    {
        return isset($this->provisioned_service);
    }

    public function clearProvisionedService()
    {
        unset($this->provisioned_service);
    }

    /**
     * Output only. Service provisioning details for the entitlement.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.ProvisionedService provisioned_service = 16 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Channel\V1\ProvisionedService $var
     * @return $this
     */
    public function setProvisionedService($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\ProvisionedService::class);
        $this->provisioned_service = $var;

        return $this;
    }

    /**
     * Output only. Enumerable of all current suspension reasons for an entitlement.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement.SuspensionReason suspension_reasons = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSuspensionReasons()
    {
        return $this->suspension_reasons;
    }

    /**
     * Output only. Enumerable of all current suspension reasons for an entitlement.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Entitlement.SuspensionReason suspension_reasons = 18 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSuspensionReasons($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\Channel\V1\Entitlement\SuspensionReason::class);
        $this->suspension_reasons = $arr;

        return $this;
    }

    /**
     * Optional. This purchase order (PO) information is for resellers to use for their
     * company tracking usage. If a purchaseOrderId value is given, it appears in
     * the API responses and shows up in the invoice. The property accepts up to
     * 80 plain text characters. This is only supported for Google Workspace
     * entitlements.
     *
     * Generated from protobuf field <code>string purchase_order_id = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return string
     */
    public function getPurchaseOrderId()
    {
        return $this->purchase_order_id;
    }

    /**
     * Optional. This purchase order (PO) information is for resellers to use for their
     * company tracking usage. If a purchaseOrderId value is given, it appears in
     * the API responses and shows up in the invoice. The property accepts up to
     * 80 plain text characters. This is only supported for Google Workspace
     * entitlements.
     *
     * Generated from protobuf field <code>string purchase_order_id = 19 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param string $var
     * @return $this
     */
    public function setPurchaseOrderId($var)
    {
        GPBUtil::checkString($var, True);
        $this->purchase_order_id = $var;

        return $this;
    }

    /**
     * Output only. Settings for trial offers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TrialSettings trial_settings = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Cloud\Channel\V1\TrialSettings|null
     */
    public function getTrialSettings()
    {
        return $this->trial_settings;
    }

    public function hasTrialSettings()
    {
        return isset($this->trial_settings);
    }

    public function clearTrialSettings()
    {
        unset($this->trial_settings);
    }

    /**
     * Output only. Settings for trial offers.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.TrialSettings trial_settings = 21 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Cloud\Channel\V1\TrialSettings $var
     * @return $this
     */
    public function setTrialSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\TrialSettings::class);
        $this->trial_settings = $var;

        return $this;
    }

    /**
     * Association information to other entitlements.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.AssociationInfo association_info = 23;</code>
     * @return \Google\Cloud\Channel\V1\AssociationInfo|null
     */
    public function getAssociationInfo()
    {
        return $this->association_info;
    }

    public function hasAssociationInfo()
    {
        return isset($this->association_info);
    }

    public function clearAssociationInfo()
    {
        unset($this->association_info);
    }

    /**
     * Association information to other entitlements.
     *
     * Generated from protobuf field <code>.google.cloud.channel.v1.AssociationInfo association_info = 23;</code>
     * @param \Google\Cloud\Channel\V1\AssociationInfo $var
     * @return $this
     */
    public function setAssociationInfo($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Channel\V1\AssociationInfo::class);
        $this->association_info = $var;

        return $this;
    }

    /**
     * Extended entitlement parameters. When creating an entitlement, valid
     * parameter names and values are defined in the
     * [Offer.parameter_definitions][google.cloud.channel.v1.Offer.parameter_definitions].
     * The response may include the following output-only Parameters:
     * - assigned_units: The number of licenses assigned to users.
     * - max_units: The maximum assignable units for a flexible offer.
     * - num_units: The total commitment for commitment-based offers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Parameter parameters = 26;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * Extended entitlement parameters. When creating an entitlement, valid
     * parameter names and values are defined in the
     * [Offer.parameter_definitions][google.cloud.channel.v1.Offer.parameter_definitions].
     * The response may include the following output-only Parameters:
     * - assigned_units: The number of licenses assigned to users.
     * - max_units: The maximum assignable units for a flexible offer.
     * - num_units: The total commitment for commitment-based offers.
     *
     * Generated from protobuf field <code>repeated .google.cloud.channel.v1.Parameter parameters = 26;</code>
     * @param \Google\Cloud\Channel\V1\Parameter[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setParameters($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Channel\V1\Parameter::class);
        $this->parameters = $arr;

        return $this;
    }

}

