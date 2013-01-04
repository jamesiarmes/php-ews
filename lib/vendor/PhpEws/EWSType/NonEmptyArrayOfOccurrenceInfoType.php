<?php
/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfOccurrenceInfoType type
 */
class NonEmptyArrayOfOccurrenceInfoType extends EWSType
{
    /**
     * Occurrence property
     *
     * @var EWSType_OccurrenceInfoType
     */
    public $Occurrence;
}
