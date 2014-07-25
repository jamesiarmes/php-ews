<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 */
class NonEmptyArrayOfTimeZoneIdType extends DataType
{
    /**
     * Array of string timezone identifiers (ex. "Eastern Standard Time").
     *
     * @var array
     */
    public $Id;
}
