<?php
/**
 * Contains EWSType_ContactItemType.
 */

/**
 * Represents a contact item in the Exchange store.
 *
 * @package php-ews\Types
 */
class EWSType_ContactItemType extends EWSType
{
    /**
     * Contains the email alias of a contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $Alias;

    /**
     * Represents an assistant to a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $AssistantName;

    /**
     * Contains the items or files that are attached to an item in the Exchange
     * store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfAttachmentsType
     */
    public $Attachments;

    /**
     * Represents the birth date of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Birthday;

    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var EWSType_BodyType
     */
    public $Body;

    /**
     * Represents the Home page (Web address) for the contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $BusinessHomePage;

    /**
     * Represents a collection of strings that identify to which categories an
     * item in the mailbox belongs.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Categories;

    /**
     * Contains the names of a contact's children.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Children;

    /**
     * Represents the collection of companies that are associated with a
     * contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Companies;

    /**
     * Represents the company name that is associated with a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $CompanyName;

    /**
     * Represents the complete name of a contact.
     *
     * This propery is read-only.
     *
     * @since Exchange 2007
     *
     * @var EWSType_CompleteNameType
     */
    public $CompleteName;

    /**
     * Describes whether the contact is located in the Exchange store or the
     * Active Directory directory service.
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
     * Represents the contact's department at work.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Department;

    /**
     * Contains the directory ID of a contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $DirectoryId;

    /**
     * Contains SMTP information that identifies the direct reports of a
     * contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var EWSType_SingleRecipientType
     */
    public $DirectReports;

    /**
     * Represents the display string that is used for the contents of the Cc
     * box.
     *
     * This is the concatenated string of all Cc recipient display names.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayCc;

    /**
     * Defines the display name of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayName;

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
     * @var EWSType_EffectiveRightsType
     */
    public $EffectiveRights;

    /**
     * Represents a collection of e-mail addresses for a contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_EmailAddressDictionaryType
     */
    public $EmailAddresses;

    /**
     * Identifies extended properties on folders and items.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ExtendedPropertyType
     */
    public $ExtendedProperty;

    /**
     * Represents how a contact is filed in the Contacts folder.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $FileAs;

    /**
     * Defines how to construct what is displayed for a contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FileAsMappingType
     */
    public $FileAsMapping;

    /**
     * Represents a generational abbreviation that follows the full name of a
     * contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Generation;

    /**
     * Contains a contact's given name.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $GivenName;

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
     * Indicates whether the contact item has a file attachment that represents
     * the contact's picture.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $HasPicture;

    /**
     * Represents a collection of instant messaging addresses for a contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ImAddressDictionaryType
     */
    public $ImAddresses;

    /**
     * Describes the importance of an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ImportanceChoicesType
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
     * Represents the initials of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Initials;

    /**
     * Represents the collection of all Internet message headers that are
     * contained within an item in a mailbox.
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
     * Represents the message class of an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ItemClassType
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
     * @var EWSType_ItemIdType
     */
    public $ItemId;

    /**
     * Represents the job title of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $JobTitle;

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
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastModifiedTime;

    /**
     * Represents a contact's manager.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Manager;

    /**
     * Contains SMTP information that identifies the manager mailbox of the
     * contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var EWSType_SingleRecipientType
     */
    public $ManagerMailbox;

    /**
     * Represents the middle name of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MiddleName;

    /**
     * Represents mileage for a contact item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Mileage;

    /**
     * Contains the native MIME stream of an object that is represented in
     * base64Binary format.
     *
     * @since Exchange 2007
     *
     * @var EWSType_MimeContentType
     */
    public $MimeContent;

    /**
     * Contains a value that encodes the Microsoft Exchange certificate of a
     * contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var EWSType_ArrayOfBinaryType
     */
    public $MSExchangeCertificate;

    /**
     * Represents the nickname of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Nickname;

    /**
     * Contains supplementary contact information.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $Notes;

    /**
     * Represents the office location of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $OfficeLocation;

    /**
     * Represents the identifier of the parent folder that contains the item or
     * folder.
     *
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var EWSType_FolderIdType
     */
    public $ParentFolderId;

    /**
     * Represents a collection of telephone numbers for a contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PhoneNumberDictionaryType
     */
    public $PhoneNumbers;

    /**
     * Contains the full name of a contact, including the first and last name,
     * spelled phonetically.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $PhoneticFullName;

    /**
     * Contains the first name of a contact, spelled phonetically.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $PhoneticFirstName;

    /**
     * Contains the last name of a contact, spelled phonetically.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $PhoneticLastName;

    /**
     * Contains a value that encodes the photo of a contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var string
     */
    public $Photo;

    /**
     * Contains a collection of physical addresses that are associated with a
     * contact.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PhysicalAddressDictionaryType
     */
    public $PhysicalAddresses;

    /**
     * Represents the display types for physical addresses.
     *
     * @since Exchange 2007
     *
     * @var EWSType_PhysicalAddressIndexType
     */
    public $PostalAddressIndex;

    /**
     * Represents the profession of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Profession;

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
     * Represents the number of minutes before an event that a reminder is
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
     * Contains a collection of all the response objects that are associated
     * with an item in the Exchange store.
     *
     * @since Exchange 2007
     *
     * @var EWSType_NonEmptyArrayOfResponseObjectsType
     */
    public $ResponseObjects;

    /**
     * Indicates the sensitivity level of an item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_SensitivityChoicesType
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
     * Represents the name of a contact's spouse/partner.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SpouseName;

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
     * Represents the surname of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Surname;

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
     * Contains a value that encodes the SMIME certificate of a contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var EWSType_ArrayOfBinaryType
     */
    public $UserSMIMECertificate;

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

    /**
     * Contains the wedding anniversary of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $WeddingAnniversary;
}
