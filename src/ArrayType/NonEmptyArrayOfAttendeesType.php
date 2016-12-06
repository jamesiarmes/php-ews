<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents attendees who are not required to attend a meeting.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfAttendeesType extends ArrayType
{
    /**
     * Represents attendees and resources for a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\AttendeeType[]
     */
    public $Attendee = array();
}
