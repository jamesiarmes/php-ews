<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecipientTrackingEventType
 *
 *
 * XSD Type: RecipientTrackingEventType
 *
 * @method RecipientTrackingEventType getDate()
 * @method RecipientTrackingEventType setDate($date)
 * @method RecipientTrackingEventType getRecipient()
 * @method RecipientTrackingEventType setRecipient($recipient)
 * @method RecipientTrackingEventType getDeliveryStatus()
 * @method RecipientTrackingEventType setDeliveryStatus($deliveryStatus)
 * @method RecipientTrackingEventType getEventDescription()
 * @method RecipientTrackingEventType setEventDescription($eventDescription)
 * @method RecipientTrackingEventType getEventData()
 * @method RecipientTrackingEventType setEventData($eventData)
 * @method RecipientTrackingEventType getServer()
 * @method RecipientTrackingEventType setServer($server)
 * @method RecipientTrackingEventType getInternalId()
 * @method RecipientTrackingEventType setInternalId($internalId)
 * @method RecipientTrackingEventType getBccRecipient()
 * @method RecipientTrackingEventType setBccRecipient($bccRecipient)
 * @method RecipientTrackingEventType getHiddenRecipient()
 * @method RecipientTrackingEventType setHiddenRecipient($hiddenRecipient)
 * @method RecipientTrackingEventType getUniquePathId()
 * @method RecipientTrackingEventType setUniquePathId($uniquePathId)
 * @method RecipientTrackingEventType getRootAddress()
 * @method RecipientTrackingEventType setRootAddress($rootAddress)
 * @method RecipientTrackingEventType getProperties()
 * @method RecipientTrackingEventType setProperties($properties)
 */
class RecipientTrackingEventType extends Type
{

    /**
     * @property \DateTime $date
     */
    protected $date = null;

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
     * @property array $eventData
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
     * @property array $properties
     */
    protected $properties = null;


}

