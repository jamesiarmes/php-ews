<?php
/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 */
class EWSType_RelativeMonthlyRecurrencePatternType extends EWSType
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
}
