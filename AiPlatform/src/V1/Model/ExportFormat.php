<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/aiplatform/v1/model.proto

namespace Google\Cloud\AIPlatform\V1\Model;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents export format supported by the Model.
 * All formats export to Google Cloud Storage.
 *
 * Generated from protobuf message <code>google.cloud.aiplatform.v1.Model.ExportFormat</code>
 */
class ExportFormat extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The ID of the export format.
     * The possible format IDs are:
     * * `tflite`
     * Used for Android mobile devices.
     * * `edgetpu-tflite`
     * Used for [Edge TPU](https://cloud.google.com/edge-tpu/) devices.
     * * `tf-saved-model`
     * A tensorflow model in SavedModel format.
     * * `tf-js`
     * A [TensorFlow.js](https://www.tensorflow.org/js) model that can be used
     * in the browser and in Node.js using JavaScript.
     * * `core-ml`
     * Used for iOS mobile devices.
     * * `custom-trained`
     * A Model that was uploaded or trained by custom code.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $id = '';
    /**
     * Output only. The content of this Model that may be exported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Model.ExportFormat.ExportableContent exportable_contents = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $exportable_contents;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *           Output only. The ID of the export format.
     *           The possible format IDs are:
     *           * `tflite`
     *           Used for Android mobile devices.
     *           * `edgetpu-tflite`
     *           Used for [Edge TPU](https://cloud.google.com/edge-tpu/) devices.
     *           * `tf-saved-model`
     *           A tensorflow model in SavedModel format.
     *           * `tf-js`
     *           A [TensorFlow.js](https://www.tensorflow.org/js) model that can be used
     *           in the browser and in Node.js using JavaScript.
     *           * `core-ml`
     *           Used for iOS mobile devices.
     *           * `custom-trained`
     *           A Model that was uploaded or trained by custom code.
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $exportable_contents
     *           Output only. The content of this Model that may be exported.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Aiplatform\V1\Model::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The ID of the export format.
     * The possible format IDs are:
     * * `tflite`
     * Used for Android mobile devices.
     * * `edgetpu-tflite`
     * Used for [Edge TPU](https://cloud.google.com/edge-tpu/) devices.
     * * `tf-saved-model`
     * A tensorflow model in SavedModel format.
     * * `tf-js`
     * A [TensorFlow.js](https://www.tensorflow.org/js) model that can be used
     * in the browser and in Node.js using JavaScript.
     * * `core-ml`
     * Used for iOS mobile devices.
     * * `custom-trained`
     * A Model that was uploaded or trained by custom code.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Output only. The ID of the export format.
     * The possible format IDs are:
     * * `tflite`
     * Used for Android mobile devices.
     * * `edgetpu-tflite`
     * Used for [Edge TPU](https://cloud.google.com/edge-tpu/) devices.
     * * `tf-saved-model`
     * A tensorflow model in SavedModel format.
     * * `tf-js`
     * A [TensorFlow.js](https://www.tensorflow.org/js) model that can be used
     * in the browser and in Node.js using JavaScript.
     * * `core-ml`
     * Used for iOS mobile devices.
     * * `custom-trained`
     * A Model that was uploaded or trained by custom code.
     *
     * Generated from protobuf field <code>string id = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

    /**
     * Output only. The content of this Model that may be exported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Model.ExportFormat.ExportableContent exportable_contents = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExportableContents()
    {
        return $this->exportable_contents;
    }

    /**
     * Output only. The content of this Model that may be exported.
     *
     * Generated from protobuf field <code>repeated .google.cloud.aiplatform.v1.Model.ExportFormat.ExportableContent exportable_contents = 2 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExportableContents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::ENUM, \Google\Cloud\AIPlatform\V1\Model\ExportFormat\ExportableContent::class);
        $this->exportable_contents = $arr;

        return $this;
    }

}


