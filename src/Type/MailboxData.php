<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\MailboxData.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents an individual mailbox user and options for the type of data to be
 * returned about the mailbox user.
 *
 * @package php-ews\Type
 */
class MailboxData extends Type
{
    /**
     * Represents the type of attendee identified in the Email property.
     *
     * This is used in requests for meeting suggestions.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MeetingAttendeeType
     */
    public $AttendeeType;

    /**
     * Represents the mailbox user for a GetUserAvailability query.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Email;

    /**
     * Specifies whether to return suggested times for calendar times that
     * conflict among the attendees.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $ExcludeConflicts;
}
