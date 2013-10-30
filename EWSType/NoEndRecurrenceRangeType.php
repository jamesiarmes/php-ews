<?php
/**
 * Contains EWSType_NoEndRecurrenceRangeType.
 */

/**
 * Describes the start date of an item recurrence pattern that does not have a
 * defined end date.
 *
 * @package php-ews\Types
 */
class EWSType_NoEndRecurrenceRangeType extends EWSType
{
    /**
     * Represents the start date of a recurring task or calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a date object that extends DateTime.
     */
    public $StartDate;
}
