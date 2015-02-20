<?php
/**
 * Contains WorkingHours.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the time zone settings and working hours for the requested mailbox
 * user.
 *
 * @package jamesiarmes\EWS\Types
 */
class WorkingHours extends EWSType
{
    /**
     * Contains elements that identify time zone information.
     *
     * This element also contains information about the transition between
     * standard time and daylight saving time.
     *
     * This element is required if the WorkingHours element is used.
     *
     * @since Exchange 2007
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;

    /**
     * Contains working period information for the mailbox user.
     *
     * This element is required if the WorkingHours element is used.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
