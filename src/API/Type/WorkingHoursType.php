<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing WorkingHoursType
 *
 *
 * XSD Type: WorkingHours
 *
 * @method SerializableTimeZoneType getTimeZone()
 * @method WorkingHoursType setTimeZone(SerializableTimeZoneType $timeZone)
 * @method WorkingHoursType addWorkingPeriodArray(WorkingPeriodType $workingPeriodArray)
 * @method WorkingPeriodType[] getWorkingPeriodArray()
 * @method WorkingHoursType setWorkingPeriodArray(array $workingPeriodArray)
 */
class WorkingHoursType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\SerializableTimeZoneType
     */
    protected $timeZone = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\WorkingPeriodType[]
     */
    protected $workingPeriodArray = null;
}
