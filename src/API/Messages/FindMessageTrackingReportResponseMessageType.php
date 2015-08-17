<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: FindMessageTrackingReportResponseMessageType
 *
 * @method FindMessageTrackingReportResponseMessageType getDiagnostics()
 * @method FindMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method FindMessageTrackingReportResponseMessageType getMessageTrackingSearchResults()
 * @method FindMessageTrackingReportResponseMessageType setMessageTrackingSearchResults(array $messageTrackingSearchResults)
 * @method FindMessageTrackingReportResponseMessageType getExecutedSearchScope()
 * @method FindMessageTrackingReportResponseMessageType setExecutedSearchScope(string $executedSearchScope)
 * @method FindMessageTrackingReportResponseMessageType getErrors()
 * @method FindMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method FindMessageTrackingReportResponseMessageType getProperties()
 * @method FindMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @property string[] $diagnostics
     */
    protected $diagnostics = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\FindMessageTrackingSearchResultType[]
     * $messageTrackingSearchResults
     */
    protected $messageTrackingSearchResults = null;

    /**
     * @property string $executedSearchScope
     */
    protected $executedSearchScope = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfTrackingPropertiesType[] $errors
     */
    protected $errors = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TrackingPropertyType[] $properties
     */
    protected $properties = null;


}

