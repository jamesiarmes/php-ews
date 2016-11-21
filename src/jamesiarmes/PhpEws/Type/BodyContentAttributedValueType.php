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
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPersonaAttributionsType
     *
     * @since Exchange 2013
     */
    public $Attributions;

    /**
     * Specifies the value of a BodyContentAttributedValue element.
     *
     * @var \jamesiarmes\PhpEws\Enumeration\BodyTypeResponseType
     *
     * @since Exchange 2013
     */
    public $Value;
}
