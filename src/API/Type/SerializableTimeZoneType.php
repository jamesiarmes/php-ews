<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing SerializableTimeZoneType
 *
 *
 * XSD Type: SerializableTimeZone
 *
 * @method SerializableTimeZoneType getBias()
 * @method SerializableTimeZoneType setBias(integer $bias)
 * @method SerializableTimeZoneType getStandardTime()
 * @method SerializableTimeZoneType setStandardTime(SerializableTimeZoneTimeType $standardTime)
 * @method SerializableTimeZoneType getDaylightTime()
 * @method SerializableTimeZoneType setDaylightTime(SerializableTimeZoneTimeType $daylightTime)
 */
class SerializableTimeZoneType extends Type
{

    /**
     * @property integer $bias
     */
    protected $bias = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SerializableTimeZoneTimeType $standardTime
     */
    protected $standardTime = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SerializableTimeZoneTimeType $daylightTime
     */
    protected $daylightTime = null;


}

