<?php
/**
 * Definition of the ArrayOfStringsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ArrayOfStringsType type
 */
class ArrayOfStringsType extends PhpEws\EWSType
{
    /**
     * String property
     *
     * @var string
     */
    public $String;

    /**
     * Properly converts the value of this type to a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->String;
    }
}
