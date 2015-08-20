<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PostItemType
 *
 *
 * XSD Type: PostItemType
 *
 * @method PostItemType getConversationIndex()
 * @method PostItemType setConversationIndex(string $conversationIndex)
 * @method PostItemType getConversationTopic()
 * @method PostItemType setConversationTopic(string $conversationTopic)
 * @method PostItemType getFrom()
 * @method PostItemType setFrom(SingleRecipientType $from)
 * @method PostItemType getInternetMessageId()
 * @method PostItemType setInternetMessageId(string $internetMessageId)
 * @method PostItemType getIsRead()
 * @method PostItemType setIsRead(boolean $isRead)
 * @method PostItemType getPostedTime()
 * @method PostItemType setPostedTime(\DateTime $postedTime)
 * @method PostItemType getReferences()
 * @method PostItemType setReferences(string $references)
 * @method PostItemType getSender()
 * @method PostItemType setSender(SingleRecipientType $sender)
 */
class PostItemType extends ItemType
{

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
     * @property \DateTime $postedTime
     */
    protected $postedTime = null;

    protected $_typeMap = array(
        'postedTime' => 'dateTime',
    );

    /**
     * @property string $references
     */
    protected $references = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SingleRecipientType $sender
     */
    protected $sender = null;
}
