<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ContactItemType
 *
 *
 * XSD Type: ContactItemType
 *
 * @method ContactItemType getFileAs()
 * @method ContactItemType setFileAs(string $fileAs)
 * @method ContactItemType getFileAsMapping()
 * @method ContactItemType setFileAsMapping(string $fileAsMapping)
 * @method ContactItemType getDisplayName()
 * @method ContactItemType setDisplayName(string $displayName)
 * @method ContactItemType getGivenName()
 * @method ContactItemType setGivenName(string $givenName)
 * @method ContactItemType getInitials()
 * @method ContactItemType setInitials(string $initials)
 * @method ContactItemType getMiddleName()
 * @method ContactItemType setMiddleName(string $middleName)
 * @method ContactItemType getNickname()
 * @method ContactItemType setNickname(string $nickname)
 * @method ContactItemType getCompleteName()
 * @method ContactItemType setCompleteName(CompleteNameType $completeName)
 * @method ContactItemType getCompanyName()
 * @method ContactItemType setCompanyName(string $companyName)
 * @method ContactItemType getEmailAddresses()
 * @method ContactItemType setEmailAddresses(array $emailAddresses)
 * @method ContactItemType getPhysicalAddresses()
 * @method ContactItemType setPhysicalAddresses(array $physicalAddresses)
 * @method ContactItemType getPhoneNumbers()
 * @method ContactItemType setPhoneNumbers(array $phoneNumbers)
 * @method ContactItemType getAssistantName()
 * @method ContactItemType setAssistantName(string $assistantName)
 * @method ContactItemType getBirthday()
 * @method ContactItemType setBirthday(\DateTime $birthday)
 * @method ContactItemType getBusinessHomePage()
 * @method ContactItemType setBusinessHomePage(string $businessHomePage)
 * @method ContactItemType getChildren()
 * @method ContactItemType setChildren(array $children)
 * @method ContactItemType getCompanies()
 * @method ContactItemType setCompanies(array $companies)
 * @method ContactItemType getContactSource()
 * @method ContactItemType setContactSource(string $contactSource)
 * @method ContactItemType getDepartment()
 * @method ContactItemType setDepartment(string $department)
 * @method ContactItemType getGeneration()
 * @method ContactItemType setGeneration(string $generation)
 * @method ContactItemType getImAddresses()
 * @method ContactItemType setImAddresses(array $imAddresses)
 * @method ContactItemType getJobTitle()
 * @method ContactItemType setJobTitle(string $jobTitle)
 * @method ContactItemType getManager()
 * @method ContactItemType setManager(string $manager)
 * @method ContactItemType getMileage()
 * @method ContactItemType setMileage(string $mileage)
 * @method ContactItemType getOfficeLocation()
 * @method ContactItemType setOfficeLocation(string $officeLocation)
 * @method ContactItemType getPostalAddressIndex()
 * @method ContactItemType setPostalAddressIndex(string $postalAddressIndex)
 * @method ContactItemType getProfession()
 * @method ContactItemType setProfession(string $profession)
 * @method ContactItemType getSpouseName()
 * @method ContactItemType setSpouseName(string $spouseName)
 * @method ContactItemType getSurname()
 * @method ContactItemType setSurname(string $surname)
 * @method ContactItemType getWeddingAnniversary()
 * @method ContactItemType setWeddingAnniversary(\DateTime $weddingAnniversary)
 * @method ContactItemType getHasPicture()
 * @method ContactItemType setHasPicture(boolean $hasPicture)
 * @method ContactItemType getPhoneticFullName()
 * @method ContactItemType setPhoneticFullName(string $phoneticFullName)
 * @method ContactItemType getPhoneticFirstName()
 * @method ContactItemType setPhoneticFirstName(string $phoneticFirstName)
 * @method ContactItemType getPhoneticLastName()
 * @method ContactItemType setPhoneticLastName(string $phoneticLastName)
 * @method ContactItemType getAlias()
 * @method ContactItemType setAlias(string $alias)
 * @method ContactItemType getNotes()
 * @method ContactItemType setNotes(string $notes)
 * @method ContactItemType getPhoto()
 * @method ContactItemType setPhoto(string $photo)
 * @method ContactItemType getUserSMIMECertificate()
 * @method ContactItemType setUserSMIMECertificate(array $userSMIMECertificate)
 * @method ContactItemType getMSExchangeCertificate()
 * @method ContactItemType setMSExchangeCertificate(array $mSExchangeCertificate)
 * @method ContactItemType getDirectoryId()
 * @method ContactItemType setDirectoryId(string $directoryId)
 * @method ContactItemType getManagerMailbox()
 * @method ContactItemType setManagerMailbox(SingleRecipientType $managerMailbox)
 * @method ContactItemType getDirectReports()
 * @method ContactItemType setDirectReports(array $directReports)
 */
class ContactItemType extends ItemType
{

    /**
     * @property string $fileAs
     */
    protected $fileAs = null;

    /**
     * @property string $fileAsMapping
     */
    protected $fileAsMapping = null;

    /**
     * @property string $displayName
     */
    protected $displayName = null;

    /**
     * @property string $givenName
     */
    protected $givenName = null;

    /**
     * @property string $initials
     */
    protected $initials = null;

    /**
     * @property string $middleName
     */
    protected $middleName = null;

    /**
     * @property string $nickname
     */
    protected $nickname = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\CompleteNameType $completeName
     */
    protected $completeName = null;

    /**
     * @property string $companyName
     */
    protected $companyName = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressDictionaryEntryType[]
     * $emailAddresses
     */
    protected $emailAddresses = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\PhysicalAddressDictionaryEntryType[]
     * $physicalAddresses
     */
    protected $physicalAddresses = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\PhoneNumberDictionaryEntryType[]
     * $phoneNumbers
     */
    protected $phoneNumbers = null;

    /**
     * @property string $assistantName
     */
    protected $assistantName = null;

    /**
     * @property \DateTime $birthday
     */
    protected $birthday = null;

    protected $_typeMap = array(
        'birthday' => 'dateTime',
        'weddingAnniversary' => 'dateTime',
    );

    /**
     * @property string $businessHomePage
     */
    protected $businessHomePage = null;

    /**
     * @property string[] $children
     */
    protected $children = null;

    /**
     * @property string[] $companies
     */
    protected $companies = null;

    /**
     * @property string $contactSource
     */
    protected $contactSource = null;

    /**
     * @property string $department
     */
    protected $department = null;

    /**
     * @property string $generation
     */
    protected $generation = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ImAddressDictionaryEntryType[] $imAddresses
     */
    protected $imAddresses = null;

    /**
     * @property string $jobTitle
     */
    protected $jobTitle = null;

    /**
     * @property string $manager
     */
    protected $manager = null;

    /**
     * @property string $mileage
     */
    protected $mileage = null;

    /**
     * @property string $officeLocation
     */
    protected $officeLocation = null;

    /**
     * @property string $postalAddressIndex
     */
    protected $postalAddressIndex = null;

    /**
     * @property string $profession
     */
    protected $profession = null;

    /**
     * @property string $spouseName
     */
    protected $spouseName = null;

    /**
     * @property string $surname
     */
    protected $surname = null;

    /**
     * @property \DateTime $weddingAnniversary
     */
    protected $weddingAnniversary = null;

    /**
     * @property boolean $hasPicture
     */
    protected $hasPicture = null;

    /**
     * @property string $phoneticFullName
     */
    protected $phoneticFullName = null;

    /**
     * @property string $phoneticFirstName
     */
    protected $phoneticFirstName = null;

    /**
     * @property string $phoneticLastName
     */
    protected $phoneticLastName = null;

    /**
     * @property string $alias
     */
    protected $alias = null;

    /**
     * @property string $notes
     */
    protected $notes = null;

    /**
     * @property string $photo
     */
    protected $photo = null;

    /**
     * @property string[] $userSMIMECertificate
     */
    protected $userSMIMECertificate = null;

    /**
     * @property string[] $mSExchangeCertificate
     */
    protected $mSExchangeCertificate = null;

    /**
     * @property string $directoryId
     */
    protected $directoryId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SingleRecipientType $managerMailbox
     */
    protected $managerMailbox = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType[] $directReports
     */
    protected $directReports = null;


}

