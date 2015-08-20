<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing TaskType
 *
 *
 * XSD Type: TaskType
 *
 * @method integer getActualWork()
 * @method TaskType setActualWork(integer $actualWork)
 * @method \DateTime getAssignedTime()
 * @method TaskType setAssignedTime(\DateTime $assignedTime)
 * @method string getBillingInformation()
 * @method TaskType setBillingInformation(string $billingInformation)
 * @method integer getChangeCount()
 * @method TaskType setChangeCount(integer $changeCount)
 * @method array getCompanies()
 * @method TaskType setCompanies(array $companies)
 * @method \DateTime getCompleteDate()
 * @method TaskType setCompleteDate(\DateTime $completeDate)
 * @method array getContacts()
 * @method TaskType setContacts(array $contacts)
 * @method string getDelegationState()
 * @method TaskType setDelegationState(string $delegationState)
 * @method string getDelegator()
 * @method TaskType setDelegator(string $delegator)
 * @method \DateTime getDueDate()
 * @method TaskType setDueDate(\DateTime $dueDate)
 * @method integer getIsAssignmentEditable()
 * @method TaskType setIsAssignmentEditable(integer $isAssignmentEditable)
 * @method boolean getIsComplete()
 * @method TaskType setIsComplete(boolean $isComplete)
 * @method boolean getIsRecurring()
 * @method TaskType setIsRecurring(boolean $isRecurring)
 * @method boolean getIsTeamTask()
 * @method TaskType setIsTeamTask(boolean $isTeamTask)
 * @method string getMileage()
 * @method TaskType setMileage(string $mileage)
 * @method string getOwner()
 * @method TaskType setOwner(string $owner)
 * @method float getPercentComplete()
 * @method TaskType setPercentComplete(float $percentComplete)
 * @method TaskRecurrenceType getRecurrence()
 * @method TaskType setRecurrence(TaskRecurrenceType $recurrence)
 * @method \DateTime getStartDate()
 * @method TaskType setStartDate(\DateTime $startDate)
 * @method string getStatus()
 * @method TaskType setStatus(string $status)
 * @method string getStatusDescription()
 * @method TaskType setStatusDescription(string $statusDescription)
 * @method integer getTotalWork()
 * @method TaskType setTotalWork(integer $totalWork)
 */
class TaskType extends ItemType
{

    /**
     * @var integer
     */
    protected $actualWork = null;

    /**
     * @var \DateTime
     */
    protected $assignedTime = null;

    protected $_typeMap = array(
        'assignedTime' => 'dateTime',
        'completeDate' => 'dateTime',
        'dueDate' => 'dateTime',
        'startDate' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $billingInformation = null;

    /**
     * @var integer
     */
    protected $changeCount = null;

    /**
     * @var string[]
     */
    protected $companies = null;

    /**
     * @var \DateTime
     */
    protected $completeDate = null;

    /**
     * @var string[]
     */
    protected $contacts = null;

    /**
     * @var string
     */
    protected $delegationState = null;

    /**
     * @var string
     */
    protected $delegator = null;

    /**
     * @var \DateTime
     */
    protected $dueDate = null;

    /**
     * @var integer
     */
    protected $isAssignmentEditable = null;

    /**
     * @var boolean
     */
    protected $isComplete = null;

    /**
     * @var boolean
     */
    protected $isRecurring = null;

    /**
     * @var boolean
     */
    protected $isTeamTask = null;

    /**
     * @var string
     */
    protected $mileage = null;

    /**
     * @var string
     */
    protected $owner = null;

    /**
     * @var float
     */
    protected $percentComplete = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TaskRecurrenceType
     */
    protected $recurrence = null;

    /**
     * @var \DateTime
     */
    protected $startDate = null;

    /**
     * @var string
     */
    protected $status = null;

    /**
     * @var string
     */
    protected $statusDescription = null;

    /**
     * @var integer
     */
    protected $totalWork = null;
}
