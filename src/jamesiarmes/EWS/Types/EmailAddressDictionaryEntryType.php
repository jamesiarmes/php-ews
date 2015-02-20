<?php
/**
 * Contains EmailAddressDictionaryEntryType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a single e-mail address for a contact.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Create a common EntryType class.
 * @todo Create a common TextEntryType class.
 */
class EmailAddressDictionaryEntryType extends EWSType
{
    /**
     * The email address represented by this entry.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the e-mail address.
     *
     * @since Exchange 2007
     *
     * @var EmailAddressKeyType
     */
    public $Key;

    /**
     * Defines the mailbox type of a mailbox user.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var MailboxTypeType
     */
    public $MailboxType;

    /**
     * Defines the name of the mailbox user.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Name;

    /**
     * Defines the routing that is used for the mailbox.
     *
     * This attribute is optional and defaults to SMTP.
     *
     * @since Exchange 2010
     *
     * @var RoutingTypeType
     */
    public $RoutingType;
}
