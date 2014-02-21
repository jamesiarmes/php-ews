<?php
/**
 * Definition of the MailboxData type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the MailboxData type
 */
class MailboxData extends PhpEws\EWSType
{
    /**
     * Email property
     *
     * @var EmailAddress
     */
    public $Email;

    /**
     * AttendeeType property
     *
     * @var MeetingAttendeeType
     */
    public $AttendeeType;

    /**
     * ExcludeConflicts property
     *
     * @var boolean
     */
    public $ExcludeConflicts;
}
