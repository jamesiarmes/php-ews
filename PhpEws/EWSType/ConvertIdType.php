<?php
/**
 * Definition of the ConvertIdType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the ConvertIdType type
 */
class ConvertIdType extends PhpEws\EWSType
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
