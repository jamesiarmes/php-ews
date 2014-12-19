<?php
/**
 * Contains EWSType_EmailAddressType.
 */

/**
 * Represents an e-mail address.
 *
 * @package php-ews\Types
 */
class EWSType_EmailAddressType extends EWSType
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
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Specifies the type of mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MailboxTypeType
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
     * @var EWSType_RoutingTypeType
     */
    public $RoutingType;
}
