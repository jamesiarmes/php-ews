<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing RecipientTrackingEventType
 *
 *
 * XSD Type: RecipientTrackingEventType
 *
 * @method \DateTime getDate()
 * @method RecipientTrackingEventType setDate(\DateTime $date)
 * @method EmailAddressType getRecipient()
 * @method RecipientTrackingEventType setRecipient(EmailAddressType $recipient)
 * @method string getDeliveryStatus()
 * @method RecipientTrackingEventType setDeliveryStatus(string $deliveryStatus)
 * @method string getEventDescription()
 * @method RecipientTrackingEventType setEventDescription(string $eventDescription)
 * @method RecipientTrackingEventType addEventData(string $eventData)
 * @method string[] getEventData()
 * @method RecipientTrackingEventType setEventData(array $eventData)
 * @method string getServer()
 * @method RecipientTrackingEventType setServer(string $server)
 * @method integer getInternalId()
 * @method RecipientTrackingEventType setInternalId(integer $internalId)
 * @method boolean isBccRecipient()
 * @method boolean getBccRecipient()
 * @method RecipientTrackingEventType setBccRecipient(boolean $bccRecipient)
 * @method boolean isHiddenRecipient()
 * @method boolean getHiddenRecipient()
 * @method RecipientTrackingEventType setHiddenRecipient(boolean $hiddenRecipient)
 * @method string getUniquePathId()
 * @method RecipientTrackingEventType setUniquePathId(string $uniquePathId)
 * @method string getRootAddress()
 * @method RecipientTrackingEventType setRootAddress(string $rootAddress)
 * @method RecipientTrackingEventType addProperties(TrackingPropertyType $properties)
 * @method TrackingPropertyType[] getProperties()
 * @method RecipientTrackingEventType setProperties(array $properties)
 */
class RecipientTrackingEventType extends Type
{

    /**
     * @var \DateTime
     */
    protected $date = null;

    protected $_typeMap = array(
        'date' => 'dateTime',
    );

    /**
     * @var \jamesiarmes\PEWS\API\Type\EmailAddressType
     */
    protected $recipient = null;

    /**
     * @var string
     */
    protected $deliveryStatus = null;

    /**
     * @var string
     */
    protected $eventDescription = null;

    /**
     * @var string[]
     */
    protected $eventData = null;

    /**
     * @var string
     */
    protected $server = null;

    /**
     * @var integer
     */
    protected $internalId = null;

    /**
     * @var boolean
     */
    protected $bccRecipient = null;

    /**
     * @var boolean
     */
    protected $hiddenRecipient = null;

    /**
     * @var string
     */
    protected $uniquePathId = null;

    /**
     * @var string
     */
    protected $rootAddress = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TrackingPropertyType[]
     */
    protected $properties = null;
}
