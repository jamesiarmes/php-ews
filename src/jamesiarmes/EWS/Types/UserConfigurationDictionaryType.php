<?php
/**
 * Contains UserConfigurationDictionaryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a set of dictionary property entries for a user configuration object.
 *
 * @package jamesiarmes\EWS\Types
 */
class UserConfigurationDictionaryType extends EWSType
{
    /**
     * Specifies the contents of a single dictionary entry property.
     *
     * @since Exchange 2010
     *
     * @var UserConfigurationDictionaryEntryType
     */
    public $DictionaryEntry;
}
