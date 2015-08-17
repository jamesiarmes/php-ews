<?php

namespace jamesiarmes\PEWS\API\Messages;

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
     * @property \jamesiarmes\PEWS\API\TypeTest\TimeZoneDefinitionType[]
     * $timeZoneDefinitions
     */
    protected $timeZoneDefinitions = null;


}

