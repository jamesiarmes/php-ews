<?php
/**
 * Contains WorkingPeriod.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the work week days and hours of the mailbox user.
 *
 * @package jamesiarmes\EWS\Types
 */
class WorkingPeriod extends EWSType
{
    /**
     * Contains the list of working days scheduled for the mailbox user.
     *
     * @since Exchange 2007
     *
     * @var DaysOfWeekType
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
