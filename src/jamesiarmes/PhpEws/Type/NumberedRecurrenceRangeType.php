<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\NumberedRecurrenceRangeType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Describes the start date and the number of occurrences of a recurring item.
 *
 * @package php-ews\Type
 */
class NumberedRecurrenceRangeType extends RecurrenceRangeBaseType
{
    /**
     * Contains the number of occurrences of a recurring item.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $NumberOfOccurrences;
}
