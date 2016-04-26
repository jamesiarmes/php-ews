<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing MessageTrackingReportType
 *
 *
 * XSD Type: MessageTrackingReportType
 *
 * @method EmailAddressType getSender()
 * @method MessageTrackingReportType setSender(EmailAddressType $sender)
 * @method EmailAddressType getPurportedSender()
 * @method MessageTrackingReportType setPurportedSender(EmailAddressType $purportedSender)
 * @method string getSubject()
 * @method MessageTrackingReportType setSubject(string $subject)
 * @method \DateTime getSubmitTime()
 * @method MessageTrackingReportType setSubmitTime(\DateTime $submitTime)
 * @method MessageTrackingReportType addOriginalRecipients(EmailAddressType $originalRecipients)
 * @method EmailAddressType[] getOriginalRecipients()
 * @method MessageTrackingReportType setOriginalRecipients(array $originalRecipients)
 * @method MessageTrackingReportType addRecipientTrackingEvents(RecipientTrackingEventType $recipientTrackingEvents)
 * @method RecipientTrackingEventType[] getRecipientTrackingEvents()
 * @method MessageTrackingReportType setRecipientTrackingEvents(array $recipientTrackingEvents)
 * @method MessageTrackingReportType addProperties(TrackingPropertyType $properties)
 * @method TrackingPropertyType[] getProperties()
 * @method MessageTrackingReportType setProperties(array $properties)
 */
class MessageTrackingReportType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $sender = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $purportedSender = null;

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var \DateTime
     */
    protected $submitTime = null;

    protected $_typeMap = array(
        'submitTime' => 'dateTime',
    );

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $originalRecipients = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RecipientTrackingEventType[]
     */
    protected $recipientTrackingEvents = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
