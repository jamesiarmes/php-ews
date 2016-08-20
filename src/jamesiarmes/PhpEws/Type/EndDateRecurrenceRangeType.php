<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\EndDateRecurrenceRangeType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Describes the start date and the end date of an item recurrence pattern.
 *
 * @package php-ews\Type
 */
class EndDateRecurrenceRangeType extends RecurrenceRangeBaseType
{
    /**
     * Represents the end date of a recurring task or calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a date object that extends DateTime.
     */
    public $EndDate;
}
