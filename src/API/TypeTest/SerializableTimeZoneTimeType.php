<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing SerializableTimeZoneTimeType
 *
 *
 * XSD Type: SerializableTimeZoneTime
 *
 * @method SerializableTimeZoneTimeType getBias()
 * @method SerializableTimeZoneTimeType setBias($bias)
 * @method SerializableTimeZoneTimeType getTime()
 * @method SerializableTimeZoneTimeType setTime($time)
 * @method SerializableTimeZoneTimeType getDayOrder()
 * @method SerializableTimeZoneTimeType setDayOrder($dayOrder)
 * @method SerializableTimeZoneTimeType getMonth()
 * @method SerializableTimeZoneTimeType setMonth($month)
 * @method SerializableTimeZoneTimeType getDayOfWeek()
 * @method SerializableTimeZoneTimeType setDayOfWeek($dayOfWeek)
 * @method SerializableTimeZoneTimeType getYear()
 * @method SerializableTimeZoneTimeType setYear($year)
 */
class SerializableTimeZoneTimeType extends TypeTest
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

