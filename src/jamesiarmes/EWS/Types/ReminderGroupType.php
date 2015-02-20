<?php
/**
 * Contains ReminderGroupType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines whether the reminder is for a calendar item or a task.
 *
 * @package jamesiarmes\EWS\Enumerations
 */
class ReminderGroupType extends EWSType
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

    /**
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
