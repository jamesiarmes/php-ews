<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\StringAttributedValueType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents an attribute associated with a persona element.
 *
 * @package php-ews\Type
 */
class StringAttributedValueType extends Type
{
    /**
     * Specifies an array of attributions for the Value element.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfValueAttributionsType
     */
    public $Attributions;

    /**
     * Contains the value of the property.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Value;
}
