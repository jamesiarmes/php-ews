<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: GetMessageTrackingReportResponseMessageType
 *
 * @method GetMessageTrackingReportResponseMessageType getMessageTrackingReport()
 * @method GetMessageTrackingReportResponseMessageType
 * setMessageTrackingReport($messageTrackingReport)
 * @method GetMessageTrackingReportResponseMessageType getDiagnostics()
 * @method GetMessageTrackingReportResponseMessageType setDiagnostics($diagnostics)
 * @method GetMessageTrackingReportResponseMessageType getErrors()
 * @method GetMessageTrackingReportResponseMessageType setErrors($errors)
 * @method GetMessageTrackingReportResponseMessageType getProperties()
 * @method GetMessageTrackingReportResponseMessageType setProperties($properties)
 */
class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\MessageTrackingReportType
     * $messageTrackingReport
     */
    protected $messageTrackingReport = null;

    /**
     * @property array $diagnostics
     */
    protected $diagnostics = null;

    /**
     * @property array $errors
     */
    protected $errors = null;

    /**
     * @property array $properties
     */
    protected $properties = null;


}

