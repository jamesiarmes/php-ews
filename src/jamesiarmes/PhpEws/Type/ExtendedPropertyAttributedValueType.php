<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ExtendedPropertyAttributedValueType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines an extended property for a persona.
 *
 * @package php-ews\Type
 */
class ExtendedPropertyAttributedValueType extends Type
{
    /**
     * Specifies an array of attributions for its associated Value element.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfValueAttributionsType
     */
    public $Attributions;

    /**
     * Specifies an extended property for a persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ExtendedPropertyType
     */
    public $Value;
}
