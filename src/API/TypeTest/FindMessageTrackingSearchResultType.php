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
 * @method FindMessageTrackingSearchResultType setSubject($subject)
 * @method FindMessageTrackingSearchResultType getSender()
 * @method FindMessageTrackingSearchResultType setSender($sender)
 * @method FindMessageTrackingSearchResultType getPurportedSender()
 * @method FindMessageTrackingSearchResultType setPurportedSender($purportedSender)
 * @method FindMessageTrackingSearchResultType getRecipients()
 * @method FindMessageTrackingSearchResultType setRecipients($recipients)
 * @method FindMessageTrackingSearchResultType getSubmittedTime()
 * @method FindMessageTrackingSearchResultType setSubmittedTime($submittedTime)
 * @method FindMessageTrackingSearchResultType getMessageTrackingReportId()
 * @method FindMessageTrackingSearchResultType
 * setMessageTrackingReportId($messageTrackingReportId)
 * @method FindMessageTrackingSearchResultType getPreviousHopServer()
 * @method FindMessageTrackingSearchResultType
 * setPreviousHopServer($previousHopServer)
 * @method FindMessageTrackingSearchResultType getFirstHopServer()
 * @method FindMessageTrackingSearchResultType setFirstHopServer($firstHopServer)
 * @method FindMessageTrackingSearchResultType getProperties()
 * @method FindMessageTrackingSearchResultType setProperties($properties)
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
     * @property array $recipients
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
     * @property array $properties
     */
    protected $properties = null;


}

