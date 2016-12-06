<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\SmartResponseBaseType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Base class for smart responses.
 *
 * @package php-ews\Type
 *
 * @todo Extend ResponseObjectType?
 * @link https://msdn.microsoft.com/en-us/library/office/exchangewebservices.smartresponsebasetype(v=exchg.150).aspx
 */
class SmartResponseBaseType extends Type
{
    /**
     * Represents a collection of recipients to receive a blind carbon copy
     * (Bcc) of an e-mail.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * Represents the actual body content of a message.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\BodyType
     */
    public $Body;

    /**
     * Represents a collection of recipients that will receive a copy of the
     * message.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * Represents the address from which the message was sent.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
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
     * Identifies the delegate in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
     */
    public $ReceivedBy;

    /**
     * Identifies the principal in a delegate access scenario.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
     */
    public $ReceivedRepresenting;

    /**
     * Identifies the item to which the response object refers.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\ItemIdType
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
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType
     */
    public $ToRecipients;
}
