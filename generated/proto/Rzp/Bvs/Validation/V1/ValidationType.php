<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: platform/bvs/validation/v1/validation.proto

namespace Rzp\Bvs\Validation\V1;

use UnexpectedValueException;

/**
 * Protobuf type <code>platform.bvs.validation.v1.ValidationType</code>
 */
class ValidationType
{
    /**
     * Generated from protobuf enum <code>OCR_ACCURACY_VALIDATION = 0;</code>
     */
    const OCR_ACCURACY_VALIDATION = 0;
    /**
     * Generated from protobuf enum <code>EXACT_MATCH_VALIDATION = 1;</code>
     */
    const EXACT_MATCH_VALIDATION = 1;
    /**
     * Generated from protobuf enum <code>FUZZY_MATCH_VALIDATION = 2;</code>
     */
    const FUZZY_MATCH_VALIDATION = 2;
    /**
     * Generated from protobuf enum <code>ADDRESS_MATCH_VALIDATION = 3;</code>
     */
    const ADDRESS_MATCH_VALIDATION = 3;

    private static $valueToName = [
        self::OCR_ACCURACY_VALIDATION => 'OCR_ACCURACY_VALIDATION',
        self::EXACT_MATCH_VALIDATION => 'EXACT_MATCH_VALIDATION',
        self::FUZZY_MATCH_VALIDATION => 'FUZZY_MATCH_VALIDATION',
        self::ADDRESS_MATCH_VALIDATION => 'ADDRESS_MATCH_VALIDATION',
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
