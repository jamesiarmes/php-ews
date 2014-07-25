<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * The Period element defines the name, time offset, and unique identifier for a
 * specific stage of the time zone.
 */
class NonEmptyArrayOfPeriodsType extends DataType
{
    /**
     * The name, time offset, and unique identifier for a specific stage of the
     * time zone.
     *
     * @var PeriodType
     */
    public $Period;
}
