<?php
/**
 * Contains EWSType_ArrayOfRemindersType.
 */

/**
 * Represents the reminders returned in the response to a GetReminders request.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfRemindersType extends EWSType
{
    /**
     * Specifies a reminder for a task or a calendar item.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ReminderType
     */
    public $Reminder;
}
