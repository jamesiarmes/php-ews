<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MessageType
 *
 *
 * XSD Type: MessageType
 *
 * @method MessageType getSender()
 * @method MessageType setSender($sender)
 * @method MessageType getToRecipients()
 * @method MessageType setToRecipients($toRecipients)
 * @method MessageType getCcRecipients()
 * @method MessageType setCcRecipients($ccRecipients)
 * @method MessageType getBccRecipients()
 * @method MessageType setBccRecipients($bccRecipients)
 * @method MessageType getIsReadReceiptRequested()
 * @method MessageType setIsReadReceiptRequested($isReadReceiptRequested)
 * @method MessageType getIsDeliveryReceiptRequested()
 * @method MessageType setIsDeliveryReceiptRequested($isDeliveryReceiptRequested)
 * @method MessageType getConversationIndex()
 * @method MessageType setConversationIndex($conversationIndex)
 * @method MessageType getConversationTopic()
 * @method MessageType setConversationTopic($conversationTopic)
 * @method MessageType getFrom()
 * @method MessageType setFrom($from)
 * @method MessageType getInternetMessageId()
 * @method MessageType setInternetMessageId($internetMessageId)
 * @method MessageType getIsRead()
 * @method MessageType setIsRead($isRead)
 * @method MessageType getIsResponseRequested()
 * @method MessageType setIsResponseRequested($isResponseRequested)
 * @method MessageType getReferences()
 * @method MessageType setReferences($references)
 * @method MessageType getReplyTo()
 * @method MessageType setReplyTo($replyTo)
 * @method MessageType getReceivedBy()
 * @method MessageType setReceivedBy($receivedBy)
 * @method MessageType getReceivedRepresenting()
 * @method MessageType setReceivedRepresenting($receivedRepresenting)
 */
class MessageType extends ItemType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SingleRecipientType $sender
     */
    protected $sender = null;

    /**
     * @property array $toRecipients
     */
    protected $toRecipients = null;

    /**
     * @property array $ccRecipients
     */
    protected $ccRecipients = null;

    /**
     * @property array $bccRecipients
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
     * @property mixed $conversationIndex
     */
    protected $conversationIndex = null;

    /**
     * @property string $conversationTopic
     */
    protected $conversationTopic = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SingleRecipientType $from
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
     * @property array $replyTo
     */
    protected $replyTo = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SingleRecipientType $receivedBy
     */
    protected $receivedBy = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SingleRecipientType
     * $receivedRepresenting
     */
    protected $receivedRepresenting = null;


}

