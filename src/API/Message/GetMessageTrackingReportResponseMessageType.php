<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetMessageTrackingReportResponseMessageType
 *
 *
 * XSD Type: GetMessageTrackingReportResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\MessageTrackingReportType getMessageTrackingReport()
 * @method GetMessageTrackingReportResponseMessageType setMessageTrackingReport(\jamesiarmes\PEWS\API\Type\MessageTrackingReportType $messageTrackingReport)
 * @method GetMessageTrackingReportResponseMessageType addDiagnostics(string $diagnostics)
 * @method string[] getDiagnostics()
 * @method GetMessageTrackingReportResponseMessageType setDiagnostics(array $diagnostics)
 * @method GetMessageTrackingReportResponseMessageType addErrors(\jamesiarmes\PEWS\API\Type\ArrayOfTrackingPropertiesType $errors)
 * @method \jamesiarmes\PEWS\API\Type\ArrayOfTrackingPropertiesType[] getErrors()
 * @method GetMessageTrackingReportResponseMessageType setErrors(array $errors)
 * @method GetMessageTrackingReportResponseMessageType addProperties(\jamesiarmes\PEWS\API\Type\TrackingPropertyType $properties)
 * @method \jamesiarmes\PEWS\API\Type\TrackingPropertyType[] getProperties()
 * @method GetMessageTrackingReportResponseMessageType setProperties(array $properties)
 */
class GetMessageTrackingReportResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\MessageTrackingReportType
     */
    protected $messageTrackingReport = null;

    /**
     * @var string[]
     */
    protected $diagnostics = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ArrayOfTrackingPropertiesType[]
     */
    protected $errors = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
