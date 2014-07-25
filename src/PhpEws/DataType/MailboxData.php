<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MailboxData type
 */
class MailboxData extends DataType
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
