<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing FindMessageTrackingReportRequestType
 *
 *
 * XSD Type: FindMessageTrackingReportRequestType
 *
 * @method FindMessageTrackingReportRequestType getScope()
 * @method FindMessageTrackingReportRequestType setScope($scope)
 * @method FindMessageTrackingReportRequestType getDomain()
 * @method FindMessageTrackingReportRequestType setDomain($domain)
 * @method FindMessageTrackingReportRequestType getSender()
 * @method FindMessageTrackingReportRequestType setSender($sender)
 * @method FindMessageTrackingReportRequestType getPurportedSender()
 * @method FindMessageTrackingReportRequestType
 * setPurportedSender($purportedSender)
 * @method FindMessageTrackingReportRequestType getRecipient()
 * @method FindMessageTrackingReportRequestType setRecipient($recipient)
 * @method FindMessageTrackingReportRequestType getSubject()
 * @method FindMessageTrackingReportRequestType setSubject($subject)
 * @method FindMessageTrackingReportRequestType getStartDateTime()
 * @method FindMessageTrackingReportRequestType setStartDateTime($startDateTime)
 * @method FindMessageTrackingReportRequestType getEndDateTime()
 * @method FindMessageTrackingReportRequestType setEndDateTime($endDateTime)
 * @method FindMessageTrackingReportRequestType getMessageId()
 * @method FindMessageTrackingReportRequestType setMessageId($messageId)
 * @method FindMessageTrackingReportRequestType getFederatedDeliveryMailbox()
 * @method FindMessageTrackingReportRequestType
 * setFederatedDeliveryMailbox($federatedDeliveryMailbox)
 * @method FindMessageTrackingReportRequestType getDiagnosticsLevel()
 * @method FindMessageTrackingReportRequestType
 * setDiagnosticsLevel($diagnosticsLevel)
 * @method FindMessageTrackingReportRequestType getServerHint()
 * @method FindMessageTrackingReportRequestType setServerHint($serverHint)
 * @method FindMessageTrackingReportRequestType getProperties()
 * @method FindMessageTrackingReportRequestType setProperties($properties)
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
     * @property array $properties
     */
    protected $properties = null;


}

