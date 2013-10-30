<?php
/**
 * Contains EWSType_AbsoluteMonthlyRecurrencePatternType.
 */

/**
 * Represents a monthly recurrence pattern.
 *
 * @package php-ews\Types
 */
class EWSType_AbsoluteMonthlyRecurrencePatternType extends EWSType
{
    /**
     * Describes the day in a month that a recurring item occurs.
     * 
     * The range of values for this property is 1 to 31. If for a particular
     * month this value is larger than the number of days in the month, the last
     * day of the month is assumed for this property.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $DayOfMonth;

    /**
     * Defines the interval between two consecutive recurring items.
     * 
     * For example, if the Interval has a value of 5, the recurring item occurs
     * every five months. The range of valid values is from 1 to 99.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Interval;
}
