<?php
/**
 * Contains FindMessageTrackingReportResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the status and result of a single FindMessageTrackingReport
 * Operation request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ResponseMessageType.
 */
class FindMessageTrackingReportResponseMessageType extends EWSType
{
    /**
     * Currently unused and reserved for future use.
     *
     * This element contains a value of 0.
     *
     * @since Exchange 2010
     *
     * @var integer
     */
    public $DescriptiveLinkKey;

    /**
     * Contains information that will be used to produce various statistical
     * reports for the tracking feature in a DataCenter.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $Diagnostics;

    /**
     * Contains a property bag to store errors that are returned through the Web
     * service.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfArraysOfTrackingPropertiesType
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
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageText;

    /**
     * Contains and array of messages that match the search requirements.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfFindMessageTrackingSearchResultType
     */
    public $MessageTrackingSearchResults;

    /**
     * Provides additional error response information.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Determine if we can use SimpleXML or DOMDocument here.
     */
    public $MessageXml;

    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfTrackingPropertiesType
     */
    public $Properties;

    /**
     * Describes the status of the response.
     *
     * @since Exchange 2010
     *
     * @var ResponseClassType
     */
    public $ResponseClass;

    /**
     * Provides an error code that identifies the specific error that the
     * request encountered.
     *
     * @since Exchange 2010
     *
     * @var ResponseCodeType
     */
    public $ResponseCode;
}
