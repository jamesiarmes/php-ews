<?php
/**
 * Contains EWSType_NonEmptyArrayOfAttendeesType.
 */

/**
 * Represents attendees who are not required to attend a meeting.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfAttendeesType extends EWSType
{
    /**
     * Represents attendees and resources for a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\AttendeeType
     */
    public $Attendee;
}
