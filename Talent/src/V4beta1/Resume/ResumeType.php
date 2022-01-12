<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/talent/v4beta1/profile.proto

namespace Google\Cloud\Talent\V4beta1\Resume;

use UnexpectedValueException;

/**
 * The format of a structured resume.
 *
 * Protobuf type <code>google.cloud.talent.v4beta1.Resume.ResumeType</code>
 */
class ResumeType
{
    /**
     * Default value.
     *
     * Generated from protobuf enum <code>RESUME_TYPE_UNSPECIFIED = 0;</code>
     */
    const RESUME_TYPE_UNSPECIFIED = 0;
    /**
     * The profile contents in HR-XML format.
     * See https://schemas.liquid-technologies.com/hr-xml/2007-04-15/ for more
     * information about Human Resources XML.
     *
     * Generated from protobuf enum <code>HRXML = 1;</code>
     */
    const HRXML = 1;
    /**
     * Resume type not specified.
     *
     * Generated from protobuf enum <code>OTHER_RESUME_TYPE = 2;</code>
     */
    const OTHER_RESUME_TYPE = 2;

    private static $valueToName = [
        self::RESUME_TYPE_UNSPECIFIED => 'RESUME_TYPE_UNSPECIFIED',
        self::HRXML => 'HRXML',
        self::OTHER_RESUME_TYPE => 'OTHER_RESUME_TYPE',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}


