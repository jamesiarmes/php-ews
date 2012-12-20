<?php
/**
 * Definition of the EmailAddressDictionaryEntryType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the EmailAddressDictionaryEntryType type
 */
class EmailAddressDictionaryEntryType extends EWSType
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
     * @var EWSType_EmailAddressKeyType
     */
    public $Key;
}
