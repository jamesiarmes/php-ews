<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetServerTimeZonesResponseMessageType
 *
 *
 * XSD Type: GetServerTimeZonesResponseMessageType
 *
 * @method GetServerTimeZonesResponseMessageType addTimeZoneDefinitions(\jamesiarmes\PEWS\API\Type\TimeZoneDefinitionType $timeZoneDefinitions)
 * @method \jamesiarmes\PEWS\API\Type\TimeZoneDefinitionType[] getTimeZoneDefinitions()
 * @method GetServerTimeZonesResponseMessageType setTimeZoneDefinitions(array $timeZoneDefinitions)
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\TimeZoneDefinitionType[]
     */
    protected $timeZoneDefinitions = null;
}
