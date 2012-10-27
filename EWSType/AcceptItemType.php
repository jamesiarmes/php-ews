<?php
/**
 * Represents an Accept reply to a meeting request.
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AcceptItemType type.
 */
class EWSType_AcceptItemType extends EWSType
{
    /**
     * Represents the message class of an item.
     *
     * @var EWSType_ItemClassType
     */
    public $ItemClass;

    /**
     * Indicates the sensitivity level of an item.
     *
     * @var EWSType_SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Represents the actual body content of a message.
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * Contains the item or file that is attached to an item in the Exchange
     * store.
     *
     * @var EWSType_ArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Represents the Internet message header name for a given header within the
     * headers collection.
     *
     * @var EWSType_NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Identifies the sender of an item.
     *
     * @var EWSType_SingleRecipientType
     */
    public $Sender;

    /**
     * Contains a set of recipients of an item. These are the primary recipients
     * of an item.
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * Represents a collection of recipients that will receive a copy of the
     * message.
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * Represents a collection of recipients to receive a blind carbon copy
     * (Bcc) of an e-mail.
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * Indicates whether the sender of an item requests a read receipt.
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * Indicates whether the sender of an item requests a delivery receipt.
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * Identifies the item to which the response object refers.
     *
     * @var EWSType_ItemIdType
     */
    public $ReferenceItemId;

    /**
     * Identifies the delegate in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_SingleRecipientType
     */
    public $ReceivedBy;

    /**
     * Identifies the principal in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_SingleRecipientType
     */
    public $ReceivedRepresenting;
}
