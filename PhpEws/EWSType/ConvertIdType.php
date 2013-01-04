<?php
/**
 * Definition of the ConvertIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the ConvertIdType type
 */
class ConvertIdType extends EWSType
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
