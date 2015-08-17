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
 * @method MessageTrackingReportType setSender(EmailAddressType $sender)
 * @method MessageTrackingReportType getPurportedSender()
 * @method MessageTrackingReportType setPurportedSender(EmailAddressType $purportedSender)
 * @method MessageTrackingReportType getSubject()
 * @method MessageTrackingReportType setSubject(string $subject)
 * @method MessageTrackingReportType getSubmitTime()
 * @method MessageTrackingReportType setSubmitTime(\DateTime $submitTime)
 * @method MessageTrackingReportType getOriginalRecipients()
 * @method MessageTrackingReportType setOriginalRecipients(array $originalRecipients)
 * @method MessageTrackingReportType getRecipientTrackingEvents()
 * @method MessageTrackingReportType setRecipientTrackingEvents(array $recipientTrackingEvents)
 * @method MessageTrackingReportType getProperties()
 * @method MessageTrackingReportType setProperties(array $properties)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType[] $originalRecipients
     */
    protected $originalRecipients = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\RecipientTrackingEventType[]
     * $recipientTrackingEvents
     */
    protected $recipientTrackingEvents = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TrackingPropertyType[] $properties
     */
    protected $properties = null;


}

