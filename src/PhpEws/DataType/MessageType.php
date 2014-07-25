<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MessageType type
 */
class MessageType extends DataType
{
    /**
     * Sender property
     *
     * @var SingleRecipientType
     */
    public $Sender;

    /**
     * ToRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * CcRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * BccRecipients property
     *
     * @var ArrayOfRecipientsType
     */
    public $BccRecipients;

    /**
     * IsReadReceiptRequested property
     *
     * @var boolean
     */
    public $IsReadReceiptRequested;

    /**
     * IsDeliveryReceiptRequested property
     *
     * @var boolean
     */
    public $IsDeliveryReceiptRequested;

    /**
     * ConversationIndex property
     *
     * @var base64Binary
     */
    public $ConversationIndex;

    /**
     * ConversationTopic property
     *
     * @var string
     */
    public $ConversationTopic;

    /**
     * From property
     *
     * @var SingleRecipientType
     */
    public $From;

    /**
     * InternetMessageId property
     *
     * @var string
     */
    public $InternetMessageId;

    /**
     * IsRead property
     *
     * @var boolean
     */
    public $IsRead;

    /**
     * IsResponseRequested property
     *
     * @var boolean
     */
    public $IsResponseRequested;

    /**
     * References property
     *
     * @var string
     */
    public $References;

    /**
     * ReplyTo property
     *
     * @var ArrayOfRecipientsType
     */
    public $ReplyTo;

    /**
     * ReceivedBy property
     *
     * @var SingleRecipientType
     */
    public $ReceivedBy;

    /**
     * ReceivedRepresenting property
     *
     * @var SingleRecipientType
     */
    public $ReceivedRepresenting;
}
