<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing TimeZoneType
 *
 *
 * XSD Type: TimeZoneType
 *
 * @method TimeZoneType getTimeZoneName()
 * @method TimeZoneType setTimeZoneName($timeZoneName)
 * @method TimeZoneType getBaseOffset()
 * @method TimeZoneType setBaseOffset($baseOffset)
 * @method TimeZoneType getStandard()
 * @method TimeZoneType setStandard($standard)
 * @method TimeZoneType getDaylight()
 * @method TimeZoneType setDaylight($daylight)
 */
class TimeZoneType extends TypeTest
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
     * @property \jamesiarmes\PEWS\API\TypeTest\TimeChangeType $standard
     */
    protected $standard = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TimeChangeType $daylight
     */
    protected $daylight = null;


}

