<?php
/**
 * Definition of the ExpandDLType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ExpandDLType type
 */
class ExpandDLType extends PhpEws\EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
