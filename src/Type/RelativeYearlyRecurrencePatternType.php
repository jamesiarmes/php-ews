<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RelativeYearlyRecurrencePatternType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Describes a relative yearly recurrence pattern.
 *
 * @package php-ews\Type
 */
class RelativeYearlyRecurrencePatternType extends RecurrencePatternBaseType
{
    /**
     * Describes which week in a month is used in a relative yearly recurrence
     * pattern.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DayOfWeekIndexType
     */
    public $DayOfWeekIndex;

    /**
     * Describes the days of the week that are used in item recurrence patterns.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DayOfWeekType
     */
    public $DaysOfWeek;

    /**
     * Describes the month when a yearly recurring item occurs.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MonthNamesType
     */
    public $Month;
}
