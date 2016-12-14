<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RecurringDayTransitionType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a time zone transition that occurs on the same day each year.
 *
 * @package php-ews\Type
 */
class RecurringDayTransitionType extends RecurringTimeTransitionType
{
    /**
     * The day of the week on which the time zone transition occurs.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DayOfWeekType
     */
    public $DayOfWeek;

    /**
     * The occurrence of the day of the week in the month that the time zone
     * transition occurs.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\Occurrence
     */
    public $Occurrence;
}
