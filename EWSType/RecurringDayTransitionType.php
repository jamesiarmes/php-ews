<?php
/**
 * The RecurringDayTransition element represents a time zone transition that
 * occurs on the same day each year.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the RecurringDayTransitionType type.
 */
class EWSType_RecurringDayTransitionType extends EWSType
{
    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @var EWSType_TransitionTargetType
     */
    public $To;

    /**
     * The duration offset from Coordinated Universal Time (UTC) for the time
     * zone transition.
     *
     * @var string
     */
    public $TimeOffset;

    /**
     * The month in which the time zone transition occurs.
     *
     * @var integer
     */
    public $Month;

    /**
     * The day of the week on which the time zone transition occurs.
     *
     * @var EWSType_DayOfWeekType
     */
    public $DayOfWeek;

    /**
     * The occurrence of the day of the week in the month that the time zone
     * transition occurs.
     *
     * @var EWSType_OccurrenceType
     */
    public $Occurrence;
}
