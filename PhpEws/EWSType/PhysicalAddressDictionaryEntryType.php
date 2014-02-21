<?php
/**
 * Definition of the PhysicalAddressDictionaryEntryType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the PhysicalAddressDictionaryEntryType type
 */
class PhysicalAddressDictionaryEntryType extends PhpEws\EWSType
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
     * @var PhysicalAddressKeyType
     */
    public $Key;
}
