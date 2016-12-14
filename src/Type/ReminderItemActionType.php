<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ReminderItemActionType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the action for a reminder item.
 *
 * @package php-ews\Type
 */
class ReminderItemActionType extends Type
{
    /**
     * Specifies the action to take on the reminder.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ReminderActionType
     */
    public $ActionType;

    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ItemId;

    /**
     * Specifies a new time for a reminder.
     *
     * This is used when the ActionType element is set to Snooze, in order to
     * delay the reminder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $NewReminderTime;
}
