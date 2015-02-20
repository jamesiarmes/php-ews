<?php
/**
 * Contains GetRemindersResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the response to a GetReminders request.
 *
 * @package jamesiarmes\EWS\Types
 */
class GetRemindersResponseMessageType extends EWSType
{
    /**
     * Specifies the reminders returned in the response.
     *
     * @since Exchange 2013
     *
     * @var ArrayOfRemindersType
     */
    public $Reminders;
}
