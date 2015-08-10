<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ContactItemType
 *
 *
 * XSD Type: ContactItemType
 *
 * @method ContactItemType getFileAs()
 * @method ContactItemType setFileAs($fileAs)
 * @method ContactItemType getFileAsMapping()
 * @method ContactItemType setFileAsMapping($fileAsMapping)
 * @method ContactItemType getDisplayName()
 * @method ContactItemType setDisplayName($displayName)
 * @method ContactItemType getGivenName()
 * @method ContactItemType setGivenName($givenName)
 * @method ContactItemType getInitials()
 * @method ContactItemType setInitials($initials)
 * @method ContactItemType getMiddleName()
 * @method ContactItemType setMiddleName($middleName)
 * @method ContactItemType getNickname()
 * @method ContactItemType setNickname($nickname)
 * @method ContactItemType getCompleteName()
 * @method ContactItemType setCompleteName($completeName)
 * @method ContactItemType getCompanyName()
 * @method ContactItemType setCompanyName($companyName)
 * @method ContactItemType getEmailAddresses()
 * @method ContactItemType setEmailAddresses($emailAddresses)
 * @method ContactItemType getPhysicalAddresses()
 * @method ContactItemType setPhysicalAddresses($physicalAddresses)
 * @method ContactItemType getPhoneNumbers()
 * @method ContactItemType setPhoneNumbers($phoneNumbers)
 * @method ContactItemType getAssistantName()
 * @method ContactItemType setAssistantName($assistantName)
 * @method ContactItemType getBirthday()
 * @method ContactItemType setBirthday($birthday)
 * @method ContactItemType getBusinessHomePage()
 * @method ContactItemType setBusinessHomePage($businessHomePage)
 * @method ContactItemType getChildren()
 * @method ContactItemType setChildren($children)
 * @method ContactItemType getCompanies()
 * @method ContactItemType setCompanies($companies)
 * @method ContactItemType getContactSource()
 * @method ContactItemType setContactSource($contactSource)
 * @method ContactItemType getDepartment()
 * @method ContactItemType setDepartment($department)
 * @method ContactItemType getGeneration()
 * @method ContactItemType setGeneration($generation)
 * @method ContactItemType getImAddresses()
 * @method ContactItemType setImAddresses($imAddresses)
 * @method ContactItemType getJobTitle()
 * @method ContactItemType setJobTitle($jobTitle)
 * @method ContactItemType getManager()
 * @method ContactItemType setManager($manager)
 * @method ContactItemType getMileage()
 * @method ContactItemType setMileage($mileage)
 * @method ContactItemType getOfficeLocation()
 * @method ContactItemType setOfficeLocation($officeLocation)
 * @method ContactItemType getPostalAddressIndex()
 * @method ContactItemType setPostalAddressIndex($postalAddressIndex)
 * @method ContactItemType getProfession()
 * @method ContactItemType setProfession($profession)
 * @method ContactItemType getSpouseName()
 * @method ContactItemType setSpouseName($spouseName)
 * @method ContactItemType getSurname()
 * @method ContactItemType setSurname($surname)
 * @method ContactItemType getWeddingAnniversary()
 * @method ContactItemType setWeddingAnniversary($weddingAnniversary)
 * @method ContactItemType getHasPicture()
 * @method ContactItemType setHasPicture($hasPicture)
 * @method ContactItemType getPhoneticFullName()
 * @method ContactItemType setPhoneticFullName($phoneticFullName)
 * @method ContactItemType getPhoneticFirstName()
 * @method ContactItemType setPhoneticFirstName($phoneticFirstName)
 * @method ContactItemType getPhoneticLastName()
 * @method ContactItemType setPhoneticLastName($phoneticLastName)
 * @method ContactItemType getAlias()
 * @method ContactItemType setAlias($alias)
 * @method ContactItemType getNotes()
 * @method ContactItemType setNotes($notes)
 * @method ContactItemType getPhoto()
 * @method ContactItemType setPhoto($photo)
 * @method ContactItemType getUserSMIMECertificate()
 * @method ContactItemType setUserSMIMECertificate($userSMIMECertificate)
 * @method ContactItemType getMSExchangeCertificate()
 * @method ContactItemType setMSExchangeCertificate($mSExchangeCertificate)
 * @method ContactItemType getDirectoryId()
 * @method ContactItemType setDirectoryId($directoryId)
 * @method ContactItemType getManagerMailbox()
 * @method ContactItemType setManagerMailbox($managerMailbox)
 * @method ContactItemType getDirectReports()
 * @method ContactItemType setDirectReports($directReports)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\CompleteNameType $completeName
     */
    protected $completeName = null;

    /**
     * @property string $companyName
     */
    protected $companyName = null;

    /**
     * @property array $emailAddresses
     */
    protected $emailAddresses = null;

    /**
     * @property array $physicalAddresses
     */
    protected $physicalAddresses = null;

    /**
     * @property array $phoneNumbers
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

    /**
     * @property string $businessHomePage
     */
    protected $businessHomePage = null;

    /**
     * @property array $children
     */
    protected $children = null;

    /**
     * @property array $companies
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
     * @property array $imAddresses
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
     * @property mixed $photo
     */
    protected $photo = null;

    /**
     * @property array $userSMIMECertificate
     */
    protected $userSMIMECertificate = null;

    /**
     * @property array $mSExchangeCertificate
     */
    protected $mSExchangeCertificate = null;

    /**
     * @property string $directoryId
     */
    protected $directoryId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SingleRecipientType $managerMailbox
     */
    protected $managerMailbox = null;

    /**
     * @property array $directReports
     */
    protected $directReports = null;


}

