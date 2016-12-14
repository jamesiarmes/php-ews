<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PhoneNumberDictionaryEntryType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a telephone number for a contact.
 *
 * @package php-ews\Type
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class PhoneNumberDictionaryEntryType extends Type
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
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PhoneNumberKeyType
     */
    public $Key;
}
