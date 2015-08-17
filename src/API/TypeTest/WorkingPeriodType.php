<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing WorkingPeriodType
 *
 *
 * XSD Type: WorkingPeriod
 *
 * @method WorkingPeriodType getDayOfWeek()
 * @method WorkingPeriodType setDayOfWeek(array $dayOfWeek)
 * @method WorkingPeriodType getStartTimeInMinutes()
 * @method WorkingPeriodType setStartTimeInMinutes(integer $startTimeInMinutes)
 * @method WorkingPeriodType getEndTimeInMinutes()
 * @method WorkingPeriodType setEndTimeInMinutes(integer $endTimeInMinutes)
 */
class WorkingPeriodType extends TypeTest
{

    /**
     * @property string[] $dayOfWeek
     */
    protected $dayOfWeek = null;

    /**
     * @property integer $startTimeInMinutes
     */
    protected $startTimeInMinutes = null;

    /**
     * @property integer $endTimeInMinutes
     */
    protected $endTimeInMinutes = null;


}

