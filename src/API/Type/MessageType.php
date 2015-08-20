<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MessageType
 *
 *
 * XSD Type: MessageType
 *
 * @method MessageType getSender()
 * @method MessageType setSender(SingleRecipientType $sender)
 * @method MessageType getToRecipients()
 * @method MessageType setToRecipients(array $toRecipients)
 * @method MessageType getCcRecipients()
 * @method MessageType setCcRecipients(array $ccRecipients)
 * @method MessageType getBccRecipients()
 * @method MessageType setBccRecipients(array $bccRecipients)
 * @method MessageType getIsReadReceiptRequested()
 * @method MessageType setIsReadReceiptRequested(boolean $isReadReceiptRequested)
 * @method MessageType getIsDeliveryReceiptRequested()
 * @method MessageType setIsDeliveryReceiptRequested(boolean $isDeliveryReceiptRequested)
 * @method MessageType getConversationIndex()
 * @method MessageType setConversationIndex(string $conversationIndex)
 * @method MessageType getConversationTopic()
 * @method MessageType setConversationTopic(string $conversationTopic)
 * @method MessageType getFrom()
 * @method MessageType setFrom(SingleRecipientType $from)
 * @method MessageType getInternetMessageId()
 * @method MessageType setInternetMessageId(string $internetMessageId)
 * @method MessageType getIsRead()
 * @method MessageType setIsRead(boolean $isRead)
 * @method MessageType getIsResponseRequested()
 * @method MessageType setIsResponseRequested(boolean $isResponseRequested)
 * @method MessageType getReferences()
 * @method MessageType setReferences(string $references)
 * @method MessageType getReplyTo()
 * @method MessageType setReplyTo(array $replyTo)
 * @method MessageType getReceivedBy()
 * @method MessageType setReceivedBy(SingleRecipientType $receivedBy)
 * @method MessageType getReceivedRepresenting()
 * @method MessageType setReceivedRepresenting(SingleRecipientType $receivedRepresenting)
 */
class MessageType extends ItemType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\SingleRecipientType $sender
     */
    protected $sender = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType[] $toRecipients
     */
    protected $toRecipients = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType[] $ccRecipients
     */
    protected $ccRecipients = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType[] $bccRecipients
     */
    protected $bccRecipients = null;

    /**
     * @property boolean $isReadReceiptRequested
     */
    protected $isReadReceiptRequested = null;

    /**
     * @property boolean $isDeliveryReceiptRequested
     */
    protected $isDeliveryReceiptRequested = null;

    /**
     * @property string $conversationIndex
     */
    protected $conversationIndex = null;

    /**
     * @property string $conversationTopic
     */
    protected $conversationTopic = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SingleRecipientType $from
     */
    protected $from = null;

    /**
     * @property string $internetMessageId
     */
    protected $internetMessageId = null;

    /**
     * @property boolean $isRead
     */
    protected $isRead = null;

    /**
     * @property boolean $isResponseRequested
     */
    protected $isResponseRequested = null;

    /**
     * @property string $references
     */
    protected $references = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\EmailAddressType[] $replyTo
     */
    protected $replyTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SingleRecipientType $receivedBy
     */
    protected $receivedBy = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SingleRecipientType $receivedRepresenting
     */
    protected $receivedRepresenting = null;
}
