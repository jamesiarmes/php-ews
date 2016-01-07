<?php
/**
 * Contains EWSType_GetServerTimeZonesResponseMessageType.
 */

/**
 * Represents the status and result of a single GetServerTimeZones operation
 * request.
 *
 * @package php-ews\Types
 *
 * @todo Extends EWSType_ResponseMessageType
 */
class EWSType_GetServerTimeZonesResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageText;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ResponseCodeType
     */
    public $ResponseCode;

    /**
     * Contains an array of time zone definitions.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfTimeZoneDefinitionType
     */
    public $TimeZoneDefinitions;
}
