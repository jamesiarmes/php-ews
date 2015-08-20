<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetServerTimeZonesResponseMessageType
 *
 *
 * XSD Type: GetServerTimeZonesResponseMessageType
 *
 * @method GetServerTimeZonesResponseMessageType getTimeZoneDefinitions()
 * @method GetServerTimeZonesResponseMessageType setTimeZoneDefinitions(array $timeZoneDefinitions)
 */
class GetServerTimeZonesResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\TimeZoneDefinitionType[]
     * $timeZoneDefinitions
     */
    protected $timeZoneDefinitions = null;


}

