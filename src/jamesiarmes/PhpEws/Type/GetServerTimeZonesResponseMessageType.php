<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\GetServerTimeZonesResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single GetServerTimeZones operation
 * request.
 *
 * @package php-ews\Types
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{
    /**
     * Contains an array of time zone definitions.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfTimeZoneDefinitionType
     */
    public $TimeZoneDefinitions;
}
