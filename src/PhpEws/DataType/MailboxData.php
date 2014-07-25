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
