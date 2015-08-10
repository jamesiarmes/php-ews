<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: FindMessageTrackingReportResponseMessageType
 *
 * @method FindMessageTrackingReportResponseMessageType getDiagnostics()
 * @method FindMessageTrackingReportResponseMessageType
 * setDiagnostics($diagnostics)
 * @method FindMessageTrackingReportResponseMessageType
 * getMessageTrackingSearchResults()
 * @method FindMessageTrackingReportResponseMessageType
 * setMessageTrackingSearchResults($messageTrackingSearchResults)
 * @method FindMessageTrackingReportResponseMessageType getExecutedSearchScope()
 * @method FindMessageTrackingReportResponseMessageType
 * setExecutedSearchScope($executedSearchScope)
 * @method FindMessageTrackingReportResponseMessageType getErrors()
 * @method FindMessageTrackingReportResponseMessageType setErrors($errors)
 * @method FindMessageTrackingReportResponseMessageType getProperties()
 * @method FindMessageTrackingReportResponseMessageType setProperties($properties)
 */
class FindMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @property array $diagnostics
     */
    protected $diagnostics = null;

    /**
     * @property array $messageTrackingSearchResults
     */
    protected $messageTrackingSearchResults = null;

    /**
     * @property string $executedSearchScope
     */
    protected $executedSearchScope = null;

    /**
     * @property array $errors
     */
    protected $errors = null;

    /**
     * @property array $properties
     */
    protected $properties = null;


}

