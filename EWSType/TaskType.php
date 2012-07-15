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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ActualWork',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'AssignedTime',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'BillingInformation',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'ChangeCount',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'Companies',
                'required' => false,
                'type' => 'ArrayOfStringsType',
            ),
            array(
                'name' => 'CompleteDate',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'Contacts',
                'required' => false,
                'type' => 'ArrayOfStringsType',
            ),
            array(
                'name' => 'DelegationState',
                'required' => false,
                'type' => 'TaskDelegateStateType',
            ),
            array(
                'name' => 'Delegator',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'DueDate',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'IsAssignmentEditable',
                'required' => false,
                'type' => 'integer',
            ),
            array(
                'name' => 'IsComplete',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsRecurring',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsTeamTask',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'Mileage',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Owner',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'PercentComplete',
                'required' => false,
                'type' => 'float',
            ),
            array(
                'name' => 'Recurrence',
                'required' => false,
                'type' => 'TaskRecurrenceType',
            ),
            array(
                'name' => 'StartDate',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'Status',
                'required' => false,
                'type' => 'TaskStatusType',
            ),
            array(
                'name' => 'StatusDescription',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'TotalWork',
                'required' => false,
                'type' => 'integer',
            ),
        );
    }
}
