<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing GetMessageTrackingReportRequestType
 *
 *
 * XSD Type: GetMessageTrackingReportRequestType
 *
 * @method GetMessageTrackingReportRequestType getScope()
 * @method GetMessageTrackingReportRequestType setScope($scope)
 * @method GetMessageTrackingReportRequestType getReportTemplate()
 * @method GetMessageTrackingReportRequestType setReportTemplate($reportTemplate)
 * @method GetMessageTrackingReportRequestType getRecipientFilter()
 * @method GetMessageTrackingReportRequestType setRecipientFilter($recipientFilter)
 * @method GetMessageTrackingReportRequestType getMessageTrackingReportId()
 * @method GetMessageTrackingReportRequestType
 * setMessageTrackingReportId($messageTrackingReportId)
 * @method GetMessageTrackingReportRequestType getReturnQueueEvents()
 * @method GetMessageTrackingReportRequestType
 * setReturnQueueEvents($returnQueueEvents)
 * @method GetMessageTrackingReportRequestType getDiagnosticsLevel()
 * @method GetMessageTrackingReportRequestType
 * setDiagnosticsLevel($diagnosticsLevel)
 * @method GetMessageTrackingReportRequestType getProperties()
 * @method GetMessageTrackingReportRequestType setProperties($properties)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $recipientFilter
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
     * @property array $properties
     */
    protected $properties = null;


}

