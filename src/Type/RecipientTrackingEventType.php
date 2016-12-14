<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\RecipientTrackingEventType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents information for a single event for a recipient.
 *
 * @package php-ews\Type
 */
class RecipientTrackingEventType extends Type
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
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MessageTrackingDeliveryStatusType
     */
    public $DeliveryStatus;

    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfStringsType
     */
    public $EventData;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\MessageTrackingEventDescriptionType
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
     * @var integer
     */
    public $InternalId;

    /**
     * This element is optional.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfTrackingPropertiesType
     */
    public $Properties;

    /**
     * This element is required.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
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
