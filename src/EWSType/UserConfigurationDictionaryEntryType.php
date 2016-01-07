<?php
/**
 * Contains EWSType_UserConfigurationDictionaryEntryType.
 */

/**
 * Represents the contents of a single dictionary entry property.
 *
 * @package php-ews\Types
 */
class EWSType_UserConfigurationDictionaryEntryType extends EWSType
{
    /**
     * Specifies the dictionary key for a dictionary property.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationDictionaryObjectType
     */
    public $DictionaryKey;

    /**
     * Specifies the dictionary value for a dictionary property.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationDictionaryObjectType
     */
    public $DictionaryValue;
}
