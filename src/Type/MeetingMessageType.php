<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MeetingMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a meeting in the Exchange store.
 *
 * @package php-ews\Type
 */
class MeetingMessageType extends MessageType
{
    /**
     * Represents the calendar item that is associated with a MeetingMessage.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $AssociatedCalendarItemId;

    /**
     * Indicates the date and time that an instance of an iCalendar object was
     * created.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeStamp;

    /**
     * Indicates whether a meeting message item has been processed.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $HasBeenProcessed;

    /**
     * Indicates whether a meeting was handled by an account with delegate
     * access.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDelegated;

    /**
     * Indicates whether a meeting message is out-of-date.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsOutOfDate;

    /**
     * Used to identify a specific instance of a recurring calendar item.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $RecurrenceId;

    /**
     * Represents the type of recipient response received for a meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ResponseTypeType
     */
    public $ResponseType;

    /**
     * Identifies a calendar item.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    public $UID;
}
