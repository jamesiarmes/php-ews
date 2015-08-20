<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SerializableTimeZoneTimeType
 *
 *
 * XSD Type: SerializableTimeZoneTime
 *
 * @method integer getBias()
 * @method SerializableTimeZoneTimeType setBias(integer $bias)
 * @method string getTime()
 * @method SerializableTimeZoneTimeType setTime(string $time)
 * @method integer getDayOrder()
 * @method SerializableTimeZoneTimeType setDayOrder(integer $dayOrder)
 * @method integer getMonth()
 * @method SerializableTimeZoneTimeType setMonth(integer $month)
 * @method string getDayOfWeek()
 * @method SerializableTimeZoneTimeType setDayOfWeek(string $dayOfWeek)
 * @method string getYear()
 * @method SerializableTimeZoneTimeType setYear(string $year)
 */
class SerializableTimeZoneTimeType extends Type
{

    /**
     * @var integer
     */
    protected $bias = null;

    /**
     * @var string
     */
    protected $time = null;

    /**
     * @var integer
     */
    protected $dayOrder = null;

    /**
     * @var integer
     */
    protected $month = null;

    /**
     * @var string
     */
    protected $dayOfWeek = null;

    /**
     * @var string
     */
    protected $year = null;
}
