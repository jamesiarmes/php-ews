<?php
/**
 * Contains SmartResponseBaseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Base class for smart responses.
 *
 * @package jamesiarmes\EWS\Types
 */
class SmartResponseBaseType extends EWSType
{
    /**
     * Represents a collection of recipients to receive a blind carbon copy
     * (Bcc) of an e-mail.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var BodyType
     */
    public $Body;

    /**
     * Represents a collection of recipients that will receive a copy of the
     * message.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * Represents the address from which the message was sent.
     *
     * @since Exchange 2007
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * Indicates whether the sender of an item requests a delivery receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * Indicates whether the sender of an item requests a read receipt.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2007
     *
     * @var ItemIdType
     */
    public $ReferenceItemId;

    /**
     * Represents the subject property of Exchange store items.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Subject;

    /**
     * Contains a set of recipients of an item.
     *
     * These are the primary recipients of an item.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfRecipientsType
     */
    public $ToRecipients;
}
