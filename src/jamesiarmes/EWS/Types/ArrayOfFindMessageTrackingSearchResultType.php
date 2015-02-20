<?php
/**
 * Contains ArrayOfFindMessageTrackingSearchResultType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a list of records that match the search criteria.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfFindMessageTrackingSearchResultType extends EWSType
{
    /**
     * Contains a single message result for a FindMessageTrackingReportResponse
     * element.
     *
     * @since Exchange 2010 SP1
     *
     * @var FindMessageTrackingSearchResultType
     */
    public $MessageTrackingSearchResult;
}
