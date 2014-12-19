<?php
/**
 * Contains EWSType_NonEmptyArrayOfOccurrenceInfoType.
 */

/**
 * Represents an array of recurring calendar item occurrences that have been
 * modified so that they are different than the recurrence master item.
 *
 * @package php-ews\Types
 */
class EWSType_NonEmptyArrayOfOccurrenceInfoType extends EWSType
{
    /**
     * Represents a single modified occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_OccurrenceInfoType
     */
    public $Occurrence;
}
