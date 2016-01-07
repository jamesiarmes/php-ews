<?php
/**
 * Contains EWSType_RecipientTrackingEventType.
 */

/**
 * Represents information for a single event for a recipient.
 *
 * @package php-ews\Types
 */
class EWSType_RecipientTrackingEventType extends EWSType
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
     * @var EWSType_MessageTrackingDeliveryStatusType
     */
    public $DeliveryStatus;

    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfStringsType
     */
    public $EventData;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_MessageTrackingEventDescriptionType
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
     * @var EWSType_ArrayOfTrackingPropertiesType
     */
    public $Properties;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var EWSType_EmailAddressType
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
