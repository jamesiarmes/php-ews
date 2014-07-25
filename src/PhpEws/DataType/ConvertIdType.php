<?php

namespace PhpEws\DataType;

use PhpEws\DataType;
/**
 * Definition of the ConvertIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ConvertIdType type
 */
class ConvertIdType extends DataType
{
    /**
     * SourceIds property
     *
     * @var EWSType_NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;

    /**
     * DestinationFormat property
     *
     * @var EWSType_IdFormatType
     */
    public $DestinationFormat;
}
