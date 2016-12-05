<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfDeletedOccurrencesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of deleted occurrences of a recurring calendar item.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfDeletedOccurrencesType extends ArrayType
{
    /**
     * Represents a deleted occurrence of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\DeletedOccurrenceInfoType[]
     */
    public $DeletedOccurrence = array();
}
