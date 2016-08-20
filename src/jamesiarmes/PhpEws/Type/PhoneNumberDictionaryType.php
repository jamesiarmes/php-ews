<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PhoneNumberDictionaryType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents a collection of telephone numbers for a contact.
 *
 * @package php-ews\Type
 */
class PhoneNumberDictionaryType extends Type
{
    /**
     * Represents a telephone number for a contact.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PhoneNumberDictionaryEntryType
     */
    public $Entry;
}
