<?php
/**
 * Definition of the ItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ItemType type
 */
class EWSType_ItemType extends EWSType
{
    /**
     * Contains the native Multipurpose Internet Mail Extensions (MIME) stream
     * of an object that is represented in base64Binary format.
     *
     * @var EWSType_MimeContentType
     */
    public $MimeContent;

    /**
     * Contains the unique identifier and change key of an item in the Exchange
     * store.
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Represents the identifier of the parent folder that contains the item or
     * folder.
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

    /**
     * Represents the message class of an item.
     *
     * @var EWSType_ItemClassType
     */
    public $ItemClass;

    /**
     * Represents the subject for Exchange store items and response objects.
     *
     * @var string
     */
    public $Subject;

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
     * Contains the items or files that are attached to an item in the Exchange
     * store. This property is read-only.
     *
     * @var EWSType_NonEmptyArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Represents the date and time that an item in a mailbox was received.
     *
     * @var EWSType_dateTime
     */
    public $DateTimeReceived;

    /**
     * Represents the size in bytes of an item. This property is read-only.
     *
     * @var integer
     */
    public $Size;

    /**
     * Represents a collection of strings that identify the categories to which
     * an item in the mailbox belongs.
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Categories;

    /**
     * Describes the importance of an item.
     *
     * @var EWSType_ImportanceChoicesType
     */
    public $Importance;

    /**
     * Represents the identifier of the item to which this item is a reply.
     *
     * @var string
     */
    public $InReplyTo;

    /**
     * Indicates whether an item has been submitted to the Outbox default
     * folder.
     *
     * @var boolean
     */
    public $IsSubmitted;

    /**
     * Indicates whether an item has not yet been sent.
     *
     * @var boolean
     */
    public $IsDraft;

    /**
     * Indicates whether a user sent an item to him or herself.
     *
     * @var boolean
     */
    public $IsFromMe;

    /**
     * Indicates whether the item had previously been sent.
     *
     * @var boolean
     */
    public $IsResend;

    /**
     * Indicates whether the item has been modified.
     *
     * @var boolean
     */
    public $IsUnmodified;

    /**
     * Represents the collection of all Internet message headers that are
     * contained in an item in a mailbox.
     *
     * @var EWSType_NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Represents the date and time that an item in a mailbox was sent.
     *
     * @var EWSType_dateTime
     */
    public $DateTimeSent;

    /**
     * Represents the date and time that a given item in the mailbox was
     * created.
     *
     * @var EWSType_dateTime
     */
    public $DateTimeCreated;

    /**
     * Contains a collection of all the response objects that are associated
     * with an item in the Exchange store.
     *
     * @var EWSType_NonEmptyArrayOfResponseObjectsType
     */
    public $ResponseObjects;

    /**
     * Represents the date and time when the event occurs. This is used by the
     * ReminderMinutesBeforeStart element to determine when the reminder is
     * displayed.
     *
     * @var EWSType_dateTime
     */
    public $ReminderDueBy;

    /**
     * Indicates whether a reminder has been set for an item in the Exchange
     * store.
     *
     * @var boolean
     */
    public $ReminderIsSet;

    /**
     * Represents the number of minutes before an event when a reminder is
     * displayed.
     *
     * @var EWSType_ReminderMinutesBeforeStartType
     */
    public $ReminderMinutesBeforeStart;

    /**
     * Represents the display string that is used for the contents of the Cc
     * line. This is the concatenated string of all Cc recipient display names.
     *
     * @var string
     */
    public $DisplayCc;

    /**
     * Represents the display string that is used for the contents of the To
     * line. This is the concatenated string of all To recipient display names.
     *
     * @var string
     */
    public $DisplayTo;

    /**
     * Represents a property that is set to true if an item has at least one
     * visible attachment. This property is read-only.
     *
     * @var boolean
     */
    public $HasAttachments;

    /**
     * Identifies extended properties on folders and items.
     *
     * @var EWSType_ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * Represents the culture for a given item in a mailbox.
     *
     * @var EWSType_language
     */
    public $Culture;

    /**
     * Contains the client's rights based on the permission settings for the
     * item or folder. This property is read-only.
     *
     * @var EWSType_EffectiveRightsType
     */
    public $EffectiveRights;

    /**
     * Contains the display name of the last user to modify an item.
     *
     * @var string
     */
    public $LastModifiedName;

    /**
     * Indicates when an item was last modified.
     *
     * @var EWSType_dateTime
     */
    public $LastModifiedTime;

    /**
     * Indicates whether the item is associated with a folder.
     *
     * @var boolean
     */
    public $IsAssociated;

    /**
     * Represents a URL to concatenate to the Microsoft Office Outlook Web App
     * endpoint to read an item in Outlook Web App.
     *
     * @var string
     */
    public $WebClientReadFormQueryString;

    /**
     * Represents a URL to concatenate to the Microsoft Office Outlook Web App
     * endpoint to edit an item in Outlook Web App.
     *
     * @var string
     */
    public $WebClientEditFormQueryString;

    /**
     * Contains the identifier of an item or conversation.
     *
     * @var EWSType_ItemIdType
     */
    public $ConversationId;

    /**
     * Represents an HTML fragment or plain text which represents the unique
     * body of this conversation.
     *
     * @var EWSType_BodyType
     */
    public $UniqueBody;
}
