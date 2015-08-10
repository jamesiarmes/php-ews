<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing PostItemType
 *
 *
 * XSD Type: PostItemType
 *
 * @method PostItemType getConversationIndex()
 * @method PostItemType setConversationIndex($conversationIndex)
 * @method PostItemType getConversationTopic()
 * @method PostItemType setConversationTopic($conversationTopic)
 * @method PostItemType getFrom()
 * @method PostItemType setFrom($from)
 * @method PostItemType getInternetMessageId()
 * @method PostItemType setInternetMessageId($internetMessageId)
 * @method PostItemType getIsRead()
 * @method PostItemType setIsRead($isRead)
 * @method PostItemType getPostedTime()
 * @method PostItemType setPostedTime($postedTime)
 * @method PostItemType getReferences()
 * @method PostItemType setReferences($references)
 * @method PostItemType getSender()
 * @method PostItemType setSender($sender)
 */
class PostItemType extends ItemType
{

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
     * @property \DateTime $postedTime
     */
    protected $postedTime = null;

    /**
     * @property string $references
     */
    protected $references = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\SingleRecipientType $sender
     */
    protected $sender = null;


}

