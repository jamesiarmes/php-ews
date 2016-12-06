<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\FindMessageTrackingReportResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a single FindMessageTrackingReport
 * Operation request.
 *
 * @package php-ews\Response
 */
class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{
    /**
     * Contains information that will be used to produce various statistical
     * reports for the tracking feature in a DataCenter.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $Diagnostics;

    /**
     * Contains a property bag to store errors that are returned through the Web
     * service.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfArraysOfTrackingPropertiesType
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
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfFindMessageTrackingSearchResultType
     */
    public $MessageTrackingSearchResults;

    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfTrackingPropertiesType
     */
    public $Properties;
}
