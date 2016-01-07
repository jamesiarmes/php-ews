<?php
/**
 * Contains EWSType_RecurrenceRangeBaseType.
 */

/**
 * Base class for recurrence ranges,
 *
 * @package php-ews\Types
 */
abstract class EWSType_RecurrenceRangeBaseType extends EWSType
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
