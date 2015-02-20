<?php
/**
 * Contains ArrayOfRemindersType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the reminders returned in the response to a GetReminders request.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRemindersType extends EWSType
{
    /**
     * Specifies a reminder for a task or a calendar item.
     *
     * @since Exchange 2013
     *
     * @var ReminderType
     */
    public $Reminder;
}
