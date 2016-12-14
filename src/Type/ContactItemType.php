<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ContactItemType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents a contact item in the Exchange store.
 *
 * @package php-ews\Type
 */
class ContactItemType extends ItemType
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
     * Represents the Home page (Web address) for the contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $BusinessHomePage;

    /**
     * Contains the names of a contact's children.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $Children;

    /**
     * Represents the collection of companies that are associated with a
     * contact.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
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
     * This property is read-only.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\CompleteNameType
     */
    public $CompleteName;

    /**
     * Describes whether the contact is located in the Exchange store or the
     * Active Directory directory service.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ContactSourceType
     */
    public $ContactSource;

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
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
     */
    public $DirectReports;

    /**
     * Defines the display name of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Represents a collection of e-mail addresses for a contact.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressDictionaryType
     */
    public $EmailAddresses;

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
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\FileAsMappingType
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
     * @var \jamesiarmes\PhpEws\Type\ImAddressDictionaryType
     */
    public $ImAddresses;

    /**
     * Represents the initials of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Initials;

    /**
     * Represents the job title of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $JobTitle;

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
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
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
     * Contains a value that encodes the Microsoft Exchange certificate of a
     * contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfBinaryType
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
     * Represents a collection of telephone numbers for a contact.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\PhoneNumberDictionaryType
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
     * @var \jamesiarmes\PhpEws\Type\PhysicalAddressDictionaryType
     */
    public $PhysicalAddresses;

    /**
     * Represents the display types for physical addresses.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\PhysicalAddressIndexType
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
     * Represents the name of a contact's spouse/partner.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SpouseName;

    /**
     * Represents the surname of a contact.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Surname;

    /**
     * Contains a value that encodes the SMIME certificate of a contact.
     *
     * @since Exchange 2010 SP2
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfBinaryType
     */
    public $UserSMIMECertificate;

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
