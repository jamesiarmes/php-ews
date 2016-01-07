<?php
/**
 * Contains EWSType_TaskTypeType.
 */

/**
 * Represents the task type.
 *
 * @package php-ews\Enumerations
 */
class EWSType_TaskTypeType extends EWSType
{
    /**
     * Indicates that the task is an accepted task message.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const ACCEPTED = 2;

    /**
     * Indicates that the task is a declined task message.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const DECLINED = 3;

    /**
     * Indicates that the task is not a delegated task message.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const NOT_DELEGATED = 0;

    /**
     * Indicates that the task is a task request.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const REQUEST = 1;

    /**
     * Indicates that the task is an update to an existing task message.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    const UPDATE = 4;

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
