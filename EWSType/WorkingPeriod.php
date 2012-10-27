<?php
/**
 * Contains EWSType_WorkingPeriod.
 */

/**
 * Represents the work week days and hours of the mailbox user.
 *
 * @package php-ews\Types
 */
class EWSType_WorkingPeriod extends EWSType
{
    /**
     * Contains the list of working days scheduled for the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var EWSType_DaysOfWeekType
     */
    public $DayOfWeek;

    /**
     * Represents the end of the working day for a mailbox user.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $EndTimeInMinutes;

    /**
     * Represents the start of the working day for a mailbox user.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $StartTimeInMinutes;
}
