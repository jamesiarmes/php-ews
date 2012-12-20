<?php
/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 */
class NonEmptyArrayOfDeletedOccurrencesType extends EWSType
{
    /**
     * DeletedOccurrence property
     *
     * @var EWSType_DeletedOccurrenceInfoType
     */
    public $DeletedOccurrence;
}
