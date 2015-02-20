<?php
/**
 * Contains TentativelyAcceptItemType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a Tentative reply to a meeting request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend WellKnownResponseObjectType.
 */
class TentativelyAcceptItemType extends EWSType
{
    /**
     * Contains the item or file that is attached to an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfAttachmentsType
     */
    public $Attachments;

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
     * Represents the Internet message header name for a given header within the
     * headers collection.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

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
     * Represents the message class of an item.
     *
     * @since Exchange 2007
     *
     * @var ItemClassType
     */
    public $ItemClass;

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
     * Identifies the sender of an item.
     *
     * @since Exchange 2007
     *
     * @var SingleRecipientType
     */
    public $Sender;

    /**
     * Identifies the sensitivity of an item.
     *
     * @since Exchange 2007
     *
     * @var SensitivityChoicesType
     */
    public $Sensitivity;

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
