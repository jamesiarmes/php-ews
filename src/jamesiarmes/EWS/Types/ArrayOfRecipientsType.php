<?php
/**
 * Contains ArrayOfRecipientsType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an array of recipients of an item.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfRecipientsType extends EWSType
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
