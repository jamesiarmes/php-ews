<?php
/**
 * Contains NonEmptyArrayOfAttendeesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents attendees who are not required to attend a meeting.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfAttendeesType extends EWSType
{
    /**
     * Represents attendees and resources for a meeting.
     *
     * @since Exchange 2007
     *
     * @var AttendeeType
     */
    public $Attendee;
}
