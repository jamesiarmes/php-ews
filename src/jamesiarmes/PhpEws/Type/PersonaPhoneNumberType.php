<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PersonaPhoneNumberType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a phone number and type information and is associated with a set
 * of attributions.
 *
 * @package php-ews\Type
 */
class PersonaPhoneNumberType extends Type
{
    /**
     * Specifies the phone number.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Number;

    /**
     * Specifies the type of phone number, for example, "Home" or "Business".
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Type;
}
