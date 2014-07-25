<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the GetServerTimeZonesType type
 */
class GetServerTimeZonesType extends DataType
{
    /**
     * Collection of timezone identifiers to get the definition for. Omit to get
     * the definition of all timezones supported by the server.
     *
     * @var EWSType_NonEmptyArrayOfTimeZoneIdType
     */
    public $Ids;
}
