<?php
/**
 * Contains EmailAddressType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents an e-mail address.
 *
 * @package jamesiarmes\EWS\Types
 */
class EmailAddressType extends EWSType
{
    /**
     * The e-mail address that is represented.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $EmailAddress;

    /**
     * Specifies the item identifier for the e-mail address.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Specifies the type of mailbox.
     *
     * @since Exchange 2007
     *
     * @var MailboxTypeType
     */
    public $MailboxType;

    /**
     * Specifies the name of the mailbox that is associated with the e-mail
     * address.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Name;

    /**
     * Specifies the type of routing for the e-mail address.
     *
     * @since Exchange 2007
     *
     * @var RoutingTypeType
     */
    public $RoutingType;
}
