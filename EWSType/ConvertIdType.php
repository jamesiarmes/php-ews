<?php
/**
 * Definition of the ConvertIdType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the ConvertIdType type
 */
class EWSType_ConvertIdType extends EWSType
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
