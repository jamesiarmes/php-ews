<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindMessageTrackingReportRequestType
 *
 *
 * XSD Type: FindMessageTrackingReportRequestType
 *
 * @method FindMessageTrackingReportRequestType getScope()
 * @method FindMessageTrackingReportRequestType setScope(string $scope)
 * @method FindMessageTrackingReportRequestType getDomain()
 * @method FindMessageTrackingReportRequestType setDomain(string $domain)
 * @method FindMessageTrackingReportRequestType getSender()
 * @method FindMessageTrackingReportRequestType setSender(\jamesiarmes\PEWS\API\TypeTest\EmailAddressType $sender)
 * @method FindMessageTrackingReportRequestType getPurportedSender()
 * @method FindMessageTrackingReportRequestType setPurportedSender(\jamesiarmes\PEWS\API\TypeTest\EmailAddressType $purportedSender)
 * @method FindMessageTrackingReportRequestType getRecipient()
 * @method FindMessageTrackingReportRequestType setRecipient(\jamesiarmes\PEWS\API\TypeTest\EmailAddressType $recipient)
 * @method FindMessageTrackingReportRequestType getSubject()
 * @method FindMessageTrackingReportRequestType setSubject(string $subject)
 * @method FindMessageTrackingReportRequestType getStartDateTime()
 * @method FindMessageTrackingReportRequestType setStartDateTime(\DateTime $startDateTime)
 * @method FindMessageTrackingReportRequestType getEndDateTime()
 * @method FindMessageTrackingReportRequestType setEndDateTime(\DateTime $endDateTime)
 * @method FindMessageTrackingReportRequestType getMessageId()
 * @method FindMessageTrackingReportRequestType setMessageId(string $messageId)
 * @method FindMessageTrackingReportRequestType getFederatedDeliveryMailbox()
 * @method FindMessageTrackingReportRequestType setFederatedDeliveryMailbox(\jamesiarmes\PEWS\API\TypeTest\EmailAddressType $federatedDeliveryMailbox)
 * @method FindMessageTrackingReportRequestType getDiagnosticsLevel()
 * @method FindMessageTrackingReportRequestType setDiagnosticsLevel(string $diagnosticsLevel)
 * @method FindMessageTrackingReportRequestType getServerHint()
 * @method FindMessageTrackingReportRequestType setServerHint(string $serverHint)
 * @method FindMessageTrackingReportRequestType getProperties()
 * @method FindMessageTrackingReportRequestType setProperties(array $properties)
 */
class FindMessageTrackingReportRequestType extends BaseRequestType
{

    /**
     * @property string $scope
     */
    protected $scope = null;

    /**
     * @property string $domain
     */
    protected $domain = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $sender
     */
    protected $sender = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $purportedSender
     */
    protected $purportedSender = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $recipient
     */
    protected $recipient = null;

    /**
     * @property string $subject
     */
    protected $subject = null;

    /**
     * @property \DateTime $startDateTime
     */
    protected $startDateTime = null;

    protected $_typeMap = array(
        'startDateTime' => 'dateTime',
        'endDateTime' => 'dateTime',
    );

    /**
     * @property \DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @property string $messageId
     */
    protected $messageId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType
     * $federatedDeliveryMailbox
     */
    protected $federatedDeliveryMailbox = null;

    /**
     * @property string $diagnosticsLevel
     */
    protected $diagnosticsLevel = null;

    /**
     * @property string $serverHint
     */
    protected $serverHint = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TrackingPropertyType[] $properties
     */
    protected $properties = null;


}

