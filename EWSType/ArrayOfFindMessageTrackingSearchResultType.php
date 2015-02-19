<?php
/**
 * Contains EWSType_ArrayOfFindMessageTrackingSearchResultType.
 */

/**
 * Represents a list of records that match the search criteria.
 *
 * @package php-ews\Type
 */
class EWSType_ArrayOfFindMessageTrackingSearchResultType extends EWSType
{
    /**
     * Contains a single message result for a FindMessageTrackingReportResponse
     * element.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\FindMessageTrackingSearchResultType
     */
    public $MessageTrackingSearchResult;
}
