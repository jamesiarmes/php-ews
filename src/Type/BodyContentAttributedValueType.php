<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\BodyContentAttributedValueType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines the body content of an item.
 *
 * @package php-ews\Type
 */
class BodyContentAttributedValueType extends Type
{
    /**
     * Specifies an array of attribution information for one or more of the
     * contacts or active directory recipients aggregated into the associated
     * persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPersonaAttributionsType
     */
    public $Attributions;

    /**
     * Specifies the value of a BodyContentAttributedValue element.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\BodyTypeResponseType
     */
    public $Value;
}
