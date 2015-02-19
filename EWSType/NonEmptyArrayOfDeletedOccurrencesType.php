<?php
/**
 * Contains EWSType_NonEmptyArrayOfDeletedOccurrencesType.
 */

/**
 * Represents an array of deleted occurrences of a recurring calendar item.
 *
 * @package php-ews\Type
 */
class EWSType_NonEmptyArrayOfDeletedOccurrencesType extends EWSType
{
    /**
     * Represents a deleted occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DeletedOccurrenceInfoType
     */
    public $DeletedOccurrence;
}
