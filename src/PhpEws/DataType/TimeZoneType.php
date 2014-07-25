<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the TimeZoneType type
 */
class TimeZoneType extends DataType
{
    /**
     * BaseOffset property
     *
     * @var duration
     */
    public $BaseOffset;

    /**
     * Standard property
     *
     * @var TimeChangeType
     */
    public $Standard;

    /**
     * Daylight property
     *
     * @var TimeChangeType
     */
    public $Daylight;

    /**
     * TimeZoneName property
     *
     * @var string
     */
    public $TimeZoneName;
}
