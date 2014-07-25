<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the TimeChangeType type
 */
class TimeChangeType extends DataType
{
    /**
     * Offset property
     *
     * @var duration
     */
    public $Offset;

    /**
     * RelativeYearlyRecurrence property
     *
     * @var RelativeYearlyRecurrencePatternType
     */
    public $RelativeYearlyRecurrence;

    /**
     * AbsoluteDate property
     *
     * @var date
     */
    public $AbsoluteDate;

    /**
     * Time property
     *
     * @var time
     */
    public $Time;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
