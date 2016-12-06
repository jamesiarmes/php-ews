<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfRemindersType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents the reminders returned in the response to a GetReminders request.
 *
 * @package php-ews\Array
 */
class ArrayOfRemindersType extends ArrayType
{
    /**
     * Specifies a reminder for a task or a calendar item.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ReminderType[]
     */
    public $Reminder = array();
}
