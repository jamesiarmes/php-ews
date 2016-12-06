<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PostalAddressAttributedValueType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines an instance of an array of postal addresses and their associated
 * attributions.
 *
 * @package php-ews\Type
 */
class PostalAddressAttributedValueType extends Type
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
     * Specifies information associated with a postal address.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PersonaPostalAddressType
     */
    public $Value;
}
