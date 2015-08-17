<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

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
class SerializableTimeZoneType extends TypeTest
{

    /**
     * @property integer $bias
     */
    protected $bias = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SerializableTimeZoneTimeType
     * $standardTime
     */
    protected $standardTime = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SerializableTimeZoneTimeType
     * $daylightTime
     */
    protected $daylightTime = null;


}

