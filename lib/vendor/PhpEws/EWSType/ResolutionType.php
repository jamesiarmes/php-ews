<?php
/**
 * Definition of the ResolutionType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the ResolutionType type
 */
class ResolutionType extends EWSType
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
