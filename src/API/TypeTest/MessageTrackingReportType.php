<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MessageTrackingReportType
 *
 *
 * XSD Type: MessageTrackingReportType
 *
 * @method MessageTrackingReportType getSender()
 * @method MessageTrackingReportType setSender($sender)
 * @method MessageTrackingReportType getPurportedSender()
 * @method MessageTrackingReportType setPurportedSender($purportedSender)
 * @method MessageTrackingReportType getSubject()
 * @method MessageTrackingReportType setSubject($subject)
 * @method MessageTrackingReportType getSubmitTime()
 * @method MessageTrackingReportType setSubmitTime($submitTime)
 * @method MessageTrackingReportType getOriginalRecipients()
 * @method MessageTrackingReportType setOriginalRecipients($originalRecipients)
 * @method MessageTrackingReportType getRecipientTrackingEvents()
 * @method MessageTrackingReportType
 * setRecipientTrackingEvents($recipientTrackingEvents)
 * @method MessageTrackingReportType getProperties()
 * @method MessageTrackingReportType setProperties($properties)
 */
class MessageTrackingReportType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $sender
     */
    protected $sender = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $purportedSender
     */
    protected $purportedSender = null;

    /**
     * @property string $subject
     */
    protected $subject = null;

    /**
     * @property \DateTime $submitTime
     */
    protected $submitTime = null;

    protected $_typeMap = array(
        'submitTime' => 'dateTime',
    );

    /**
     * @property array $originalRecipients
     */
    protected $originalRecipients = null;

    /**
     * @property array $recipientTrackingEvents
     */
    protected $recipientTrackingEvents = null;

    /**
     * @property array $properties
     */
    protected $properties = null;


}

