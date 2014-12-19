<?php
/**
 * Contains EWSType_AffectedTaskOccurrencesType.
 */

/**
 * Defines whether a task instance or a task master is deleted by a DeleteItem
 * operation.
 *
 * @package php-ews\Enumerations
 */
class EWSType_AffectedTaskOccurrencesType extends EWSType
{
    /**
     * A delete item request deletes the master task, and therefore all
     * recurring tasks that are associated with the master task.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const ALL = 'AllOccurrences';

    /**
     * A delete item request deletes only specific occurrences of a task.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    const SPECIFIED = 'SpecifiedOccurrenceOnly';

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
