<?php
/**
 * Definition of the ResolutionType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ResolutionType type
 */
class EWSType_ResolutionType extends EWSType
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
