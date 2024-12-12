<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/type.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Field;

use UnexpectedValueException;
/**
 * Whether a field is optional, required, or repeated.
 *
 * Protobuf type <code>google.protobuf.Field.Cardinality</code>
 */
class Cardinality
{
    /**
     * For fields with unknown cardinality.
     *
     * Generated from protobuf enum <code>CARDINALITY_UNKNOWN = 0;</code>
     */
    const CARDINALITY_UNKNOWN = 0;
    /**
     * For optional fields.
     *
     * Generated from protobuf enum <code>CARDINALITY_OPTIONAL = 1;</code>
     */
    const CARDINALITY_OPTIONAL = 1;
    /**
     * For required fields. Proto2 syntax only.
     *
     * Generated from protobuf enum <code>CARDINALITY_REQUIRED = 2;</code>
     */
    const CARDINALITY_REQUIRED = 2;
    /**
     * For repeated fields.
     *
     * Generated from protobuf enum <code>CARDINALITY_REPEATED = 3;</code>
     */
    const CARDINALITY_REPEATED = 3;
    private static $valueToName = [self::CARDINALITY_UNKNOWN => 'CARDINALITY_UNKNOWN', self::CARDINALITY_OPTIONAL => 'CARDINALITY_OPTIONAL', self::CARDINALITY_REQUIRED => 'CARDINALITY_REQUIRED', self::CARDINALITY_REPEATED => 'CARDINALITY_REPEATED'];
    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(\sprintf('Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }
    public static function value($name)
    {
        $const = __CLASS__ . '::' . \strtoupper($name);
        if (!\defined($const)) {
            throw new UnexpectedValueException(\sprintf('Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return \constant($const);
    }
}
// Adding a class alias for backwards compatibility with the previous class name.
\class_alias(Cardinality::class, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Field_Cardinality::class);
