<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the BaseDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the BaseDelegateType type
 */
class BaseDelegateType extends DataType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
