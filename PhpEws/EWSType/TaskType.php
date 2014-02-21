<?php
/**
 * Definition of the TaskType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the TaskType type
 */
class TaskType extends PhpEws\EWSType
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
     * @var dateTime
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
     * @var ArrayOfStringsType
     */
    public $Companies;

    /**
     * CompleteDate property
     *
     * @var dateTime
     */
    public $CompleteDate;

    /**
     * Contacts property
     *
     * @var ArrayOfStringsType
     */
    public $Contacts;

    /**
     * DelegationState property
     *
     * @var TaskDelegateStateType
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
     * @var dateTime
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
     * @var TaskRecurrenceType
     */
    public $Recurrence;

    /**
     * StartDate property
     *
     * @var dateTime
     */
    public $StartDate;

    /**
     * Status property
     *
     * @var TaskStatusType
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
