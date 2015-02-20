<?php
/**
 * Contains SingleRecipientType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Identifies the delegate in a delegate access scenario.
 *
 * @package jamesiarmes\EWS\Types
 */
class SingleRecipientType extends EWSType
{
    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
