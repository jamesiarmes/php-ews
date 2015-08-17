<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing TaskType
 *
 *
 * XSD Type: TaskType
 *
 * @method TaskType getActualWork()
 * @method TaskType setActualWork(integer $actualWork)
 * @method TaskType getAssignedTime()
 * @method TaskType setAssignedTime(\DateTime $assignedTime)
 * @method TaskType getBillingInformation()
 * @method TaskType setBillingInformation(string $billingInformation)
 * @method TaskType getChangeCount()
 * @method TaskType setChangeCount(integer $changeCount)
 * @method TaskType getCompanies()
 * @method TaskType setCompanies(array $companies)
 * @method TaskType getCompleteDate()
 * @method TaskType setCompleteDate(\DateTime $completeDate)
 * @method TaskType getContacts()
 * @method TaskType setContacts(array $contacts)
 * @method TaskType getDelegationState()
 * @method TaskType setDelegationState(string $delegationState)
 * @method TaskType getDelegator()
 * @method TaskType setDelegator(string $delegator)
 * @method TaskType getDueDate()
 * @method TaskType setDueDate(\DateTime $dueDate)
 * @method TaskType getIsAssignmentEditable()
 * @method TaskType setIsAssignmentEditable(integer $isAssignmentEditable)
 * @method TaskType getIsComplete()
 * @method TaskType setIsComplete(boolean $isComplete)
 * @method TaskType getIsRecurring()
 * @method TaskType setIsRecurring(boolean $isRecurring)
 * @method TaskType getIsTeamTask()
 * @method TaskType setIsTeamTask(boolean $isTeamTask)
 * @method TaskType getMileage()
 * @method TaskType setMileage(string $mileage)
 * @method TaskType getOwner()
 * @method TaskType setOwner(string $owner)
 * @method TaskType getPercentComplete()
 * @method TaskType setPercentComplete(float $percentComplete)
 * @method TaskType getRecurrence()
 * @method TaskType setRecurrence(TaskRecurrenceType $recurrence)
 * @method TaskType getStartDate()
 * @method TaskType setStartDate(\DateTime $startDate)
 * @method TaskType getStatus()
 * @method TaskType setStatus(string $status)
 * @method TaskType getStatusDescription()
 * @method TaskType setStatusDescription(string $statusDescription)
 * @method TaskType getTotalWork()
 * @method TaskType setTotalWork(integer $totalWork)
 */
class TaskType extends ItemType
{

    /**
     * @property integer $actualWork
     */
    protected $actualWork = null;

    /**
     * @property \DateTime $assignedTime
     */
    protected $assignedTime = null;

    protected $_typeMap = array(
        'assignedTime' => 'dateTime',
        'completeDate' => 'dateTime',
        'dueDate' => 'dateTime',
        'startDate' => 'dateTime',
    );

    /**
     * @property string $billingInformation
     */
    protected $billingInformation = null;

    /**
     * @property integer $changeCount
     */
    protected $changeCount = null;

    /**
     * @property string[] $companies
     */
    protected $companies = null;

    /**
     * @property \DateTime $completeDate
     */
    protected $completeDate = null;

    /**
     * @property string[] $contacts
     */
    protected $contacts = null;

    /**
     * @property string $delegationState
     */
    protected $delegationState = null;

    /**
     * @property string $delegator
     */
    protected $delegator = null;

    /**
     * @property \DateTime $dueDate
     */
    protected $dueDate = null;

    /**
     * @property integer $isAssignmentEditable
     */
    protected $isAssignmentEditable = null;

    /**
     * @property boolean $isComplete
     */
    protected $isComplete = null;

    /**
     * @property boolean $isRecurring
     */
    protected $isRecurring = null;

    /**
     * @property boolean $isTeamTask
     */
    protected $isTeamTask = null;

    /**
     * @property string $mileage
     */
    protected $mileage = null;

    /**
     * @property string $owner
     */
    protected $owner = null;

    /**
     * @property float $percentComplete
     */
    protected $percentComplete = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TaskRecurrenceType $recurrence
     */
    protected $recurrence = null;

    /**
     * @property \DateTime $startDate
     */
    protected $startDate = null;

    /**
     * @property string $status
     */
    protected $status = null;

    /**
     * @property string $statusDescription
     */
    protected $statusDescription = null;

    /**
     * @property integer $totalWork
     */
    protected $totalWork = null;


}

