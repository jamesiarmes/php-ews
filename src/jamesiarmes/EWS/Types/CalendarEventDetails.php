<?php
/**
 * Contains CalendarEventDetails.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents additional information about a calendar event.
 *
 * @package jamesiarmes\EWS\Types
 */
class CalendarEventDetails extends EWSType
{
    /**
     * Represents the entry ID of the calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ID;

    /**
     * Indicates whether an instance of a recurring calendar item is changed
     * from the master.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsException;

    /**
     * Indicates whether the calendar event is a meeting or an appointment.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsMeeting;

    /**
     * Indicates whether the calendar item is private.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsPrivate;

    /**
     * Indicates whether the calendar event is an instance of a recurring
     * calendar item or a single calendar item.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * Indicates whether a reminder has been set for the calendar event.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsReminderSet;

    /**
     * Represents the location field of the calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Location;

    /**
     * Represents the subject of the calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Subject;
}
