<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing WorkingHoursType
 *
 *
 * XSD Type: WorkingHours
 *
 * @method WorkingHoursType getTimeZone()
 * @method WorkingHoursType setTimeZone(SerializableTimeZoneType $timeZone)
 * @method WorkingHoursType getWorkingPeriodArray()
 * @method WorkingHoursType setWorkingPeriodArray(array $workingPeriodArray)
 */
class WorkingHoursType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SerializableTimeZoneType $timeZone
     */
    protected $timeZone = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\WorkingPeriodType[] $workingPeriodArray
     */
    protected $workingPeriodArray = null;


}

