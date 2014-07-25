<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ContactItemType type
 */
class ContactItemType extends DataType
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
     * @var FileAsMappingType
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
     * @var CompleteNameType
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
     * @var EmailAddressDictionaryType
     */
    public $EmailAddresses;

    /**
     * PhysicalAddresses property
     *
     * @var PhysicalAddressDictionaryType
     */
    public $PhysicalAddresses;

    /**
     * PhoneNumbers property
     *
     * @var PhoneNumberDictionaryType
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
     * @var ArrayOfStringsType
     */
    public $Children;

    /**
     * Companies property
     *
     * @var ArrayOfStringsType
     */
    public $Companies;

    /**
     * ContactSource property
     *
     * @var ContactSourceType
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
     * @var ImAddressDictionaryType
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
     * @var PhysicalAddressIndexType
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
}
