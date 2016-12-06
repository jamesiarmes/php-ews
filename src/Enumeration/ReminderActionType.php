<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\ReminderActionType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines the action to take on a reminder.
 *
 * @package php-ews\Enumeration
 */
class ReminderActionType extends Enumeration
{
    /**
     * Dismiss the reminder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const DISMISS = 'Dismiss';

    /**
     * Snooze the reminder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const SNOOZE = 'Snooze';
}
