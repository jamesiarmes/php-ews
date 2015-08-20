<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetMessageTrackingReportRequestType
 *
 *
 * XSD Type: GetMessageTrackingReportRequestType
 *
 * @method GetMessageTrackingReportRequestType getScope()
 * @method GetMessageTrackingReportRequestType setScope(string $scope)
 * @method GetMessageTrackingReportRequestType getReportTemplate()
 * @method GetMessageTrackingReportRequestType setReportTemplate(string $reportTemplate)
 * @method GetMessageTrackingReportRequestType getRecipientFilter()
 * @method GetMessageTrackingReportRequestType setRecipientFilter(\jamesiarmes\PEWS\API\Type\EmailAddressType $recipientFilter)
 * @method GetMessageTrackingReportRequestType getMessageTrackingReportId()
 * @method GetMessageTrackingReportRequestType setMessageTrackingReportId(string $messageTrackingReportId)
 * @method GetMessageTrackingReportRequestType getReturnQueueEvents()
 * @method GetMessageTrackingReportRequestType setReturnQueueEvents(boolean $returnQueueEvents)
 * @method GetMessageTrackingReportRequestType getDiagnosticsLevel()
 * @method GetMessageTrackingReportRequestType setDiagnosticsLevel(string $diagnosticsLevel)
 * @method GetMessageTrackingReportRequestType getProperties()
 * @method GetMessageTrackingReportRequestType setProperties(array $properties)
 */
class GetMessageTrackingReportRequestType extends BaseRequestType
{

    /**
     * @property string $scope
     */
    protected $scope = null;

    /**
     * @property string $reportTemplate
     */
    protected $reportTemplate = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType $recipientFilter
     */
    protected $recipientFilter = null;

    /**
     * @property string $messageTrackingReportId
     */
    protected $messageTrackingReportId = null;

    /**
     * @property boolean $returnQueueEvents
     */
    protected $returnQueueEvents = null;

    /**
     * @property string $diagnosticsLevel
     */
    protected $diagnosticsLevel = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TrackingPropertyType[] $properties
     */
    protected $properties = null;
}
