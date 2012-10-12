<?php
/**
 * Definition of the PhysicalAddressDictionaryEntryType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the PhysicalAddressDictionaryEntryType type
 */
class EWSType_PhysicalAddressDictionaryEntryType extends EWSType
{
    /**
     * Street property
     *
     * @var string
     */
    public $Street;

    /**
     * City property
     *
     * @var string
     */
    public $City;

    /**
     * State property
     *
     * @var string
     */
    public $State;

    /**
     * CountryOrRegion property
     *
     * @var string
     */
    public $CountryOrRegion;

    /**
     * PostalCode property
     *
     * @var string
     */
    public $PostalCode;

    /**
     * Key property
     *
     * @var EWSType_PhysicalAddressKeyType
     */
    public $Key;
}
