<?php
/**
 * Contains EWSType_EmailAddressDictionaryEntryType.
 */

/**
 * Represents a single e-mail address for a contact.
 *
 * @package php-ews\Types
 */
class EWSType_EmailAddressDictionaryEntryType extends EWSType
{
    /**
     * The email address represented by this entry.
     *
     * @var string
     */
    public $_;

    /**
     * Identifies the e-mail address.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EmailAddressKeyType
     */
    public $Key;

    /**
     * Defines the mailbox type of a mailbox user.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var EWSType_MailboxTypeType
     */
    public $MailboxType;

    /**
     * Defines the name of the mailbox user.
     *
     * This attribute is optional.
     *
     * @since Exchange 2010
     *
     * @var EWSType_
     */
    public $Name;

    /**
     * Defines the routing that is used for the mailbox.
     *
     * This attribute is optional and defaults to SMTP.
     *
     * @since Exchange 2010
     *
     * @var EWSType_RoutingTypeType
     */
    public $RoutingType;
}
