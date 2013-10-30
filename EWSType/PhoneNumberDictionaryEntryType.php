<?php
/**
 * Contains EWSType_PhoneNumberDictionaryEntryType.
 */

/**
 * Definition of the PhoneNumberDictionaryEntryType type
 *
 * @package php-ews\Types
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
