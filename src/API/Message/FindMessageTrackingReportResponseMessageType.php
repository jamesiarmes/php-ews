<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: FindMessageTrackingReportResponseMessageType
 *
 * @method array getDiagnostics()
 * @method FindMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method array getMessageTrackingSearchResults()
 * @method FindMessageTrackingReportResponseMessageType setMessageTrackingSearchResults(array $messageTrackingSearchResults)
 * @method string getExecutedSearchScope()
 * @method FindMessageTrackingReportResponseMessageType setExecutedSearchScope(string $executedSearchScope)
 * @method array getErrors()
 * @method FindMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method array getProperties()
 * @method FindMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\FindMessageTrackingSearchResultType[]
     */
    protected $messageTrackingSearchResults = null;

    /**
     * @var string
     */
    protected $executedSearchScope = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
