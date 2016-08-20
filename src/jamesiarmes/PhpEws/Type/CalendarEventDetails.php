<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\CalendarEventDetails.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents additional information about a calendar event.
 *
 * @package php-ews\Type
 */
class CalendarEventDetails extends Type
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
