<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: GetMessageTrackingReportResponseMessageType
 *
 * @method GetMessageTrackingReportResponseMessageType getMessageTrackingReport()
 * @method GetMessageTrackingReportResponseMessageType setMessageTrackingReport(\jamesiarmes\PEWS\API\TypeTest\MessageTrackingReportType $messageTrackingReport)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\MessageTrackingReportType
     * $messageTrackingReport
     */
    protected $messageTrackingReport = null;

    /**
     * @property string[] $diagnostics
     */
    protected $diagnostics = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ArrayOfTrackingPropertiesType[] $errors
     */
    protected $errors = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TrackingPropertyType[] $properties
     */
    protected $properties = null;


}

