<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SerializableTimeZoneTimeType
 *
 *
 * XSD Type: SerializableTimeZoneTime
 *
 * @method SerializableTimeZoneTimeType getBias()
 * @method SerializableTimeZoneTimeType setBias(integer $bias)
 * @method SerializableTimeZoneTimeType getTime()
 * @method SerializableTimeZoneTimeType setTime(string $time)
 * @method SerializableTimeZoneTimeType getDayOrder()
 * @method SerializableTimeZoneTimeType setDayOrder(integer $dayOrder)
 * @method SerializableTimeZoneTimeType getMonth()
 * @method SerializableTimeZoneTimeType setMonth(integer $month)
 * @method SerializableTimeZoneTimeType getDayOfWeek()
 * @method SerializableTimeZoneTimeType setDayOfWeek(string $dayOfWeek)
 * @method SerializableTimeZoneTimeType getYear()
 * @method SerializableTimeZoneTimeType setYear(string $year)
 */
class SerializableTimeZoneTimeType extends Type
{

    /**
     * @property integer $bias
     */
    protected $bias = null;

    /**
     * @property string $time
     */
    protected $time = null;

    /**
     * @property integer $dayOrder
     */
    protected $dayOrder = null;

    /**
     * @property integer $month
     */
    protected $month = null;

    /**
     * @property string $dayOfWeek
     */
    protected $dayOfWeek = null;

    /**
     * @property string $year
     */
    protected $year = null;


}

