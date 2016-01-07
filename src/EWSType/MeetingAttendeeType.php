<?php
/**
 * Contains EWSType_MeetingAttendeeType.
 */

/**
 * Represents the type of attendee that is identified in the Email element.
 *
 * @package php-ews\Enumerations
 */
class EWSType_MeetingAttendeeType extends EWSType
{
    /**
     * A mailbox user who is an optional attendee to the meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const OPTIONAL = 'Optional';

    /**
     * The mailbox user and attendee who created the calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ORGANIZER = 'Organizer';

    /**
     * A mailbox user who is a required attendee to the meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const REQUIRED = 'Required';

    /**
     * A resource such as a TV or projector that is scheduled for use in the meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const RESOURCE = 'Resource';

    /**
     * A mailbox entity that represents a room resource used for the meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ROOM = 'Room';

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
