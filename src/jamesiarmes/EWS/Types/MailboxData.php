<?php
/**
 * Contains MailboxData.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an individual mailbox user and options for the type of data to be
 * returned about the mailbox user.
 *
 * @package jamesiarmes\EWS\Types
 */
class MailboxData extends EWSType
{
    /**
     * Represents the type of attendee identified in the Email
     * (EmailAddressType) element.
     *
     * This is used in requests for meeting suggestions.
     *
     * @since Exchange 2007
     *
     * @var MeetingAttendeeType
     */
    public $AttendeeType;

    /**
     * Represents the mailbox user for a GetUserAvailability query.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
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
