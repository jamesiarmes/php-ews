<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 */
class AbsoluteYearlyRecurrencePatternType extends DataType
{
    /**
     * DayOfMonth property
     *
     * @var integer
     */
    public $DayOfMonth;

    /**
     * Month property
     *
     * @var EWSType_MonthNamesType
     */
    public $Month;
}
