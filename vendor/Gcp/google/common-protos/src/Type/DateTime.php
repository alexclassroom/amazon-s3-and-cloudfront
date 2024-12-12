<?php

# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/type/datetime.proto
namespace DeliciousBrains\WP_Offload_Media\Gcp\Google\Type;

use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBType;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\RepeatedField;
use DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\GPBUtil;
/**
 * Represents civil time (or occasionally physical time).
 * This type can represent a civil time in one of a few possible ways:
 *  * When utc_offset is set and time_zone is unset: a civil time on a calendar
 *    day with a particular offset from UTC.
 *  * When time_zone is set and utc_offset is unset: a civil time on a calendar
 *    day in a particular time zone.
 *  * When neither time_zone nor utc_offset is set: a civil time on a calendar
 *    day in local time.
 * The date is relative to the Proleptic Gregorian Calendar.
 * If year is 0, the DateTime is considered not to have a specific year. month
 * and day must have valid, non-zero values.
 * This type may also be used to represent a physical time if all the date and
 * time fields are set and either case of the `time_offset` oneof is set.
 * Consider using `Timestamp` message for physical time instead. If your use
 * case also would like to store the user's timezone, that can be done in
 * another field.
 * This type is more flexible than some applications may want. Make sure to
 * document and validate your application's limitations.
 *
 * Generated from protobuf message <code>google.type.DateTime</code>
 */
class DateTime extends \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Internal\Message
{
    /**
     * Optional. Year of date. Must be from 1 to 9999, or 0 if specifying a
     * datetime without a year.
     *
     * Generated from protobuf field <code>int32 year = 1;</code>
     */
    protected $year = 0;
    /**
     * Required. Month of year. Must be from 1 to 12.
     *
     * Generated from protobuf field <code>int32 month = 2;</code>
     */
    protected $month = 0;
    /**
     * Required. Day of month. Must be from 1 to 31 and valid for the year and
     * month.
     *
     * Generated from protobuf field <code>int32 day = 3;</code>
     */
    protected $day = 0;
    /**
     * Required. Hours of day in 24 hour format. Should be from 0 to 23. An API
     * may choose to allow the value "24:00:00" for scenarios like business
     * closing time.
     *
     * Generated from protobuf field <code>int32 hours = 4;</code>
     */
    protected $hours = 0;
    /**
     * Required. Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 5;</code>
     */
    protected $minutes = 0;
    /**
     * Required. Seconds of minutes of the time. Must normally be from 0 to 59. An
     * API may allow the value 60 if it allows leap-seconds.
     *
     * Generated from protobuf field <code>int32 seconds = 6;</code>
     */
    protected $seconds = 0;
    /**
     * Required. Fractions of seconds in nanoseconds. Must be from 0 to
     * 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 7;</code>
     */
    protected $nanos = 0;
    protected $time_offset;
    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $year
     *           Optional. Year of date. Must be from 1 to 9999, or 0 if specifying a
     *           datetime without a year.
     *     @type int $month
     *           Required. Month of year. Must be from 1 to 12.
     *     @type int $day
     *           Required. Day of month. Must be from 1 to 31 and valid for the year and
     *           month.
     *     @type int $hours
     *           Required. Hours of day in 24 hour format. Should be from 0 to 23. An API
     *           may choose to allow the value "24:00:00" for scenarios like business
     *           closing time.
     *     @type int $minutes
     *           Required. Minutes of hour of day. Must be from 0 to 59.
     *     @type int $seconds
     *           Required. Seconds of minutes of the time. Must normally be from 0 to 59. An
     *           API may allow the value 60 if it allows leap-seconds.
     *     @type int $nanos
     *           Required. Fractions of seconds in nanoseconds. Must be from 0 to
     *           999,999,999.
     *     @type \Google\Protobuf\Duration $utc_offset
     *           UTC offset. Must be whole seconds, between -18 hours and +18 hours.
     *           For example, a UTC offset of -4:00 would be represented as
     *           { seconds: -14400 }.
     *     @type \Google\Type\TimeZone $time_zone
     *           Time zone.
     * }
     */
    public function __construct($data = NULL)
    {
        \DeliciousBrains\WP_Offload_Media\Gcp\GPBMetadata\Google\Type\Datetime::initOnce();
        parent::__construct($data);
    }
    /**
     * Optional. Year of date. Must be from 1 to 9999, or 0 if specifying a
     * datetime without a year.
     *
     * Generated from protobuf field <code>int32 year = 1;</code>
     * @return int
     */
    public function getYear()
    {
        return $this->year;
    }
    /**
     * Optional. Year of date. Must be from 1 to 9999, or 0 if specifying a
     * datetime without a year.
     *
     * Generated from protobuf field <code>int32 year = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setYear($var)
    {
        GPBUtil::checkInt32($var);
        $this->year = $var;
        return $this;
    }
    /**
     * Required. Month of year. Must be from 1 to 12.
     *
     * Generated from protobuf field <code>int32 month = 2;</code>
     * @return int
     */
    public function getMonth()
    {
        return $this->month;
    }
    /**
     * Required. Month of year. Must be from 1 to 12.
     *
     * Generated from protobuf field <code>int32 month = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setMonth($var)
    {
        GPBUtil::checkInt32($var);
        $this->month = $var;
        return $this;
    }
    /**
     * Required. Day of month. Must be from 1 to 31 and valid for the year and
     * month.
     *
     * Generated from protobuf field <code>int32 day = 3;</code>
     * @return int
     */
    public function getDay()
    {
        return $this->day;
    }
    /**
     * Required. Day of month. Must be from 1 to 31 and valid for the year and
     * month.
     *
     * Generated from protobuf field <code>int32 day = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setDay($var)
    {
        GPBUtil::checkInt32($var);
        $this->day = $var;
        return $this;
    }
    /**
     * Required. Hours of day in 24 hour format. Should be from 0 to 23. An API
     * may choose to allow the value "24:00:00" for scenarios like business
     * closing time.
     *
     * Generated from protobuf field <code>int32 hours = 4;</code>
     * @return int
     */
    public function getHours()
    {
        return $this->hours;
    }
    /**
     * Required. Hours of day in 24 hour format. Should be from 0 to 23. An API
     * may choose to allow the value "24:00:00" for scenarios like business
     * closing time.
     *
     * Generated from protobuf field <code>int32 hours = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHours($var)
    {
        GPBUtil::checkInt32($var);
        $this->hours = $var;
        return $this;
    }
    /**
     * Required. Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 5;</code>
     * @return int
     */
    public function getMinutes()
    {
        return $this->minutes;
    }
    /**
     * Required. Minutes of hour of day. Must be from 0 to 59.
     *
     * Generated from protobuf field <code>int32 minutes = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMinutes($var)
    {
        GPBUtil::checkInt32($var);
        $this->minutes = $var;
        return $this;
    }
    /**
     * Required. Seconds of minutes of the time. Must normally be from 0 to 59. An
     * API may allow the value 60 if it allows leap-seconds.
     *
     * Generated from protobuf field <code>int32 seconds = 6;</code>
     * @return int
     */
    public function getSeconds()
    {
        return $this->seconds;
    }
    /**
     * Required. Seconds of minutes of the time. Must normally be from 0 to 59. An
     * API may allow the value 60 if it allows leap-seconds.
     *
     * Generated from protobuf field <code>int32 seconds = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSeconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->seconds = $var;
        return $this;
    }
    /**
     * Required. Fractions of seconds in nanoseconds. Must be from 0 to
     * 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 7;</code>
     * @return int
     */
    public function getNanos()
    {
        return $this->nanos;
    }
    /**
     * Required. Fractions of seconds in nanoseconds. Must be from 0 to
     * 999,999,999.
     *
     * Generated from protobuf field <code>int32 nanos = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setNanos($var)
    {
        GPBUtil::checkInt32($var);
        $this->nanos = $var;
        return $this;
    }
    /**
     * UTC offset. Must be whole seconds, between -18 hours and +18 hours.
     * For example, a UTC offset of -4:00 would be represented as
     * { seconds: -14400 }.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration utc_offset = 8;</code>
     * @return \Google\Protobuf\Duration|null
     */
    public function getUtcOffset()
    {
        return $this->readOneof(8);
    }
    public function hasUtcOffset()
    {
        return $this->hasOneof(8);
    }
    /**
     * UTC offset. Must be whole seconds, between -18 hours and +18 hours.
     * For example, a UTC offset of -4:00 would be represented as
     * { seconds: -14400 }.
     *
     * Generated from protobuf field <code>.google.protobuf.Duration utc_offset = 8;</code>
     * @param \Google\Protobuf\Duration $var
     * @return $this
     */
    public function setUtcOffset($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Protobuf\Duration::class);
        $this->writeOneof(8, $var);
        return $this;
    }
    /**
     * Time zone.
     *
     * Generated from protobuf field <code>.google.type.TimeZone time_zone = 9;</code>
     * @return \Google\Type\TimeZone|null
     */
    public function getTimeZone()
    {
        return $this->readOneof(9);
    }
    public function hasTimeZone()
    {
        return $this->hasOneof(9);
    }
    /**
     * Time zone.
     *
     * Generated from protobuf field <code>.google.type.TimeZone time_zone = 9;</code>
     * @param \Google\Type\TimeZone $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkMessage($var, \DeliciousBrains\WP_Offload_Media\Gcp\Google\Type\TimeZone::class);
        $this->writeOneof(9, $var);
        return $this;
    }
    /**
     * @return string
     */
    public function getTimeOffset()
    {
        return $this->whichOneof("time_offset");
    }
}