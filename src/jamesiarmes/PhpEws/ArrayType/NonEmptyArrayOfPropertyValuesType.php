<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfPropertyValuesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a collection of values for an extended property.
 *
 * @package php-ews\Array
 */
class NonEmptyArrayOfPropertyValuesType extends ArrayType
{
    /**
     * Contains a value of an extended property.
     *
     * @since Exchange 2007
     *
     * @var string[]
     */
    public $Value = array();
}
