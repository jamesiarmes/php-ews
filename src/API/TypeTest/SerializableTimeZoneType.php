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
 * @method SerializableTimeZoneType setBias($bias)
 * @method SerializableTimeZoneType getStandardTime()
 * @method SerializableTimeZoneType setStandardTime($standardTime)
 * @method SerializableTimeZoneType getDaylightTime()
 * @method SerializableTimeZoneType setDaylightTime($daylightTime)
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

