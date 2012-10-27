<?php
/**
 * Contains EWSType_ReminderType.
 */

/**
 * Represents a reminder for a task or a calendar item.
 *
 * @package php-ews\Types
 */
class EWSType_ReminderType extends EWSType
{
    /**
     * The end date of the item the reminder is for.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $EndDate;

    /**
     * The unique identifier of the reminder.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * The location for the item the reminder is for.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Location;

    /**
     * The unique identifier of the recurring master item for the reminder.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ItemIdType
     */
    public $RecurringMasterItemId;

    /**
     * Specified whether the reminder is for a calendar item or a task.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ReminderGroupType
     */
    public $ReminderGroup;

    /**
     * The time for the reminder to occur.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ReminderTime;

    /**
     * The start date of the item the reminder is for.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartDate;

    /**
     * The subject of the item the reminder is for.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Subject;

    /**
     * The unique identifier of the calendar item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $UID;
}
