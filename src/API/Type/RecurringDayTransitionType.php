<?php
/**
 * Contains \jamesiarmes\PEWS\API\Type\RecurringDayTransitionType.
 */

namespace jamesiarmes\PEWS\API\Type;

/**
 * Represents a time zone transition that occurs on the same day each year.
 *
 * @package php-ews\Types
 */
class RecurringDayTransitionType extends RecurringTimeTransitionType
{
    /**
     * The day of the week on which the time zone transition occurs.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\API\Enumeration\DayOfWeekType
     */
    public $DayOfWeek;

    /**
     * The occurrence of the day of the week in the month that the time zone
     * transition occurs.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PEWS\API\Enumeration\Occurrence
     */
    public $Occurrence;
}
