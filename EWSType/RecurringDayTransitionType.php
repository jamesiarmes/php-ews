<?php
/**
 * Contains EWSType_RecurringDayTransitionType.
 */

/**
 * Represents a time zone transition that occurs on the same day each year.
 *
 * @package php-ews\Types
 */
class EWSType_RecurringDayTransitionType extends EWSType
{
    /**
     * The day of the week on which the time zone transition occurs.
     *
     * @since Exchange 2010
     *
     * @var EWSType_DayOfWeekType
     */
    public $DayOfWeek;

    /**
     * The month in which the time zone transition occurs.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $Month;

    /**
     * The occurrence of the day of the week in the month that the time zone
     * transition occurs.
     *
     * @since Exchange 2010
     *
     * @var EWSType_OccurrenceType
     */
    public $Occurrence;

    /**
     * The duration offset from Coordinated Universal Time (UTC) for the time
     * zone transition.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $TimeOffset;

    /**
     * Specifies the Period or TransitionsGroup that is the target of the time
     * zone transition.
     *
     * @since Exchange 2010
     *
     * @var EWSType_TransitionTargetType
     */
    public $To;
}
