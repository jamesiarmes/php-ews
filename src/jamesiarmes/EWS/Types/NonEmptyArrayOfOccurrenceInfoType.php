<?php
/**
 * Contains NonEmptyArrayOfOccurrenceInfoType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of recurring calendar item occurrences that have been
 * modified so that they are different than the recurrence master item.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfOccurrenceInfoType extends EWSType
{
    /**
     * Represents a single modified occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var OccurrenceInfoType
     */
    public $Occurrence;
}
