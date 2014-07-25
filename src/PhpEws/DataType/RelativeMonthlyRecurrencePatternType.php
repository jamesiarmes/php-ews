<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 */
class RelativeMonthlyRecurrencePatternType extends DataType
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
}
