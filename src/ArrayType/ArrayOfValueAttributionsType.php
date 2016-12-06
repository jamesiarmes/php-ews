<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfValueAttributionsType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents an array of attributions for an associated Value element.
 *
 * @package php-ews\Array
 */
class ArrayOfValueAttributionsType extends ArrayType
{
    /**
     * Specifies a string used to identify an attribute.
     *
     * @since Exchange 2013
     *
     * @var string[]
     */
    public $Attribution = array();
}
