<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MailboxDataType
 *
 *
 * XSD Type: MailboxData
 *
 * @method MailboxDataType getEmail()
 * @method MailboxDataType setEmail($email)
 * @method MailboxDataType getAttendeeType()
 * @method MailboxDataType setAttendeeType($attendeeType)
 * @method MailboxDataType getExcludeConflicts()
 * @method MailboxDataType setExcludeConflicts($excludeConflicts)
 */
class MailboxDataType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $email
     */
    protected $email = null;

    /**
     * @property string $attendeeType
     */
    protected $attendeeType = null;

    /**
     * @property boolean $excludeConflicts
     */
    protected $excludeConflicts = null;


}

