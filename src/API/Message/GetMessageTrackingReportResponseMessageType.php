<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: GetMessageTrackingReportResponseMessageType
 *
 * @method GetMessageTrackingReportResponseMessageType getMessageTrackingReport()
 * @method GetMessageTrackingReportResponseMessageType setMessageTrackingReport(\jamesiarmes\PEWS\API\Type\MessageTrackingReportType $messageTrackingReport)
 * @method GetMessageTrackingReportResponseMessageType getDiagnostics()
 * @method GetMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method GetMessageTrackingReportResponseMessageType getErrors()
 * @method GetMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method GetMessageTrackingReportResponseMessageType getProperties()
 * @method GetMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\MessageTrackingReportType
     * $messageTrackingReport
     */
    protected $messageTrackingReport = null;

    /**
     * @property string[] $diagnostics
     */
    protected $diagnostics = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ArrayOfTrackingPropertiesType[] $errors
     */
    protected $errors = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TrackingPropertyType[] $properties
     */
    protected $properties = null;
}
