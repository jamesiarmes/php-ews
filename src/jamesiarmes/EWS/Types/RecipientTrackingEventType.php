<?php
/**
 * Contains RecipientTrackingEventType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents information for a single event for a recipient.
 *
 * @package jamesiarmes\EWS\Types
 */
class RecipientTrackingEventType extends EWSType
{
    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $BccRecipient;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Date;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var MessageTrackingDeliveryStatusType
     */
    public $DeliveryStatus;

    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfStringsType
     */
    public $EventData;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var MessageTrackingEventDescriptionType
     */
    public $EventDescription;

    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var boolean
     */
    public $HiddenRecipient;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var unsigned integer
     */
    public $InternalId;

    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfTrackingPropertiesType
     */
    public $Properties;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EmailAddressType
     */
    public $Recipient;

    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $RootAddress;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $Server;

    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    public $UniquePathId;
}
