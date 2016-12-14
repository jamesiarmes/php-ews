<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UserConfigurationDictionaryObjectType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents the value of a dictionary property.
 *
 * @package php-ews\Type
 */
class UserConfigurationDictionaryObjectType extends Type
{
    /**
     * Specifies the dictionary object type.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\UserConfigurationDictionaryObjectTypesType
     */
    public $Type;

    /**
     * Specifies the dictionary object value as a string.ß
     *
     * @since Exchange 2010
     *
     * @var string[]
     */
    public $Value = array();
}
