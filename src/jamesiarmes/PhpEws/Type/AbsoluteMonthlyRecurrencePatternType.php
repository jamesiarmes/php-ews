<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AbsoluteMonthlyRecurrencePatternType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a monthly recurrence pattern.
 *
 * @package php-ews\Type
 */
class AbsoluteMonthlyRecurrencePatternType extends IntervalRecurrencePatternBaseType
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
}
