<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the WorkingPeriod type
 */
class WorkingPeriod extends DataType
{
    /**
     * DayOfWeek property
     *
     * @var DaysOfWeekType
     */
    public $DayOfWeek;

    /**
     * StartTimeInMinutes property
     *
     * @var integer
     */
    public $StartTimeInMinutes;

    /**
     * EndTimeInMinutes property
     *
     * @var integer
     */
    public $EndTimeInMinutes;
}
