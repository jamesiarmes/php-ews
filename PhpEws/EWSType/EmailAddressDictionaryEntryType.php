<?php
/**
 * Definition of the EmailAddressDictionaryEntryType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the EmailAddressDictionaryEntryType type
 */
class EmailAddressDictionaryEntryType extends PhpEws\EWSType
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
     * @var EmailAddressKeyType
     */
    public $Key;
}
