<?php
/**
 * Contains UserConfigurationDictionaryEntryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the contents of a single dictionary entry property.
 *
 * @package jamesiarmes\EWS\Types
 */
class UserConfigurationDictionaryEntryType extends EWSType
{
    /**
     * Specifies the dictionary key for a dictionary property.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationDictionaryObjectType
     */
    public $DictionaryKey;

    /**
     * Specifies the dictionary value for a dictionary property.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationDictionaryObjectType
     */
    public $DictionaryValue;
}
