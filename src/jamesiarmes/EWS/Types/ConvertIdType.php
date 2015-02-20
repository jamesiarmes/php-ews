<?php
/**
 * Contains ConvertIdType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to convert item and folder identifiers between supported
 * Exchange formats.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseRequestType.
 */
class ConvertIdType extends EWSType
{
    /**
     * Describes the identifier format that will be returned for all the
     * converted identifiers.
     *
     * The DestinationFormat is described by the IdFormatType.
     *
     * @since Exchange 2007 SP1
     *
     * @var IdFormatType
     */
    public $DestinationFormat;

    /**
     * Contains the source identifiers to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;
}
