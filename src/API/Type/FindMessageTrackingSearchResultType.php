<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing FindMessageTrackingSearchResultType
 *
 *
 * XSD Type: FindMessageTrackingSearchResultType
 *
 * @method string getSubject()
 * @method FindMessageTrackingSearchResultType setSubject(string $subject)
 * @method EmailAddressType getSender()
 * @method FindMessageTrackingSearchResultType setSender(EmailAddressType $sender)
 * @method EmailAddressType getPurportedSender()
 * @method FindMessageTrackingSearchResultType setPurportedSender(EmailAddressType $purportedSender)
 * @method array getRecipients()
 * @method FindMessageTrackingSearchResultType setRecipients(array $recipients)
 * @method \DateTime getSubmittedTime()
 * @method FindMessageTrackingSearchResultType setSubmittedTime(\DateTime $submittedTime)
 * @method string getMessageTrackingReportId()
 * @method FindMessageTrackingSearchResultType setMessageTrackingReportId(string $messageTrackingReportId)
 * @method string getPreviousHopServer()
 * @method FindMessageTrackingSearchResultType setPreviousHopServer(string $previousHopServer)
 * @method string getFirstHopServer()
 * @method FindMessageTrackingSearchResultType setFirstHopServer(string $firstHopServer)
 * @method array getProperties()
 * @method FindMessageTrackingSearchResultType setProperties(array $properties)
 */
class FindMessageTrackingSearchResultType extends Type
{

    /**
     * @var string
     */
    protected $subject = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $sender = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $purportedSender = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType[]
     */
    protected $recipients = null;

    /**
     * @var \DateTime
     */
    protected $submittedTime = null;

    protected $_typeMap = array(
        'submittedTime' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $messageTrackingReportId = null;

    /**
     * @var string
     */
    protected $previousHopServer = null;

    /**
     * @var string
     */
    protected $firstHopServer = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
