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
     * @var EWSType_SerializableTimeZone
     */
    public $TimeZone;

    /**
     * WorkingPeriodArray property
     *
     * @var EWSType_ArrayOfWorkingPeriod
     */
    public $WorkingPeriodArray;
}
