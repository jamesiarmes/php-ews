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
     * @var EWSType_DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * DayOfWeekIndex property
     *
     * @var EWSType_DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Month property
     *
     * @var EWSType_MonthNamesType
     */
    public $Month;
}
