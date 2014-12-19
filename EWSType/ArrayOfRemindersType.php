<?php
/**
 * Contains EWSType_ArrayOfRemindersType.
 */

/**
 * Represents the reminders returned in the response to a GetReminders request.
 *
 * @package php-ews\Types
 */
class EWSType_ArrayOfRemindersType extends EWSType
{
    /**
     * Specifies a reminder for a task or a calendar item.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ReminderType
     */
    public $Reminder;
}
