<?php
/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfDeletedOccurrencesType type
 */
class NonEmptyArrayOfDeletedOccurrencesType extends PhpEws\EWSType
{
    /**
     * DeletedOccurrence property
     *
     * @var DeletedOccurrenceInfoType
     */
    public $DeletedOccurrence;
}
