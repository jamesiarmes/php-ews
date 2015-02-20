<?php
/**
 * Contains PhoneNumberDictionaryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a collection of telephone numbers for a contact.
 *
 * @package jamesiarmes\EWS\Types
 */
class PhoneNumberDictionaryType extends EWSType
{
    /**
     * Represents a telephone number for a contact.
     *
     * @since Exchange 2007
     *
     * @var PhoneNumberDictionaryEntryType
     */
    public $Entry;
}
