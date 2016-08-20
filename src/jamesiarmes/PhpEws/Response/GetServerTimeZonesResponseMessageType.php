<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetServerTimeZonesResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a single GetServerTimeZones operation
 * request.
 *
 * @package php-ews\Response
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of time zone definitions.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfTimeZoneDefinitionType
     */
    public $TimeZoneDefinitions;
}
