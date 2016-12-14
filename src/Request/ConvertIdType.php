<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\ConvertIdType.
 */

namespace jamesiarmes\PhpEws\Request;

use \jamesiarmes\PhpEws\Request;

/**
 * Defines a request to convert item and folder identifiers between supported
 * Exchange formats.
 *
 * @package php-ews\Request
 */
class ConvertIdType extends BaseRequestType
{
    /**
     * Describes the identifier format that will be returned for all the
     * converted identifiers.
     *
     * The DestinationFormat is described by the IdFormatType.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\IdFormatType
     */
    public $DestinationFormat;

    /**
     * Contains the source identifiers to convert.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAlternateIdsType
     */
    public $SourceIds;
}
