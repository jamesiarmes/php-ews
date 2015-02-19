<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\ConvertIdType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Defines a request to convert item and folder identifiers between supported
 * Exchange formats.
 *
 * @package php-ews\Types
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
     * @var \jamesiarmes\PhpEws\Enumeration\IdFormatType
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
