<?php
/**
 * Definition of the MessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MessageType type
 */
class EWSType_MessageType extends EWSType
{
    /**
     * Sender property
     *
     * @var EWSType_SingleRecipientType
     */
    public $Sender;

    /**
     * ToRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ToRecipients;

    /**
     * CcRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
     */
    public $CcRecipients;

    /**
     * BccRecipients property
     *
     * @var EWSType_ArrayOfRecipientsType
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
     * @var EWSType_base64Binary
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
     * @var EWSType_SingleRecipientType
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
     * @var EWSType_ArrayOfRecipientsType
     */
    public $ReplyTo;

    /**
     * ReceivedBy property
     *
     * @var EWSType_SingleRecipientType
     */
    public $ReceivedBy;

    /**
     * ReceivedRepresenting property
     *
     * @var EWSType_SingleRecipientType
     */
    public $ReceivedRepresenting;
}
