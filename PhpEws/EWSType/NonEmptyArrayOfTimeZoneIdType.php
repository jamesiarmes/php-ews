<?php
/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 */
class NonEmptyArrayOfTimeZoneIdType extends PhpEws\EWSType
{
    /**
     * Array of string timezone identifiers (ex. "Eastern Standard Time").
     *
     * @var array
     */
    public $Id;
}
