<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing TimeZoneType
 *
 *
 * XSD Type: TimeZoneType
 *
 * @method TimeZoneType getTimeZoneName()
 * @method TimeZoneType setTimeZoneName(string $timeZoneName)
 * @method TimeZoneType getBaseOffset()
 * @method TimeZoneType setBaseOffset(\DateInterval $baseOffset)
 * @method TimeZoneType getStandard()
 * @method TimeZoneType setStandard(TimeChangeType $standard)
 * @method TimeZoneType getDaylight()
 * @method TimeZoneType setDaylight(TimeChangeType $daylight)
 */
class TimeZoneType extends Type
{

    /**
     * @property string $timeZoneName
     */
    protected $timeZoneName = null;

    /**
     * @property \DateInterval $baseOffset
     */
    protected $baseOffset = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TimeChangeType $standard
     */
    protected $standard = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TimeChangeType $daylight
     */
    protected $daylight = null;
}
