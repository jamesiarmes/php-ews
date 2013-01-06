<?php
/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 */
class RelativeYearlyRecurrencePatternType extends EWSType
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
