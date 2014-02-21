<?php
/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 */
class NonEmptyArrayOfOccurrenceInfoType extends PhpEws\EWSType
{
    /**
     * Occurrence property
     *
     * @var OccurrenceInfoType
     */
    public $Occurrence;
}
