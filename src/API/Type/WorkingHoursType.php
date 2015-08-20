<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

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
class WorkingHoursType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\SerializableTimeZoneType $timeZone
     */
    protected $timeZone = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\WorkingPeriodType[] $workingPeriodArray
     */
    protected $workingPeriodArray = null;


}

