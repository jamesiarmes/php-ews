<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing TaskType
 *
 *
 * XSD Type: TaskType
 *
 * @method TaskType getActualWork()
 * @method TaskType setActualWork($actualWork)
 * @method TaskType getAssignedTime()
 * @method TaskType setAssignedTime($assignedTime)
 * @method TaskType getBillingInformation()
 * @method TaskType setBillingInformation($billingInformation)
 * @method TaskType getChangeCount()
 * @method TaskType setChangeCount($changeCount)
 * @method TaskType getCompanies()
 * @method TaskType setCompanies($companies)
 * @method TaskType getCompleteDate()
 * @method TaskType setCompleteDate($completeDate)
 * @method TaskType getContacts()
 * @method TaskType setContacts($contacts)
 * @method TaskType getDelegationState()
 * @method TaskType setDelegationState($delegationState)
 * @method TaskType getDelegator()
 * @method TaskType setDelegator($delegator)
 * @method TaskType getDueDate()
 * @method TaskType setDueDate($dueDate)
 * @method TaskType getIsAssignmentEditable()
 * @method TaskType setIsAssignmentEditable($isAssignmentEditable)
 * @method TaskType getIsComplete()
 * @method TaskType setIsComplete($isComplete)
 * @method TaskType getIsRecurring()
 * @method TaskType setIsRecurring($isRecurring)
 * @method TaskType getIsTeamTask()
 * @method TaskType setIsTeamTask($isTeamTask)
 * @method TaskType getMileage()
 * @method TaskType setMileage($mileage)
 * @method TaskType getOwner()
 * @method TaskType setOwner($owner)
 * @method TaskType getPercentComplete()
 * @method TaskType setPercentComplete($percentComplete)
 * @method TaskType getRecurrence()
 * @method TaskType setRecurrence($recurrence)
 * @method TaskType getStartDate()
 * @method TaskType setStartDate($startDate)
 * @method TaskType getStatus()
 * @method TaskType setStatus($status)
 * @method TaskType getStatusDescription()
 * @method TaskType setStatusDescription($statusDescription)
 * @method TaskType getTotalWork()
 * @method TaskType setTotalWork($totalWork)
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

    /**
     * @property string $billingInformation
     */
    protected $billingInformation = null;

    /**
     * @property integer $changeCount
     */
    protected $changeCount = null;

    /**
     * @property array $companies
     */
    protected $companies = null;

    /**
     * @property \DateTime $completeDate
     */
    protected $completeDate = null;

    /**
     * @property array $contacts
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

