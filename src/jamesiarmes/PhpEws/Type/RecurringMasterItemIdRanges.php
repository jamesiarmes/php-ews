<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RecurringMasterItemIdRanges.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines an occurrence range.
 *
 * @package php-ews\Type
 */
class RecurringMasterItemIdRanges extends ItemIdType
{
    /**
     * Specifies an array of recurrence ranges.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfOccurrenceRangesType
     */
    public $Ranges;
}
