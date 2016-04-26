<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing FindMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: FindMessageTrackingReportResponseMessageType
 *
 * @method FindMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method string[] getDiagnostics()
 * @method FindMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method FindMessageTrackingReportResponseMessageType addMessageTrackingSearchResults(\jamesiarmes\PEWS\API\Type\FindMessageTrackingSearchResultType $messageTrackingSearchResults)
 * @method \jamesiarmes\PEWS\API\Type\FindMessageTrackingSearchResultType[] getMessageTrackingSearchResults()
 * @method FindMessageTrackingReportResponseMessageType setMessageTrackingSearchResults(array $messageTrackingSearchResults)
 * @method string getExecutedSearchScope()
 * @method FindMessageTrackingReportResponseMessageType setExecutedSearchScope(string $executedSearchScope)
 * @method FindMessageTrackingReportResponseMessageType addErrors(\jamesiarmes\PEWS\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method \jamesiarmes\PEWS\API\Type\ArrayOfTrackingPropertiesType[] getErrors()
 * @method FindMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method FindMessageTrackingReportResponseMessageType addProperties(\jamesiarmes\PEWS\API\Type\TrackingPropertyType $properties)
 * @method \jamesiarmes\PEWS\API\Type\TrackingPropertyType[] getProperties()
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
