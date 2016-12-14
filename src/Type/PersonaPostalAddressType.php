<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\PersonaPostalAddressType.
 */

namespace jamesiarmes\PhpEws\Type;

use jamesiarmes\PhpEws\Type;

/**
 * Defines a postal address associated with a persona.
 *
 * @package php-ews\Type
 */
class PersonaPostalAddressType extends Type
{
    /**
     * Specifies the accuracy of the latitude and longitude of the associated
     * postal address.
     *
     * @since Exchange 2013
     *
     * @var float
     */
    public $Accuracy;

    /**
     * Specifies the altitude of a postal address.
     *
     * @since Exchange 2013
     *
     * @var float
     */
    public $Altitude;

    /**
     * Specifies the accuracy of the altitude property for a postal address.
     *
     * @since Exchange 2013
     *
     * @var float
     */
    public $AltitudeAccuracy;

    /**
     * Represents the city name that is associated with a contact.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $City;

    /**
     * Identifies a country identifier in a postal address.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Country;

    /**
     * Specifies the formatted display value of the associated postal address.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $FormattedAddress;

    /**
     * Specifies the latitude of the location of the associated postal address.
     *
     * @since Exchange 2013
     *
     * @var float
     */
    public $Latitude;

    /**
     * Specifies information about the origin of the associated postal address,
     * for example, a contact or a telephone book.
     *
     * @since Exchange 2013
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\LocationSourceType
     */
    public $LocationSource;

    /**
     * Contains a string specifying a Uniform Resource Identifier (URI) of the
     * associated postal address.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $LocationUri;

    /**
     * Specifies the longitude of the location of the associated postal address.
     *
     * @since Exchange 2013
     *
     * @var float
     */
    public $Longitude;

    /**
     * Specifies the "post office box" portion of a postal address.
     *
     * @since Exchange 2013
     *
     * @var type
     */
    public $PostOfficeBox;

    /**
     * Represents the postal code for a contact item.
     *
     * @since Exchange 2013
     *
     * @var type
     */
    public $PostalCode;

    /**
	 * Represents the state of residence for a contact item.
	 *
	 * @since Exchange 2013
	 *
	 * @var string
	 */
	public $State;

    /**
     * Represents a street address for a contact item.
     *
     * @since Exchange 2013
     *
     * @var string
     */
    public $Street;

    /**
	 * Specifies the type of postal address or phone number.
     *
     * For example, "Home" or "Business".
	 *
	 * @since Exchange 2013
	 *
	 * @var string
	 */
	public $Type;
}
