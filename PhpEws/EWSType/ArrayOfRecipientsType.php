<?php
/**
 * Definition of the ArrayOfRecipientsType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ArrayOfRecipientsType type
 */
class ArrayOfRecipientsType extends PhpEws\EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
