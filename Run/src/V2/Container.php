<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/run/v2/k8s.min.proto

namespace Google\Cloud\Run\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A single application container.
 * This specifies both the container to run, the command to run in the container
 * and the arguments to supply to it.
 * Note that additional arguments may be supplied by the system to the container
 * at runtime.
 *
 * Generated from protobuf message <code>google.cloud.run.v2.Container</code>
 */
class Container extends \Google\Protobuf\Internal\Message
{
    /**
     * Name of the container specified as a DNS_LABEL.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Required. URL of the Container image in Google Container Registry or Google Artifact
     * Registry. More info: https://kubernetes.io/docs/concepts/containers/images
     *
     * Generated from protobuf field <code>string image = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $image = '';
    /**
     * Entrypoint array. Not executed within a shell.
     * The docker image's ENTRYPOINT is used if this is not provided.
     * Variable references $(VAR_NAME) are expanded using the container's
     * environment. If a variable cannot be resolved, the reference in the input
     * string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     * double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not.
     * More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *
     * Generated from protobuf field <code>repeated string command = 3;</code>
     */
    private $command;
    /**
     * Arguments to the entrypoint.
     * The docker image's CMD is used if this is not provided.
     * Variable references $(VAR_NAME) are expanded using the container's
     * environment. If a variable cannot be resolved, the reference in the input
     * string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     * double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not.
     * More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *
     * Generated from protobuf field <code>repeated string args = 4;</code>
     */
    private $args;
    /**
     * List of environment variables to set in the container.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.EnvVar env = 5;</code>
     */
    private $env;
    /**
     * Compute Resource requirements by this container.
     * More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ResourceRequirements resources = 6;</code>
     */
    private $resources = null;
    /**
     * List of ports to expose from the container. Only a single port can be
     * specified. The specified ports must be listening on all interfaces
     * (0.0.0.0) within the container to be accessible.
     * If omitted, a port number will be chosen and passed to the container
     * through the PORT environment variable for the container to listen on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.ContainerPort ports = 7;</code>
     */
    private $ports;
    /**
     * Volume to mount into the container's filesystem.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.VolumeMount volume_mounts = 8;</code>
     */
    private $volume_mounts;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Name of the container specified as a DNS_LABEL.
     *     @type string $image
     *           Required. URL of the Container image in Google Container Registry or Google Artifact
     *           Registry. More info: https://kubernetes.io/docs/concepts/containers/images
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $command
     *           Entrypoint array. Not executed within a shell.
     *           The docker image's ENTRYPOINT is used if this is not provided.
     *           Variable references $(VAR_NAME) are expanded using the container's
     *           environment. If a variable cannot be resolved, the reference in the input
     *           string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     *           double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     *           regardless of whether the variable exists or not.
     *           More info:
     *           https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $args
     *           Arguments to the entrypoint.
     *           The docker image's CMD is used if this is not provided.
     *           Variable references $(VAR_NAME) are expanded using the container's
     *           environment. If a variable cannot be resolved, the reference in the input
     *           string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     *           double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     *           regardless of whether the variable exists or not.
     *           More info:
     *           https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *     @type array<\Google\Cloud\Run\V2\EnvVar>|\Google\Protobuf\Internal\RepeatedField $env
     *           List of environment variables to set in the container.
     *     @type \Google\Cloud\Run\V2\ResourceRequirements $resources
     *           Compute Resource requirements by this container.
     *           More info:
     *           https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *     @type array<\Google\Cloud\Run\V2\ContainerPort>|\Google\Protobuf\Internal\RepeatedField $ports
     *           List of ports to expose from the container. Only a single port can be
     *           specified. The specified ports must be listening on all interfaces
     *           (0.0.0.0) within the container to be accessible.
     *           If omitted, a port number will be chosen and passed to the container
     *           through the PORT environment variable for the container to listen on.
     *     @type array<\Google\Cloud\Run\V2\VolumeMount>|\Google\Protobuf\Internal\RepeatedField $volume_mounts
     *           Volume to mount into the container's filesystem.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Run\V2\K8SMin::initOnce();
        parent::__construct($data);
    }

    /**
     * Name of the container specified as a DNS_LABEL.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Name of the container specified as a DNS_LABEL.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Required. URL of the Container image in Google Container Registry or Google Artifact
     * Registry. More info: https://kubernetes.io/docs/concepts/containers/images
     *
     * Generated from protobuf field <code>string image = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Required. URL of the Container image in Google Container Registry or Google Artifact
     * Registry. More info: https://kubernetes.io/docs/concepts/containers/images
     *
     * Generated from protobuf field <code>string image = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setImage($var)
    {
        GPBUtil::checkString($var, True);
        $this->image = $var;

        return $this;
    }

    /**
     * Entrypoint array. Not executed within a shell.
     * The docker image's ENTRYPOINT is used if this is not provided.
     * Variable references $(VAR_NAME) are expanded using the container's
     * environment. If a variable cannot be resolved, the reference in the input
     * string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     * double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not.
     * More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *
     * Generated from protobuf field <code>repeated string command = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * Entrypoint array. Not executed within a shell.
     * The docker image's ENTRYPOINT is used if this is not provided.
     * Variable references $(VAR_NAME) are expanded using the container's
     * environment. If a variable cannot be resolved, the reference in the input
     * string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     * double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not.
     * More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *
     * Generated from protobuf field <code>repeated string command = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCommand($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->command = $arr;

        return $this;
    }

    /**
     * Arguments to the entrypoint.
     * The docker image's CMD is used if this is not provided.
     * Variable references $(VAR_NAME) are expanded using the container's
     * environment. If a variable cannot be resolved, the reference in the input
     * string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     * double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not.
     * More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *
     * Generated from protobuf field <code>repeated string args = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getArgs()
    {
        return $this->args;
    }

    /**
     * Arguments to the entrypoint.
     * The docker image's CMD is used if this is not provided.
     * Variable references $(VAR_NAME) are expanded using the container's
     * environment. If a variable cannot be resolved, the reference in the input
     * string will be unchanged. The $(VAR_NAME) syntax can be escaped with a
     * double $$, ie: $$(VAR_NAME). Escaped references will never be expanded,
     * regardless of whether the variable exists or not.
     * More info:
     * https://kubernetes.io/docs/tasks/inject-data-application/define-command-argument-container/#running-a-command-in-a-shell
     *
     * Generated from protobuf field <code>repeated string args = 4;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setArgs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->args = $arr;

        return $this;
    }

    /**
     * List of environment variables to set in the container.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.EnvVar env = 5;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEnv()
    {
        return $this->env;
    }

    /**
     * List of environment variables to set in the container.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.EnvVar env = 5;</code>
     * @param array<\Google\Cloud\Run\V2\EnvVar>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEnv($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Run\V2\EnvVar::class);
        $this->env = $arr;

        return $this;
    }

    /**
     * Compute Resource requirements by this container.
     * More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ResourceRequirements resources = 6;</code>
     * @return \Google\Cloud\Run\V2\ResourceRequirements|null
     */
    public function getResources()
    {
        return $this->resources;
    }

    public function hasResources()
    {
        return isset($this->resources);
    }

    public function clearResources()
    {
        unset($this->resources);
    }

    /**
     * Compute Resource requirements by this container.
     * More info:
     * https://kubernetes.io/docs/concepts/storage/persistent-volumes#resources
     *
     * Generated from protobuf field <code>.google.cloud.run.v2.ResourceRequirements resources = 6;</code>
     * @param \Google\Cloud\Run\V2\ResourceRequirements $var
     * @return $this
     */
    public function setResources($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Run\V2\ResourceRequirements::class);
        $this->resources = $var;

        return $this;
    }

    /**
     * List of ports to expose from the container. Only a single port can be
     * specified. The specified ports must be listening on all interfaces
     * (0.0.0.0) within the container to be accessible.
     * If omitted, a port number will be chosen and passed to the container
     * through the PORT environment variable for the container to listen on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.ContainerPort ports = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getPorts()
    {
        return $this->ports;
    }

    /**
     * List of ports to expose from the container. Only a single port can be
     * specified. The specified ports must be listening on all interfaces
     * (0.0.0.0) within the container to be accessible.
     * If omitted, a port number will be chosen and passed to the container
     * through the PORT environment variable for the container to listen on.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.ContainerPort ports = 7;</code>
     * @param array<\Google\Cloud\Run\V2\ContainerPort>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setPorts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Run\V2\ContainerPort::class);
        $this->ports = $arr;

        return $this;
    }

    /**
     * Volume to mount into the container's filesystem.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.VolumeMount volume_mounts = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getVolumeMounts()
    {
        return $this->volume_mounts;
    }

    /**
     * Volume to mount into the container's filesystem.
     *
     * Generated from protobuf field <code>repeated .google.cloud.run.v2.VolumeMount volume_mounts = 8;</code>
     * @param array<\Google\Cloud\Run\V2\VolumeMount>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setVolumeMounts($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Run\V2\VolumeMount::class);
        $this->volume_mounts = $arr;

        return $this;
    }

}

