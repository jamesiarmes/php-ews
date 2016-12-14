<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\EmailAddressType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Identifier for a fully resolved email address
 *
 * @package php-ews\Type
 */
class EmailAddressType extends BaseEmailAddressType
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
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $ItemId;

    /**
     * Specifies the type of mailbox.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MailboxTypeType
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
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\RoutingType
     */
    public $RoutingType;
}
