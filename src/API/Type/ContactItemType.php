<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing ContactItemType
 *
 *
 * XSD Type: ContactItemType
 *
 * @method string getFileAs()
 * @method ContactItemType setFileAs(string $fileAs)
 * @method string getFileAsMapping()
 * @method ContactItemType setFileAsMapping(string $fileAsMapping)
 * @method string getDisplayName()
 * @method ContactItemType setDisplayName(string $displayName)
 * @method string getGivenName()
 * @method ContactItemType setGivenName(string $givenName)
 * @method string getInitials()
 * @method ContactItemType setInitials(string $initials)
 * @method string getMiddleName()
 * @method ContactItemType setMiddleName(string $middleName)
 * @method string getNickname()
 * @method ContactItemType setNickname(string $nickname)
 * @method CompleteNameType getCompleteName()
 * @method ContactItemType setCompleteName(CompleteNameType $completeName)
 * @method string getCompanyName()
 * @method ContactItemType setCompanyName(string $companyName)
 * @method ContactItemType addEmailAddresses(EmailAddressDictionaryEntryType $emailAddresses)
 * @method EmailAddressDictionaryEntryType[] getEmailAddresses()
 * @method ContactItemType setEmailAddresses(array $emailAddresses)
 * @method ContactItemType addPhysicalAddresses(PhysicalAddressDictionaryEntryType $physicalAddresses)
 * @method PhysicalAddressDictionaryEntryType[] getPhysicalAddresses()
 * @method ContactItemType setPhysicalAddresses(array $physicalAddresses)
 * @method ContactItemType addPhoneNumbers(PhoneNumberDictionaryEntryType $phoneNumbers)
 * @method PhoneNumberDictionaryEntryType[] getPhoneNumbers()
 * @method ContactItemType setPhoneNumbers(array $phoneNumbers)
 * @method string getAssistantName()
 * @method ContactItemType setAssistantName(string $assistantName)
 * @method \DateTime getBirthday()
 * @method ContactItemType setBirthday(\DateTime $birthday)
 * @method string getBusinessHomePage()
 * @method ContactItemType setBusinessHomePage(string $businessHomePage)
 * @method ContactItemType addChildren(string $children)
 * @method string[] getChildren()
 * @method ContactItemType setChildren(array $children)
 * @method ContactItemType addCompanies(string $companies)
 * @method string[] getCompanies()
 * @method ContactItemType setCompanies(array $companies)
 * @method string getContactSource()
 * @method ContactItemType setContactSource(string $contactSource)
 * @method string getDepartment()
 * @method ContactItemType setDepartment(string $department)
 * @method string getGeneration()
 * @method ContactItemType setGeneration(string $generation)
 * @method ContactItemType addImAddresses(ImAddressDictionaryEntryType $imAddresses)
 * @method ImAddressDictionaryEntryType[] getImAddresses()
 * @method ContactItemType setImAddresses(array $imAddresses)
 * @method string getJobTitle()
 * @method ContactItemType setJobTitle(string $jobTitle)
 * @method string getManager()
 * @method ContactItemType setManager(string $manager)
 * @method string getMileage()
 * @method ContactItemType setMileage(string $mileage)
 * @method string getOfficeLocation()
 * @method ContactItemType setOfficeLocation(string $officeLocation)
 * @method string getPostalAddressIndex()
 * @method ContactItemType setPostalAddressIndex(string $postalAddressIndex)
 * @method string getProfession()
 * @method ContactItemType setProfession(string $profession)
 * @method string getSpouseName()
 * @method ContactItemType setSpouseName(string $spouseName)
 * @method string getSurname()
 * @method ContactItemType setSurname(string $surname)
 * @method \DateTime getWeddingAnniversary()
 * @method ContactItemType setWeddingAnniversary(\DateTime $weddingAnniversary)
 * @method boolean isHasPicture()
 * @method boolean getHasPicture()
 * @method ContactItemType setHasPicture(boolean $hasPicture)
 * @method string getPhoneticFullName()
 * @method ContactItemType setPhoneticFullName(string $phoneticFullName)
 * @method string getPhoneticFirstName()
 * @method ContactItemType setPhoneticFirstName(string $phoneticFirstName)
 * @method string getPhoneticLastName()
 * @method ContactItemType setPhoneticLastName(string $phoneticLastName)
 * @method string getAlias()
 * @method ContactItemType setAlias(string $alias)
 * @method string getNotes()
 * @method ContactItemType setNotes(string $notes)
 * @method string getPhoto()
 * @method ContactItemType setPhoto(string $photo)
 * @method ContactItemType addUserSMIMECertificate(string $userSMIMECertificate)
 * @method string[] getUserSMIMECertificate()
 * @method ContactItemType setUserSMIMECertificate(array $userSMIMECertificate)
 * @method ContactItemType addMSExchangeCertificate(string $mSExchangeCertificate)
 * @method string[] getMSExchangeCertificate()
 * @method ContactItemType setMSExchangeCertificate(array $mSExchangeCertificate)
 * @method string getDirectoryId()
 * @method ContactItemType setDirectoryId(string $directoryId)
 * @method SingleRecipientType getManagerMailbox()
 * @method ContactItemType setManagerMailbox(SingleRecipientType $managerMailbox)
 * @method ContactItemType addDirectReports(EmailAddressType $directReports)
 * @method EmailAddressType[] getDirectReports()
 * @method ContactItemType setDirectReports(array $directReports)
 */
class ContactItemType extends ItemType
{

    /**
     * @var string
     */
    protected $fileAs = null;

    /**
     * @var string
     */
    protected $fileAsMapping = null;

    /**
     * @var string
     */
    protected $displayName = null;

    /**
     * @var string
     */
    protected $givenName = null;

    /**
     * @var string
     */
    protected $initials = null;

    /**
     * @var string
     */
    protected $middleName = null;

    /**
     * @var string
     */
    protected $nickname = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\CompleteNameType
     */
    protected $completeName = null;

    /**
     * @var string
     */
    protected $companyName = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressDictionaryEntryType[]
     */
    protected $emailAddresses = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PhysicalAddressDictionaryEntryType[]
     */
    protected $physicalAddresses = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\PhoneNumberDictionaryEntryType[]
     */
    protected $phoneNumbers = null;

    /**
     * @var string
     */
    protected $assistantName = null;

    /**
     * @var \DateTime
     */
    protected $birthday = null;

    protected $_typeMap = array(
        'birthday' => 'dateTime',
        'weddingAnniversary' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $businessHomePage = null;

    /**
     * @var string[]
     */
    protected $children = null;

    /**
     * @var string[]
     */
    protected $companies = null;

    /**
     * @var string
     */
    protected $contactSource = null;

    /**
     * @var string
     */
    protected $department = null;

    /**
     * @var string
     */
    protected $generation = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ImAddressDictionaryEntryType[]
     */
    protected $imAddresses = null;

    /**
     * @var string
     */
    protected $jobTitle = null;

    /**
     * @var string
     */
    protected $manager = null;

    /**
     * @var string
     */
    protected $mileage = null;

    /**
     * @var string
     */
    protected $officeLocation = null;

    /**
     * @var string
     */
    protected $postalAddressIndex = null;

    /**
     * @var string
     */
    protected $profession = null;

    /**
     * @var string
     */
    protected $spouseName = null;

    /**
     * @var string
     */
    protected $surname = null;

    /**
     * @var \DateTime
     */
    protected $weddingAnniversary = null;

    /**
     * @var boolean
     */
    protected $hasPicture = null;

    /**
     * @var string
     */
    protected $phoneticFullName = null;

    /**
     * @var string
     */
    protected $phoneticFirstName = null;

    /**
     * @var string
     */
    protected $phoneticLastName = null;

    /**
     * @var string
     */
    protected $alias = null;

    /**
     * @var string
     */
    protected $notes = null;

    /**
     * @var string
     */
    protected $photo = null;

    /**
     * @var string[]
     */
    protected $userSMIMECertificate = null;

    /**
     * @var string[]
     */
    protected $mSExchangeCertificate = null;

    /**
     * @var string
     */
    protected $directoryId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SingleRecipientType
     */
    protected $managerMailbox = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $directReports = null;
}
