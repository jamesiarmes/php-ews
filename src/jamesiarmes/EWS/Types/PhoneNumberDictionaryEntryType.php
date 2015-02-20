<?php
/**
 * Contains PhoneNumberDictionaryEntryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a telephone number for a contact.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class PhoneNumberDictionaryEntryType extends EWSType
{
    /**
     * Value that represents the telephone number.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the telephone number.
     *
     * @since Exchange 2007
     *
     * @var PhoneNumberKeyType
     */
    public $Key;
}
