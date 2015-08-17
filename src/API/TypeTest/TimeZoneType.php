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
 * @method TimeZoneType setTimeZoneName(string $timeZoneName)
 * @method TimeZoneType getBaseOffset()
 * @method TimeZoneType setBaseOffset(\DateInterval $baseOffset)
 * @method TimeZoneType getStandard()
 * @method TimeZoneType setStandard(TimeChangeType $standard)
 * @method TimeZoneType getDaylight()
 * @method TimeZoneType setDaylight(TimeChangeType $daylight)
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

