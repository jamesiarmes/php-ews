<?php
/**
 * Contains PostReplyItemType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a reply to a post item.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend PostReplyItemBaseType.
 */
class PostReplyItemType extends EWSType
{
    /**
     * Contains the items or files that are attached to an item in the Exchange
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
     * Represents a collection of strings that identify categories to which an
     * item in the mailbox belongs.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfStringsType
     */
    public $Categories;

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
     * Contains a binary ID that represents the thread to which this message
     * belongs.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a base 64 class?
     */
    public $ConversationIndex;

    /**
     * Represents the conversation identifier.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * Represents the culture for a given item in a mailbox.
     *
     * Specified by using the RFC 1766 culture identifier; for example, en-US.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Culture;

    /**
     * Represents the date and time that a given item in the mailbox was
     * created.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeCreated;

    /**
     * Represents the date and time that an item in a mailbox was received.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeReceived;

    /**
     * Represents the date and time that an item in a mailbox was sent.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeSent;

    /**
     * Represents the display string that is used for the contents of the Cc
     * line.
     *
     * This is the concatenated string of all Cc recipient display names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayCc;

    /**
     * Represents the display string that is used for the contents of the To
     * box.
     *
     * This is the concatenated string of all To recipient display names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayTo;

    /**
     * Contains the client's rights based on the permission settings for the
     * item or folder.
     *
     * This element is read-only.
     *
     * @since Exchange 2007 SP1
     *
     * @var EffectiveRightsType
     */
    public $EffectiveRights;

    /**
     * Identifies extended properties on folders and items.
     *
     * @since Exchange 2007
     *
     * @var ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * Represents the address from which the message was sent.
     *
     * @since Exchange 2007
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * Represents a property that is set to true if an item has an attachment.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $HasAttachments;

    /**
     * Describes the importance of an item.
     *
     * @since Exchange 2007
     *
     * @var ImportanceChoicesType
     */
    public $Importance;

    /**
     * Represents the identifier of the item to which this item is a reply.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $InReplyTo;

    /**
     * Represents the collection of all Internet message headers that are
     * contained in an item in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Represents the Internet message identifier of an item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * Indicates whether the sender of an item requests a delivery receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * Represents whether an item has not yet been sent.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDraft;

    /**
     * Indicates whether a user sent an item to him or herself.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsFromMe;

    /**
     * Indicates whether a message has been read.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * Indicates whether the sender of an item requests a read receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * Indicates whether the item had previously been sent.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsResend;

    /**
     * Indicates whether a response to an e-mail message is requested.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsResponseRequested;

    /**
     * Indicates whether an item has been submitted to the Outbox default
     * folder.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsSubmitted;

    /**
     * Indicates whether the item has been modified.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsUnmodified;

    /**
     * Represents the identifier of the parent folder that contains the item or
     * folder.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var ItemClassType
     */
    public $ItemClass;

    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ItemId;

    /**
     * Contains the native Multipurpose Internet Mail Extensions (MIME) stream
     * of an object that is represented in base64Binary format.
     *
     * @since Exchange 2007
     *
     * @var MimeContentType
     */
    public $MimeContent;

    /**
     * Represents the new body content of a post item.
     *
     * @since Exchange 2007
     *
     * @var BodyType
     */
    public $NewBodyContent;

    /**
     * Represents the identifier of the parent folder that contains the item or
     * folder.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var FolderIdType
     */
    public $ParentFolderId;

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
     * Represents the Usenet header that is used to associate replies with their
     * original messages.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $References;

    /**
     * Represents the date and time when the event occurs.
     *
     * This is used by the ReminderMinutesBeforeStart element to determine when
     * the reminder is displayed.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $ReminderDueBy;

    /**
     * Indicates whether a reminder has been set for an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $ReminderIsSet;

    /**
     * Represents the number of minutes before an event when a reminder is
     * displayed.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $ReminderMinutesBeforeStart;

    /**
     * Identifies a set of addresses to which replies should be sent.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfRecipientsType
     */
    public $ReplyTo;

    /**
     * Contains a collection of all the response objects that are associated
     * with an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var NonEmptyArrayOfResponseObjectsType
     */
    public $ResponseObjects;

    /**
     * Identifies the sender of an item.
     *
     * @since Exchange 2007
     *
     * @var SingleRecipientType
     */
    public $Sender;

    /**
     * Indicates the sensitivity level of an item.
     *
     * @since Exchange 2007
     *
     * @var SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Represents the size in bytes of an item.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $Size;

    /**
     * Represents the subject for Exchange store items and response objects.
     *
     * The subject is limited to 255 characters.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Subject;

    /**
     * Contains a set of recipients of a message.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfRecipientsType
     */
    public $ToRecipients;
}
