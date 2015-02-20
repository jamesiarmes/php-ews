<?php
/**
 * Contains NonEmptyArrayOfDeletedOccurrencesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of deleted occurrences of a recurring calendar item.
 *
 * @package jamesiarmes\EWS\Types
 */
class NonEmptyArrayOfDeletedOccurrencesType extends EWSType
{
    /**
     * Represents a deleted occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var DeletedOccurrenceInfoType
     */
    public $DeletedOccurrence;
}
