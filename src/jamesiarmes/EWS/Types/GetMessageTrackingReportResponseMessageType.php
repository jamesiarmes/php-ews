<?php
/**
 * Contains GetMessageTrackingReportResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the response for the GetMessageTrackingReport operation.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend ResponseMessageType.
 */
class GetMessageTrackingReportResponseMessageType extends EWSType
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
     * Provides a text description of the status of the response.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $MessageText;

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

    /**
     * Contains a single message that is returned in a GetMessageTrackingReport
     * operation.
     *
     * @since Exchange 2010 SP1
     *
     * @var MessageTrackingReportType
     */
    public $MessageTrackingReport;

    /**
     * Provides timing and performance information that is used for reporting in
     * a DataCenter.
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
     * @since Exchange 2010
     *
     * @var ArrayOfArraysOfTrackingPropertiesType
     */
    public $Errors;

    /**
     * Contains a list of one or more tracking properties.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfTrackingPropertiesType
     */
    public $Properties;
}
