<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing WorkingHoursType
 *
 *
 * XSD Type: WorkingHours
 *
 * @method WorkingHoursType getTimeZone()
 * @method WorkingHoursType setTimeZone($timeZone)
 * @method WorkingHoursType getWorkingPeriodArray()
 * @method WorkingHoursType setWorkingPeriodArray($workingPeriodArray)
 */
class WorkingHoursType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SerializableTimeZoneType $timeZone
     */
    protected $timeZone = null;

    /**
     * @property array $workingPeriodArray
     */
    protected $workingPeriodArray = null;


}

