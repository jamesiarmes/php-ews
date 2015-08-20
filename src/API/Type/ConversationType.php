<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ConversationType
 *
 *
 * XSD Type: ConversationType
 *
 * @method ItemIdType getConversationId()
 * @method ConversationType setConversationId(ItemIdType $conversationId)
 * @method string getConversationTopic()
 * @method ConversationType setConversationTopic(string $conversationTopic)
 * @method array getUniqueRecipients()
 * @method ConversationType setUniqueRecipients(array $uniqueRecipients)
 * @method array getGlobalUniqueRecipients()
 * @method ConversationType setGlobalUniqueRecipients(array $globalUniqueRecipients)
 * @method array getUniqueUnreadSenders()
 * @method ConversationType setUniqueUnreadSenders(array $uniqueUnreadSenders)
 * @method array getGlobalUniqueUnreadSenders()
 * @method ConversationType setGlobalUniqueUnreadSenders(array $globalUniqueUnreadSenders)
 * @method array getUniqueSenders()
 * @method ConversationType setUniqueSenders(array $uniqueSenders)
 * @method array getGlobalUniqueSenders()
 * @method ConversationType setGlobalUniqueSenders(array $globalUniqueSenders)
 * @method \DateTime getLastDeliveryTime()
 * @method ConversationType setLastDeliveryTime(\DateTime $lastDeliveryTime)
 * @method \DateTime getGlobalLastDeliveryTime()
 * @method ConversationType setGlobalLastDeliveryTime(\DateTime $globalLastDeliveryTime)
 * @method array getCategories()
 * @method ConversationType setCategories(array $categories)
 * @method array getGlobalCategories()
 * @method ConversationType setGlobalCategories(array $globalCategories)
 * @method string getFlagStatus()
 * @method ConversationType setFlagStatus(string $flagStatus)
 * @method string getGlobalFlagStatus()
 * @method ConversationType setGlobalFlagStatus(string $globalFlagStatus)
 * @method boolean getHasAttachments()
 * @method ConversationType setHasAttachments(boolean $hasAttachments)
 * @method boolean getGlobalHasAttachments()
 * @method ConversationType setGlobalHasAttachments(boolean $globalHasAttachments)
 * @method integer getMessageCount()
 * @method ConversationType setMessageCount(integer $messageCount)
 * @method integer getGlobalMessageCount()
 * @method ConversationType setGlobalMessageCount(integer $globalMessageCount)
 * @method integer getUnreadCount()
 * @method ConversationType setUnreadCount(integer $unreadCount)
 * @method integer getGlobalUnreadCount()
 * @method ConversationType setGlobalUnreadCount(integer $globalUnreadCount)
 * @method integer getSize()
 * @method ConversationType setSize(integer $size)
 * @method integer getGlobalSize()
 * @method ConversationType setGlobalSize(integer $globalSize)
 * @method array getItemClasses()
 * @method ConversationType setItemClasses(array $itemClasses)
 * @method array getGlobalItemClasses()
 * @method ConversationType setGlobalItemClasses(array $globalItemClasses)
 * @method string getImportance()
 * @method ConversationType setImportance(string $importance)
 * @method string getGlobalImportance()
 * @method ConversationType setGlobalImportance(string $globalImportance)
 * @method NonEmptyArrayOfBaseItemIdsType getItemIds()
 * @method ConversationType setItemIds(NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method NonEmptyArrayOfBaseItemIdsType getGlobalItemIds()
 * @method ConversationType setGlobalItemIds(NonEmptyArrayOfBaseItemIdsType $globalItemIds)
 */
class ConversationType extends Type
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $conversationId = null;

    /**
     * @var string
     */
    protected $conversationTopic = null;

    /**
     * @var string[]
     */
    protected $uniqueRecipients = null;

    /**
     * @var string[]
     */
    protected $globalUniqueRecipients = null;

    /**
     * @var string[]
     */
    protected $uniqueUnreadSenders = null;

    /**
     * @var string[]
     */
    protected $globalUniqueUnreadSenders = null;

    /**
     * @var string[]
     */
    protected $uniqueSenders = null;

    /**
     * @var string[]
     */
    protected $globalUniqueSenders = null;

    /**
     * @var \DateTime
     */
    protected $lastDeliveryTime = null;

    protected $_typeMap = array(
        'lastDeliveryTime' => 'dateTime',
        'globalLastDeliveryTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $globalLastDeliveryTime = null;

    /**
     * @var string[]
     */
    protected $categories = null;

    /**
     * @var string[]
     */
    protected $globalCategories = null;

    /**
     * @var string
     */
    protected $flagStatus = null;

    /**
     * @var string
     */
    protected $globalFlagStatus = null;

    /**
     * @var boolean
     */
    protected $hasAttachments = null;

    /**
     * @var boolean
     */
    protected $globalHasAttachments = null;

    /**
     * @var integer
     */
    protected $messageCount = null;

    /**
     * @var integer
     */
    protected $globalMessageCount = null;

    /**
     * @var integer
     */
    protected $unreadCount = null;

    /**
     * @var integer
     */
    protected $globalUnreadCount = null;

    /**
     * @var integer
     */
    protected $size = null;

    /**
     * @var integer
     */
    protected $globalSize = null;

    /**
     * @var string[]
     */
    protected $itemClasses = null;

    /**
     * @var string[]
     */
    protected $globalItemClasses = null;

    /**
     * @var string
     */
    protected $importance = null;

    /**
     * @var string
     */
    protected $globalImportance = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $itemIds = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType
     */
    protected $globalItemIds = null;
}
