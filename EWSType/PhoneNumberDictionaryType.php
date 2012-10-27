<?php
/**
 * Contains EWSType_PhoneNumberDictionaryType.
 */

/**
 * Represents a collection of telephone numbers for a contact.
 *
 * @package php-ews\Types
 */
class EWSType_PhoneNumberDictionaryType extends EWSType
{
    /**
     * Represents a telephone number for a contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PhoneNumberDictionaryEntryType
     */
    public $Entry;
}
