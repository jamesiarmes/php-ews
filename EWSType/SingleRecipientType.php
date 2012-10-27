<?php
/**
 * Contains EWSType_SingleRecipientType.
 */

/**
 * Identifies the delegate in a delegate access scenario.
 *
 * @package php-ews\Types
 */
class EWSType_SingleRecipientType extends EWSType
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
