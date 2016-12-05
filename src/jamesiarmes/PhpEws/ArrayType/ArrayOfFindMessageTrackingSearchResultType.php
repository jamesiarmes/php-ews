<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfFindMessageTrackingSearchResultType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents a list of records that match the search criteria.
 *
 * @package php-ews\Array
 */
class ArrayOfFindMessageTrackingSearchResultType extends ArrayType
{
    /**
     * Contains a single message result for a FindMessageTrackingReportResponse
     * element.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\FindMessageTrackingSearchResultType[]
     */
    public $MessageTrackingSearchResult = array();
}
