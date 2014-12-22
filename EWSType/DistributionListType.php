<?php
/**
 * Contains EWSType_DistributionListType.
 */

/**
 * Represents a distribution list.
 *
 * @package php-ews\Types
 */
class EWSType_DistributionListType extends EWSType
{
    /**
     * Contains the items or files that are attached to a distribution list item
     * in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfAttachmentsType 
     */
    public $Attachments;

    /**
     * Represents the actual body content of a distribution list item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * Represents a collection of strings that identify to which categories a
     * distribution list item in the mailbox belongs.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Categories;

    /**
     * Describes whether the contact is located in the Exchange store or in
     * Active Directory Domain Services (AD DS).
     *
     * @since Exchange 2007
     *
     * @var EWSType_ContactSourceType
     */
    public $ContactSource;

    /**
     * Contains the identifier of an item or conversation.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ItemIdType
     */
    public $ConversationId;

    /**
     * Represents the culture for a distribution list item in a mailbox.
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
     * Represents the date and time that a distribution list item in a mailbox
     * was received.
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
     * line
     *
     * This is the concatenated string of all Cc recipient display names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayCc;

    /**
     * Defines the display name of a distribution list.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Represents the display string that is used for the contents of the To
     * line.
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
     * @since Exchange 2007
     *
     * @var EWSType_EffectiveRightsType
     */
    public $EffectiveRights;

    /**
     * Identifies extended properties on a distribution list item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * Represents how a distribution list is filed in the Contacts folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FileAs;

    /**
     * Represents a property that is set to true if an item has at least one
     * visible attachment.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $HasAttachments;

    /**
     * Describes the importance of a distribution list item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ImportanceChoicesType
     */
    public $Importance;

    /**
     * Represents the identifier of the item which this item is a reply.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $InReplyTo;

    /**
     * Represents the collection of all Internet message headers contained
     * within an item in a mailbox.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfInternetHeadersType
     */
    public $InternetMessageHeaders;

    /**
     * Indicates whether the item is associated with a folder.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $IsAssociated;

    /**
     * Represents whether an item has not yet been sent.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDraft;

    /**
     * Indicates whether a user sent an item to itself.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsFromMe;

    /**
     * Indicates whether the item had previously been sent.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsResend;

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
     * Represents the message class of a distribution list item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemClassType
     */
    public $ItemClass;

    /**
     * Contains the unique identifier and change key of a distribution list item
     * in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Contains the display name of the last user to modify an item.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $LastModifiedName;

    /**
     * Indicates when an item was last modified.
     *
     * @since Exchange 2010
     *
     * @var @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastModifiedTime;

    /**
     * Contains a list of members of the distribution list.
     *
     * @since Exchange 2010
     *
     * @var EWSType_MemberListType
     */
    public $Members;

    /**
     * Contains the native MIME stream of an object represented in base64Binary
     * format.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MimeContentType
     */
    public $MimeContent;

    /**
     * Represents the identifier of the parent folder that contains the
     * distribution list item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

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
     * Represents the number of minutes before an event when a reminder is
     * displayed.
     *
     * @since Exchange 2007
     *
     * @var integer
     *
     * @todo Determine if we need a ReminderMinutesBeforeStartType
     * implementation.
     */
    public $ReminderMinutesBeforeStart;

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
     * Contains a collection of all the response objects that are associated
     * with an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfResponseObjectsType
     */
    public $ResponseObjects;

    /**
     * Contains the status for a distribution list item's sensitivity.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SensitivityChoicesType
     */
    public $Sensitivity;

    /**
     * Represents the size, in bytes, of a distribution list item.
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
     * @since Exchange 2007
     *
     * @var string
     */
    public $Subject;

    /**
     * Represents an HTML fragment or plain text which represents the unique
     * body of this conversation.
     *
     * @since Exchange 2010
     *
     * @var EWSType_BodyType
     */
    public $UniqueBody;

    /**
     * Represents a URL to concatenate to the Outlook Web App endpoint to edit
     * an item in Outlook Web App.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $WebClientEditFormQueryString;

    /**
     * Represents a URL to concatenate to the Microsoft Office Outlook Web App
     * endpoint to read an item in Outlook Web App.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $WebClientReadFormQueryString;
}
