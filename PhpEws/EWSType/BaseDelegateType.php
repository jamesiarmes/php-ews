<?php
/**
 * Definition of the BaseDelegateType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the BaseDelegateType type
 */
class BaseDelegateType extends PhpEws\EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
