<?php
/**
 * Definition of the PhoneNumberDictionaryEntryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the PhoneNumberDictionaryEntryType type
 */
class PhoneNumberDictionaryEntryType extends EWSType
{
    /**
     * _ property
     *
     * @var string
     */
    public $_;

    /**
     * Key property
     *
     * @var EWSType_PhoneNumberKeyType
     */
    public $Key;
}
