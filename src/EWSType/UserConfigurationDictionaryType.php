<?php
/**
 * Contains EWSType_UserConfigurationDictionaryType.
 */

/**
 * Defines a set of dictionary property entries for a user configuration object.
 *
 * @package php-ews\Types
 */
class EWSType_UserConfigurationDictionaryType extends EWSType
{
    /**
     * Specifies the contents of a single dictionary entry property.
     *
     * @since Exchange 2010
     *
     * @var EWSType_UserConfigurationDictionaryEntryType
     */
    public $DictionaryEntry;
}
