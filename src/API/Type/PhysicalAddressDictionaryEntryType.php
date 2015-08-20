<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing PhysicalAddressDictionaryEntryType
 *
 *
 * XSD Type: PhysicalAddressDictionaryEntryType
 *
 * @method string getKey()
 * @method PhysicalAddressDictionaryEntryType setKey(string $key)
 * @method string getStreet()
 * @method PhysicalAddressDictionaryEntryType setStreet(string $street)
 * @method string getCity()
 * @method PhysicalAddressDictionaryEntryType setCity(string $city)
 * @method string getState()
 * @method PhysicalAddressDictionaryEntryType setState(string $state)
 * @method string getCountryOrRegion()
 * @method PhysicalAddressDictionaryEntryType setCountryOrRegion(string $countryOrRegion)
 * @method string getPostalCode()
 * @method PhysicalAddressDictionaryEntryType setPostalCode(string $postalCode)
 */
class PhysicalAddressDictionaryEntryType extends Type
{

    /**
     * @var string
     */
    protected $key = null;

    /**
     * @var string
     */
    protected $street = null;

    /**
     * @var string
     */
    protected $city = null;

    /**
     * @var string
     */
    protected $state = null;

    /**
     * @var string
     */
    protected $countryOrRegion = null;

    /**
     * @var string
     */
    protected $postalCode = null;
}
