<?php
/**
 * Contains ReplyAllToItemType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a reply to the sender and all identified recipients of an item in
 * the Exchange store.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend EWS_ReplyToItemType?
 * @todo Extend SmartResponseType.
 */
class ReplyAllToItemType extends EWSType
{
    /**
     * Represents a collection of recipients to receive a blind carbon copy
     * (Bcc) of an e-mail.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var BodyType
     */
    public $Body;

    /**
     * Represents a collection of recipients that will receive a copy of the
     * message.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * Represents the address from which the message was sent.
     *
     * @since Exchange 2007
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * Indicates whether the sender of an item requests a delivery receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * Indicates whether the sender of an item requests a read receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * Represents the new body content of a message.
     *
     * @since Exchange 2007
     *
     * @var BodyType
     */
    public $NewBodyContent;

    /**
     * Identifies the delegate in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var SingleRecipientType
     */
    public $ReceivedBy;

    /**
     * Identifies the principal in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var SingleRecipientType
     */
    public $ReceivedRepresenting;

    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;

    /**
     * Represents the subject property of Exchange store items.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Subject;

    /**
     * Contains a set of recipients of an item.
     *
     * These are the primary recipients of an item.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfRecipientsType
     */
    public $ToRecipients;
}
