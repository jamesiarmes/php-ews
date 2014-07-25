<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the ResolutionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ResolutionType type
 */
class ResolutionType extends DataType
{
    /**
     * Mailbox property
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Contact property
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;
}
