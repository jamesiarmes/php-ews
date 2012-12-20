<?php
/**
 * Definition of the MailboxData type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MailboxData type
 */
class EWSType_MailboxData extends EWSType
{
    /**
     * Email property
     *
     * @var EWSType_EmailAddress
     */
    public $Email;

    /**
     * AttendeeType property
     *
     * @var EWSType_MeetingAttendeeType
     */
    public $AttendeeType;

    /**
     * ExcludeConflicts property
     *
     * @var boolean
     */
    public $ExcludeConflicts;
}
