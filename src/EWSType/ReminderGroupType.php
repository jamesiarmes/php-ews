<?php
/**
 * Contains EWSType_ReminderGroupType.
 */

/**
 * Defines whether the reminder is for a calendar item or a task.
 *
 * @package php-ews\Enumerations
 */
class EWSType_ReminderGroupType extends EWSType
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
