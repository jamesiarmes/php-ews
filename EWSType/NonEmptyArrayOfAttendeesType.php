<?php
/**
 * Contains EWSType_NonEmptyArrayOfAttendeesType.
 */

/**
 * Represents attendees who are not required to attend a meeting.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfAttendeesType extends EWSType
{
    /**
     * Attendee property
     *
     * @since Exchange 2007
     *
     * @var EWSType_AttendeeType
     */
    public $Attendee;
}
