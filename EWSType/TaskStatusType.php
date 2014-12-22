<?php
/**
 * Contains EWSType_TaskStatusType.
 */

/**
 * Represents the status of a task item.
 *
 * @package php-ews\Enumerations
 */
class EWSType_TaskStatusType extends EWSType
{
    /**
     * Indicates that the task has been completed.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const COMPLETED = 'Completed';

    /**
     * Indicates that the task has been deferred.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const DEFERRED = 'Deferred';

    /**
     * Indicates that the task has been started.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const IN_PROGRESS = 'InProgress';

    /**
     * Indicates that the task has not yet been started.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const NOT_STARTED = 'NotStarted';

    /**
     * Indicates that the task is waiting on others.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const WAITING_ON_OTHERS = 'WaitingOnOthers';

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
