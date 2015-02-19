<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\FindMessageTrackingReportResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents the status and result of a single FindMessageTrackingReport
 * Operation request.
 *
 * @package php-ews\Types
 */
class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{
    /**
     * Contains information that will be used to produce various statistical
     * reports for the tracking feature in a DataCenter.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $Diagnostics;

    /**
     * Contains a property bag to store errors that are returned through the Web
     * service.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfArraysOfTrackingPropertiesType
     */
    public $Errors;

    /**
     * Contains the scope of the search that was performed to get the search results.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $ExecutedSearchScope;

    /**
     * Contains and array of messages that match the search requirements.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfFindMessageTrackingSearchResultType
     */
    public $MessageTrackingSearchResults;

    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010 SP1
     *
     * @var EWSType_ArrayOfTrackingPropertiesType
     */
    public $Properties;
}
