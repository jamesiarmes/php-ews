<?php
/**
 * Definition of the EmailAddressDictionaryType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the EmailAddressDictionaryType type
 */
class EmailAddressDictionaryType extends PhpEws\EWSType
{
    /**
     * Entry property
     *
     * @var EmailAddressDictionaryEntryType
     */
    public $Entry;
}
