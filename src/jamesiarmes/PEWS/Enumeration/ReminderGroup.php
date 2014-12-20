<?php
/**
 * Contains \jamesiarmes\PEWS\Enumeration\ReminderGroup.
 */

namespace jamesiarmes\PEWS\Enumeration;

use \jamesiarmes\PEWS\Enumeration;

/**
 * Defines whether the reminder is for a calendar item or a task.
 *
 * @package php-ews\Enumeration
 */
class ReminderGroup extends Enumeration
{
    /**
     * Specifies that the reminder is for a calendar item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const CALENDAR = 'Calendar';

    /**
     * Specifies that the reminder is for a task item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    const TASK = 'Task';
}
