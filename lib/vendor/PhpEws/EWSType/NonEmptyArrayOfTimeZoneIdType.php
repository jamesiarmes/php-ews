<?php
/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 */
class NonEmptyArrayOfTimeZoneIdType extends EWSType
{
    /**
     * Array of string timezone identifiers (ex. "Eastern Standard Time").
     *
     * @var array
     */
    public $Id;
}
