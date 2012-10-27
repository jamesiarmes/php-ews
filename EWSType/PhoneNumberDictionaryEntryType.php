<?php
/**
 * Contains EWSType_PhoneNumberDictionaryEntryType.
 */

/**
 * Represents a telephone number for a contact.
 *
 * @package php-ews\Types
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class EWSType_PhoneNumberDictionaryEntryType extends EWSType
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
     * @var EWSType_PhoneNumberKeyType
     */
    public $Key;
}
