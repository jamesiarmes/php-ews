<?php
/**
 * Contains EWSType_ConvertIdType.
 */

/**
 * Defines a request to convert item and folder identifiers between supported
 * Exchange formats.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_ConvertIdType extends EWSType
{
    /**
     * Describes the identifier format that will be returned for all the
     * converted identifiers.
     *
     * The DestinationFormat is described by the IdFormatType.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_IdFormatType
     */
    public $DestinationFormat;

    /**
     * Contains the source identifiers to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;
}
