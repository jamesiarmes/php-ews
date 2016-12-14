<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\TaskType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a task in the Exchange store.
 *
 * @package php-ews\Type
 */
class TaskType extends ItemType
{
    /**
     * Represents the actual amount of time that is spent on a task.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $ActualWork;

    /**
     * Represents the time when a task is assigned to a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $AssignedTime;

    /**
     * Holds billing information for a task.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $BillingInformation;

    /**
     * Specifies the version of the task.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $ChangeCount;

    /**
     * Represents the collection of companies that are associated with a contact
     * or task.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $Companies;

    /**
     * Represents the date on which a task is completed.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $CompleteDate;

    /**
     * Contains a list of contacts that are associated with a task.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $Contacts;

    /**
     * Represents the status of a delegated task.
     *
     * This is a read-only property.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\TaskDelegateStateType
     */
    public $DelegationState;

    /**
     * Contains the name of the delegator who assigned the task.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Delegator;

    /**
     * Represents the date when a task item is due.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DueDate;

    /**
     * Indicates whether the task is editable or not.
     *
     * The following values are possible:
     * - 0: The default for all task items.
     * - 1: A task request.
     * - 2: A task acceptance from a recipient of a task request.
     * - 3: A task declination from a recipient of a task request.
     * - 4: An update to a previous task request.
     * - 5: Not used.
     *
     * This element is read-only.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $IsAssignmentEditable;

    /**
     * Indicates whether the task has been completed or not.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsComplete;

    /**
     * Indicates whether a task is part of a recurring item.
     *
     * This element is read-only.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * Indicates whether the task is owned by a team or not.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsTeamTask;

    /**
     * Represents mileage for a task item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Mileage;

    /**
     * Represents the owner of a task.
     *
     * This is a read-only property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Owner;

    /**
     * Describes the completion status of a task.
     *
     * @since Exchange 2007
     *
     * @var float
     */
    public $PercentComplete;

    /**
     * Contains recurrence information for recurring tasks.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RecurrenceType
     */
    public $Recurrence;

    /**
     * Represents the start date of a task item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $StartDate;

    /**
     * Represents the status of a task item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\TaskStatusType
     */
    public $Status;

    /**
     * Contains an explanation of the task status.
     *
     * This is a read-only property.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $StatusDescription;

    /**
     * Contains a description of how much work is associated with an item.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $TotalWork;
}
