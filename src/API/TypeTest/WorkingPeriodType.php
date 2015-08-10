<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing WorkingPeriodType
 *
 *
 * XSD Type: WorkingPeriod
 *
 * @method WorkingPeriodType getDayOfWeek()
 * @method WorkingPeriodType setDayOfWeek($dayOfWeek)
 * @method WorkingPeriodType getStartTimeInMinutes()
 * @method WorkingPeriodType setStartTimeInMinutes($startTimeInMinutes)
 * @method WorkingPeriodType getEndTimeInMinutes()
 * @method WorkingPeriodType setEndTimeInMinutes($endTimeInMinutes)
 */
class WorkingPeriodType extends Type
{

    /**
     * @property array $dayOfWeek
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

