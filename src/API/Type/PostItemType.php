<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing PostItemType
 *
 *
 * XSD Type: PostItemType
 *
 * @method string getConversationIndex()
 * @method PostItemType setConversationIndex(string $conversationIndex)
 * @method string getConversationTopic()
 * @method PostItemType setConversationTopic(string $conversationTopic)
 * @method SingleRecipientType getFrom()
 * @method PostItemType setFrom(SingleRecipientType $from)
 * @method string getInternetMessageId()
 * @method PostItemType setInternetMessageId(string $internetMessageId)
 * @method boolean getIsRead()
 * @method PostItemType setIsRead(boolean $isRead)
 * @method \DateTime getPostedTime()
 * @method PostItemType setPostedTime(\DateTime $postedTime)
 * @method string getReferences()
 * @method PostItemType setReferences(string $references)
 * @method SingleRecipientType getSender()
 * @method PostItemType setSender(SingleRecipientType $sender)
 */
class PostItemType extends ItemType
{

    /**
     * @var string
     */
    protected $conversationIndex = null;

    /**
     * @var string
     */
    protected $conversationTopic = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SingleRecipientType
     */
    protected $from = null;

    /**
     * @var string
     */
    protected $internetMessageId = null;

    /**
     * @var boolean
     */
    protected $isRead = null;

    /**
     * @var \DateTime
     */
    protected $postedTime = null;

    protected $_typeMap = array(
        'postedTime' => 'dateTime',
    );

    /**
     * @var string
     */
    protected $references = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SingleRecipientType
     */
    protected $sender = null;
}
