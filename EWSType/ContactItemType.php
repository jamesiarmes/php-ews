<?php
/**
 * Definition of the ContactItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ContactItemType type
 */
class EWSType_ContactItemType extends EWSType
{
    /**
     * FileAs property
     *
     * @var string
     */
    public $FileAs;

    /**
     * FileAsMapping property
     *
     * @var EWSType_FileAsMappingType
     */
    public $FileAsMapping;

    /**
     * DisplayName property
     *
     * @var string
     */
    public $DisplayName;

    /**
     * GivenName property
     *
     * @var string
     */
    public $GivenName;

    /**
     * Initials property
     *
     * @var string
     */
    public $Initials;

    /**
     * MiddleName property
     *
     * @var string
     */
    public $MiddleName;

    /**
     * Nickname property
     *
     * @var string
     */
    public $Nickname;

    /**
     * CompleteName property.
     *
     * This propery is read-only.
     *
     * @var EWSType_CompleteNameType
     */
    public $CompleteName;

    /**
     * CompanyName property
     *
     * @var string
     */
    public $CompanyName;

    /**
     * EmailAddresses property
     *
     * @var EWSType_EmailAddressDictionaryType
     */
    public $EmailAddresses;

    /**
     * PhysicalAddresses property
     *
     * @var EWSType_PhysicalAddressDictionaryType
     */
    public $PhysicalAddresses;

    /**
     * PhoneNumbers property
     *
     * @var EWSType_PhoneNumberDictionaryType
     */
    public $PhoneNumbers;

    /**
     * AssistantName property
     *
     * @var string
     */
    public $AssistantName;

    /**
     * Birthday property
     *
     * @var string
     */
    public $Birthday;

    /**
     * BusinessHomePage property
     *
     * @var string
     */
    public $BusinessHomePage;

    /**
     * Children property
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Children;

    /**
     * Companies property
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Companies;

    /**
     * ContactSource property
     *
     * @var EWSType_ContactSourceType
     */
    public $ContactSource;

    /**
     * Department property
     *
     * @var string
     */
    public $Department;

    /**
     * Generation property
     *
     * @var string
     */
    public $Generation;

    /**
     * ImAddresses property
     *
     * @var EWSType_ImAddressDictionaryType
     */
    public $ImAddresses;

    /**
     * JobTitle property
     *
     * @var string
     */
    public $JobTitle;

    /**
     * Manager property
     *
     * @var string
     */
    public $Manager;

    /**
     * Mileage property
     *
     * @var string
     */
    public $Mileage;

    /**
     * OfficeLocation property
     *
     * @var string
     */
    public $OfficeLocation;

    /**
     * PostalAddressIndex property
     *
     * @var EWSType_PhysicalAddressIndexType
     */
    public $PostalAddressIndex;

    /**
     * Profession property
     *
     * @var string
     */
    public $Profession;

    /**
     * SpouseName property
     *
     * @var string
     */
    public $SpouseName;

    /**
     * Surname property
     *
     * @var string
     */
    public $Surname;

    /**
     * WeddingAnniversary property
     *
     * @var string
     */
    public $WeddingAnniversary;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'FileAs',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'FileAsMapping',
                'required' => false,
                'type' => 'FileAsMappingType',
            ),
            array(
                'name' => 'DisplayName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'GivenName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Initials',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'MiddleName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Nickname',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'CompleteName',
                'required' => false,
                'type' => 'CompleteNameType',
            ),
            array(
                'name' => 'CompanyName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'EmailAddresses',
                'required' => false,
                'type' => 'EmailAddressDictionaryType',
            ),
            array(
                'name' => 'PhysicalAddresses',
                'required' => false,
                'type' => 'PhysicalAddressDictionaryType',
            ),
            array(
                'name' => 'PhoneNumbers',
                'required' => false,
                'type' => 'PhoneNumberDictionaryType',
            ),
            array(
                'name' => 'AssistantName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Birthday',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'BusinessHomePage',
                'required' => false,
                'type' => 'anyURI',
            ),
            array(
                'name' => 'Children',
                'required' => false,
                'type' => 'ArrayOfStringsType',
            ),
            array(
                'name' => 'Companies',
                'required' => false,
                'type' => 'ArrayOfStringsType',
            ),
            array(
                'name' => 'ContactSource',
                'required' => false,
                'type' => 'ContactSourceType',
            ),
            array(
                'name' => 'Department',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Generation',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'ImAddresses',
                'required' => false,
                'type' => 'ImAddressDictionaryType',
            ),
            array(
                'name' => 'JobTitle',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Manager',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Mileage',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'OfficeLocation',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'PostalAddressIndex',
                'required' => false,
                'type' => 'PhysicalAddressIndexType',
            ),
            array(
                'name' => 'Profession',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'SpouseName',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Surname',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'WeddingAnniversary',
                'required' => false,
                'type' => 'dateTime',
            ),
        );
    }
}
