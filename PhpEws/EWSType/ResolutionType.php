<?php
/**
 * Definition of the ResolutionType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ResolutionType type
 */
class ResolutionType extends PhpEws\EWSType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * Contact property
     *
     * @var ContactItemType
     */
    public $Contact;
}
