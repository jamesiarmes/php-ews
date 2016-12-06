<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PersonaType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines a set of persona data.
 *
 * @package php-ews\Type
 */
class PersonaType extends Type
{
    /**
     * Specifies an array of assistant names and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $AssistantNames;

    /**
     * Specifies an array of assistant phone numbers and the identifiers of
     * their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $AssistantPhoneNumbers;

    /**
     * Specifies an array of attribution information for one or more of the
     * contacts or Active Directory recipients aggregated into the associated
     * persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPersonaAttributionsType
     */
    public $Attributions;

    /**
     * Specifies an array of birthdays, stored as strings, and the identifiers
     * of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Birthdays;

    /**
     * Specifies an array of BodyContentAttributedValue elements.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfBodyContentAttributedValuesType
     */
    public $Bodies;

    /**
     * Specifies an array of business addresses and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPostalAddressAttributedValuesType
     */
    public $BusinessAddresses;

    /**
     * Specifies an array of business home pages and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $BusinessHomePages;

    /**
     * Specifies an array of business phone numbers and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $BusinessPhoneNumbers;

    /**
     * Specifies an array of BusinessPhoneNumber2 elements and the identifiers
     * of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $BusinessPhoneNumbers2;

    /**
     * Specifies an array of call-back phone numbers and the identifiers of
     * their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $CallbackPhones;

    /**
     * Specifies an array of car phone numbers and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $CarPhones;

    /**
     * Specifies an array of child names and identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringArrayAttributedValuesType
     */
    public $Children;

    /**
     * Represents the company name that is associated with a contact.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $CompanyName;

    /**
     * Contains an array of company names and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $CompanyNames;

    /**
     * Contains the sort key for a company name.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $CompanyNameSortKey;

    /**
     * Specifies when the persona was created.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $CreationTime;

    /**
     * Represents the contact's department at work.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Department;

    /**
     * Specifies an array of department names and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Departments;

    /**
     * Contains the display name of the persona.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayName;

    /**
     * Specifies the display name of the associated persona in the format,
     * "First Name", "Last Name".
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayNameFirstLast;

    /**
     * Specifies the header for the display name, first name first.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayNameFirstLastHeader;

    /**
     * Contains the sort key for a display name in first name, last name order.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayNameFirstLastSortKey;

    /**
     * Specifies the display name of the associated persona in the format, "Last
     * Name", "First Name".
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayNameLastFirst;

    /**
     * Specifies the header for the display name, last name first.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayNameLastFirstHeader;

    /**
     * Contains the sort key for a display name in last name, first name order.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayNameLastFirstSortKey;

    /**
     * Specifies the prefix of the display name of the associated persona.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $DisplayNamePrefix;

    /**
     * Specifies an array of display name prefixes and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $DisplayNamePrefixes;

    /**
     * Specifies an array of display names and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $DisplayNames;

    /**
     * Specifies the fully resolved SMTP address for the site mailbox or the
     * associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $EmailAddress;

    /**
     * Specifies an array of all email addresses of the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfEmailAddressesType
     */
    public $EmailAddresses;

    /**
     * Specifies an array of EmailAddressAttributedValue values and the
     * identifiers of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfEmailAddressAttributedValuesType
     */
    public $Emails1;

    /**
     * Contains an array of EmailAddressAttributedValue values and the
     * identifiers of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfEmailAddressAttributedValuesType
     */
    public $Emails2;

    /**
     * Specifies an array of EmailAddressAttributedValue values and the
     * identifiers of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfEmailAddressAttributedValuesType
     */
    public $Emails3;

    /**
     * Contains the extended properties used for a persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfExtendedPropertyAttributedValueType
     */
    public $ExtendedProperties;

    /**
     * Represents how a contact or distribution list is filed in the Contacts
     * folder.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $FileAs;

    /**
     * Specifies the header for the File As option.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $FileAsHeader;

    /**
     * Specifies the FileAs identifier.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $FileAsId;

    /**
     * Specifies an array of StringAttributedValue elements and the identifiers
     * of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $FileAsIds;

    /**
     * Specifies an array of StringAttributedValue elements and the identifiers
     * of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $FileAses;

    /**
     * Contains a list of folder identifiers.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfFolderIdType
     */
    public $FolderIds;

    /**
     * Represents a generational abbreviation that follows the full name of a
     * contact.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Generation;

    /**
     * Specifies an array of generation values and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Generations;

    /**
     * Contains a contact's given name.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $GivenName;

    /**
     * Specifies an array of given name values and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $GivenNames;

    /**
     * Specifies an array of hobbies and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Hobbies;

    /**
     * Specifies an array of home addresses and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPostalAddressAttributedValuesType
     */
    public $HomeAddresses;

    /**
     * Specifies the city of the home address of the associated persona.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $HomeCity;

    /**
     * Contains the sort key for the home city.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $HomeCitySortKey;

    /**
     * Specifies an array of home fax numbers and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $HomeFaxes;

    /**
     * Specifies an array of home phone numbers and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $HomePhones;

    /**
     * Specifies an array of HomePhone2 values and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $HomePhones2;

    /**
     * Contains the primary instant messaging address of a persona.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $ImAddress;

    /**
     * Specifies an array of instant message addresses and the identifiers of
     * their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $ImAddresses;

    /**
     * Specifies an array of instant message addresses and the identifiers of
     * their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $ImAddresses2;

    /**
     * Specifies an array of instant message addresses and the identifiers of
     * their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $ImAddresses3;

    /**
     * Specifies an array of initials values and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Initials;

    /**
     * Represents the location of a meeting, appointment, or persona.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Location;

    /**
     * Specifies an array of location values and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Locations;

    /**
     * Specifies an array of manager names and the identifiers of their source
     * attributions for a persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Managers;

    /**
     * Represents the middle name of a contact.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $MiddleName;

    /**
     * Specifies an array of middle name values and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $MiddleNames;

    /**
     * Specifies an array of mobile phone numbers and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $MobilePhones;

    /**
     * Specifies an array of MobilePhone values and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $MobilePhones2;

    /**
     * Represents the nickname of a contact.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Nickname;

    /**
     * Specifies an array of nickname values and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Nicknames;

    /**
     * Specifies an array of office locations and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $OfficeLocations;

    /**
     * Specifies an array of organizational main phone numbers and the
     * identifiers of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $OrganizationMainPhones;

    /**
     * Specifies an array of address values and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPostalAddressAttributedValuesType
     */
    public $OtherAddresses;

    /**
     * Specifies an array of fax phone number values and the identifiers of
     * their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $OtherFaxes;

    /**
     * Specifies an array of phone values and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $OtherPhones2;

    /**
     * Specifies an array of telephone values and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $OtherTelephones;

    /**
     * Specifies an array of pager phone numbers and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $Pagers;

    /**
     * Specifies the persona identifier for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
     */
    public $PersonaId;

    /**
     * Specifies whether the information in the associated persona is complete
     * or partial.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $PersonaObjectStatus;

    /**
     * Specifies the type of the persona.
     *
     * For example, a person or a distribution list.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $PersonaType;

    /**
     * Specifies an array of home pages and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $PersonalHomePages;

    /**
     * Specifies the default phone number of the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Type\PersonaPhoneNumberType
     */
    public $PhoneNumber;

    /**
     * Specifies an array of Profession values and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Professions;

    /**
     * Specifies an array of radio phone numbers and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $RadioPhones;

    /**
     * Specifies an integer that represents how relevant the associated persona
     * is to the client.
     *
     * This element is read-only.
     *
     * @since Exchange 2013
     *
     * @var integer
     */
    public $RelevanceScore;

    /**
     * Specifies an array of school names and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Schools;

    /**
     * Specifies an array of spouse or partner names and the identifiers of
     * their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $SpouseNames;

    /**
     * Represents the surname of a contact.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Surname;

    /**
     * Specifies an array of surname values and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Surnames;

    /**
     * Specifies an array of Telex numbers and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $TelexNumbers;

    /**
     * Represents the title of a contact.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Title;

    /**
     * Specifies an array of job titles and the identifiers of their source
     * attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $Titles;

    /**
     * Specifies an array of TTY or TDD text telephone numbers and the
     * identifiers of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $TTYTDDPhoneNumbers;

    /**
     * Specifies an array of wedding anniversary dates, stored as strings, and
     * the identifiers of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $WeddingAnniversaries;

    /**
     * Specifies the city where the associated persona works.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $WorkCity;

    /**
     * Contains the sort key for the work city values associated with a persona.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $WorkCitySortKey;

    /**
     * Specifies an array of work fax numbers and the identifiers of their
     * source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfPhoneNumberAttributedValuesType
     */
    public $WorkFaxes;

    /**
     * Specifies the phonetic Japanese company name of the associated persona.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $YomiCompanyName;

    /**
     * Specifies an array of phonetic Japanese company names and the identifiers
     * of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $YomiCompanyNames;

    /**
     * Represents the name that is used in Japan for the searchable or phonetic
     * spelling for a Japanese first name.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $YomiFirstName;

    /**
     * Specifies an array of phonetic Japanese first names and the identifiers
     * of their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $YomiFirstNames;

    /**
     * Represents the name that is used in Japan for the searchable or phonetic
     * spelling for a Japanese last name.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $YomiLastName;

    /**
     * Specifies an array of phonetic Japanese last names and the identifiers of
     * their source attributions for the associated persona.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringAttributedValuesType
     */
    public $YomiLastNames;
}
