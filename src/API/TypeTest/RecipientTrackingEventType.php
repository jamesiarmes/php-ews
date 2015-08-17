<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing RecipientTrackingEventType
 *
 *
 * XSD Type: RecipientTrackingEventType
 *
 * @method RecipientTrackingEventType getDate()
 * @method RecipientTrackingEventType setDate(\DateTime $date)
 * @method RecipientTrackingEventType getRecipient()
 * @method RecipientTrackingEventType setRecipient(EmailAddressType $recipient)
 * @method RecipientTrackingEventType getDeliveryStatus()
 * @method RecipientTrackingEventType setDeliveryStatus(string $deliveryStatus)
 * @method RecipientTrackingEventType getEventDescription()
 * @method RecipientTrackingEventType setEventDescription(string $eventDescription)
 * @method RecipientTrackingEventType getEventData()
 * @method RecipientTrackingEventType setEventData(array $eventData)
 * @method RecipientTrackingEventType getServer()
 * @method RecipientTrackingEventType setServer(string $server)
 * @method RecipientTrackingEventType getInternalId()
 * @method RecipientTrackingEventType setInternalId(integer $internalId)
 * @method RecipientTrackingEventType getBccRecipient()
 * @method RecipientTrackingEventType setBccRecipient(boolean $bccRecipient)
 * @method RecipientTrackingEventType getHiddenRecipient()
 * @method RecipientTrackingEventType setHiddenRecipient(boolean $hiddenRecipient)
 * @method RecipientTrackingEventType getUniquePathId()
 * @method RecipientTrackingEventType setUniquePathId(string $uniquePathId)
 * @method RecipientTrackingEventType getRootAddress()
 * @method RecipientTrackingEventType setRootAddress(string $rootAddress)
 * @method RecipientTrackingEventType getProperties()
 * @method RecipientTrackingEventType setProperties(array $properties)
 */
class RecipientTrackingEventType extends TypeTest
{

    /**
     * @property \DateTime $date
     */
    protected $date = null;

    protected $_typeMap = array(
        'date' => 'dateTime',
    );

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\EmailAddressType $recipient
     */
    protected $recipient = null;

    /**
     * @property string $deliveryStatus
     */
    protected $deliveryStatus = null;

    /**
     * @property string $eventDescription
     */
    protected $eventDescription = null;

    /**
     * @property string[] $eventData
     */
    protected $eventData = null;

    /**
     * @property string $server
     */
    protected $server = null;

    /**
     * @property integer $internalId
     */
    protected $internalId = null;

    /**
     * @property boolean $bccRecipient
     */
    protected $bccRecipient = null;

    /**
     * @property boolean $hiddenRecipient
     */
    protected $hiddenRecipient = null;

    /**
     * @property string $uniquePathId
     */
    protected $uniquePathId = null;

    /**
     * @property string $rootAddress
     */
    protected $rootAddress = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TrackingPropertyType[] $properties
     */
    protected $properties = null;


}

