<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 */
class RelativeYearlyRecurrencePatternType extends DataType
{
    /**
     * DaysOfWeek property
     *
     * @var DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * DayOfWeekIndex property
     *
     * @var DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Month property
     *
     * @var MonthNamesType
     */
    public $Month;
}
