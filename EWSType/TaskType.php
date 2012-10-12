<?php
/**
 * Definition of the TaskType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the TaskType type
 */
class EWSType_TaskType extends EWSType
{
    /**
     * ActualWork property
     *
     * @var integer
     */
    public $ActualWork;

    /**
     * AssignedTime property
     *
     * @var EWSType_dateTime
     */
    public $AssignedTime;

    /**
     * BillingInformation property
     *
     * @var string
     */
    public $BillingInformation;

    /**
     * ChangeCount property
     *
     * @var integer
     */
    public $ChangeCount;

    /**
     * Companies property
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Companies;

    /**
     * CompleteDate property
     *
     * @var EWSType_dateTime
     */
    public $CompleteDate;

    /**
     * Contacts property
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Contacts;

    /**
     * DelegationState property
     *
     * @var EWSType_TaskDelegateStateType
     */
    public $DelegationState;

    /**
     * Delegator property
     *
     * @var string
     */
    public $Delegator;

    /**
     * DueDate property
     *
     * @var EWSType_dateTime
     */
    public $DueDate;

    /**
     * IsAssignmentEditable property
     *
     * @var integer
     */
    public $IsAssignmentEditable;

    /**
     * IsComplete property
     *
     * @var boolean
     */
    public $IsComplete;

    /**
     * IsRecurring property
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * IsTeamTask property
     *
     * @var boolean
     */
    public $IsTeamTask;

    /**
     * Mileage property
     *
     * @var string
     */
    public $Mileage;

    /**
     * Owner property
     *
     * @var string
     */
    public $Owner;

    /**
     * PercentComplete property
     *
     * @var float
     */
    public $PercentComplete;

    /**
     * Recurrence property
     *
     * @var EWSType_TaskRecurrenceType
     */
    public $Recurrence;

    /**
     * StartDate property
     *
     * @var EWSType_dateTime
     */
    public $StartDate;

    /**
     * Status property
     *
     * @var EWSType_TaskStatusType
     */
    public $Status;

    /**
     * StatusDescription property
     *
     * @var string
     */
    public $StatusDescription;

    /**
     * TotalWork property
     *
     * @var integer
     */
    public $TotalWork;
}
