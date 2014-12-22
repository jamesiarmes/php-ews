<?php
/**
 * Contains EWSType_ResolutionType.
 */

/**
 * Represents a single resolved entity.
 *
 * @package php-ews\Types
 */
class EWSType_ResolutionType extends EWSType
{
    /**
     * Represents an Exchange contact item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContactItemType
     */
    public $Contact;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
