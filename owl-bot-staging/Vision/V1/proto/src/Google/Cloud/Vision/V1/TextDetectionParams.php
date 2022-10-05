<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/vision/v1/image_annotator.proto

namespace Google\Cloud\Vision\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Parameters for text detections. This is used to control TEXT_DETECTION and
 * DOCUMENT_TEXT_DETECTION features.
 *
 * Generated from protobuf message <code>google.cloud.vision.v1.TextDetectionParams</code>
 */
class TextDetectionParams extends \Google\Protobuf\Internal\Message
{
    /**
     * By default, Cloud Vision API only includes confidence score for
     * DOCUMENT_TEXT_DETECTION result. Set the flag to true to include confidence
     * score for TEXT_DETECTION as well.
     *
     * Generated from protobuf field <code>bool enable_text_detection_confidence_score = 9;</code>
     */
    protected $enable_text_detection_confidence_score = false;
    /**
     * A list of advanced OCR options to fine-tune OCR behavior.
     *
     * Generated from protobuf field <code>repeated string advanced_ocr_options = 11;</code>
     */
    private $advanced_ocr_options;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enable_text_detection_confidence_score
     *           By default, Cloud Vision API only includes confidence score for
     *           DOCUMENT_TEXT_DETECTION result. Set the flag to true to include confidence
     *           score for TEXT_DETECTION as well.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $advanced_ocr_options
     *           A list of advanced OCR options to fine-tune OCR behavior.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Vision\V1\ImageAnnotator::initOnce();
        parent::__construct($data);
    }

    /**
     * By default, Cloud Vision API only includes confidence score for
     * DOCUMENT_TEXT_DETECTION result. Set the flag to true to include confidence
     * score for TEXT_DETECTION as well.
     *
     * Generated from protobuf field <code>bool enable_text_detection_confidence_score = 9;</code>
     * @return bool
     */
    public function getEnableTextDetectionConfidenceScore()
    {
        return $this->enable_text_detection_confidence_score;
    }

    /**
     * By default, Cloud Vision API only includes confidence score for
     * DOCUMENT_TEXT_DETECTION result. Set the flag to true to include confidence
     * score for TEXT_DETECTION as well.
     *
     * Generated from protobuf field <code>bool enable_text_detection_confidence_score = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnableTextDetectionConfidenceScore($var)
    {
        GPBUtil::checkBool($var);
        $this->enable_text_detection_confidence_score = $var;

        return $this;
    }

    /**
     * A list of advanced OCR options to fine-tune OCR behavior.
     *
     * Generated from protobuf field <code>repeated string advanced_ocr_options = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAdvancedOcrOptions()
    {
        return $this->advanced_ocr_options;
    }

    /**
     * A list of advanced OCR options to fine-tune OCR behavior.
     *
     * Generated from protobuf field <code>repeated string advanced_ocr_options = 11;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAdvancedOcrOptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->advanced_ocr_options = $arr;

        return $this;
    }

}

