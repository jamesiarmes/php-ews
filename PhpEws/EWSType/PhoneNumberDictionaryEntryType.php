<?php
/**
 * Definition of the PhoneNumberDictionaryEntryType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the PhoneNumberDictionaryEntryType type
 */
class PhoneNumberDictionaryEntryType extends PhpEws\EWSType
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
     * @var PhoneNumberKeyType
     */
    public $Key;
}
