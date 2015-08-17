<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing FindMessageTrackingSearchResultType
 *
 *
 * XSD Type: FindMessageTrackingSearchResultType
 *
 * @method FindMessageTrackingSearchResultType getSubject()
 * @method FindMessageTrackingSearchResultType setSubject(string $subject)
 * @method FindMessageTrackingSearchResultType getSender()
 * @method FindMessageTrackingSearchResultType setSender(EmailAddressType $sender)
 * @method FindMessageTrackingSearchResultType getPurportedSender()
 * @method FindMessageTrackingSearchResultType setPurportedSender(EmailAddressType $purportedSender)
 * @method FindMessageTrackingSearchResultType getRecipients()
 * @method FindMessageTrackingSearchResultType setRecipients(array $recipients)
 * @method FindMessageTrackingSearchResultType getSubmittedTime()
 * @method FindMessageTrackingSearchResultType setSubmittedTime(\DateTime $submittedTime)
 * @method FindMessageTrackingSearchResultType getMessageTrackingReportId()
 * @method FindMessageTrackingSearchResultType setMessageTrackingReportId(string $messageTrackingReportId)
 * @method FindMessageTrackingSearchResultType getPreviousHopServer()
 * @method FindMessageTrackingSearchResultType setPreviousHopServer(string $previousHopServer)
 * @method FindMessageTrackingSearchResultType getFirstHopServer()
 * @method FindMessageTrackingSearchResultType setFirstHopServer(string $firstHopServer)
 * @method FindMessageTrackingSearchResultType getProperties()
 * @method FindMessageTrackingSearchResultType setProperties(array $properties)
 */
class FindMessageTrackingSearchResultType extends TypeTest
{

    /**
     * @property string $subject
     */
    protected $subject = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $sender
     */
    protected $sender = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $purportedSender
     */
    protected $purportedSender = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[] $recipients
     */
    protected $recipients = null;

    /**
     * @property \DateTime $submittedTime
     */
    protected $submittedTime = null;

    protected $_typeMap = array(
        'submittedTime' => 'dateTime',
    );

    /**
     * @property string $messageTrackingReportId
     */
    protected $messageTrackingReportId = null;

    /**
     * @property string $previousHopServer
     */
    protected $previousHopServer = null;

    /**
     * @property string $firstHopServer
     */
    protected $firstHopServer = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TrackingPropertyType[] $properties
     */
    protected $properties = null;


}

