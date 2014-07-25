<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the WorkingHours type
 */
class WorkingHours extends DataType
{
    /**
     * TimeZone property
     *
     * @var SerializableTimeZone
     */
    public $TimeZone;

    /**
     * WorkingPeriodArray property
     *
     * @var ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
