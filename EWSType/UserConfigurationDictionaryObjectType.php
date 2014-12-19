<?php
/**
 * Contains EWSType_UserConfigurationDictionaryObjectType.
 */

/**
 * Represents the value of a dictionary property.
 *
 * @package php-ews\Types
 */
class EWSType_UserConfigurationDictionaryObjectType extends EWSType
{
    /**
     * Specifies the dictionary object type.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationDictionaryObjectTypesType
     */
    public $Type;

    /**
     * Specifies the dictionary object value as a string.ß
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Value;
}
