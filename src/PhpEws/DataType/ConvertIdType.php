<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ConvertIdType type
 */
class ConvertIdType extends DataType
{
    /**
     * SourceIds property
     *
     * @var NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;

    /**
     * DestinationFormat property
     *
     * @var IdFormatType
     */
    public $DestinationFormat;
}
