<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ConversationType
 *
 *
 * XSD Type: ConversationType
 *
 * @method ConversationType getConversationId()
 * @method ConversationType setConversationId(ItemIdType $conversationId)
 * @method ConversationType getConversationTopic()
 * @method ConversationType setConversationTopic(string $conversationTopic)
 * @method ConversationType getUniqueRecipients()
 * @method ConversationType setUniqueRecipients(array $uniqueRecipients)
 * @method ConversationType getGlobalUniqueRecipients()
 * @method ConversationType setGlobalUniqueRecipients(array $globalUniqueRecipients)
 * @method ConversationType getUniqueUnreadSenders()
 * @method ConversationType setUniqueUnreadSenders(array $uniqueUnreadSenders)
 * @method ConversationType getGlobalUniqueUnreadSenders()
 * @method ConversationType setGlobalUniqueUnreadSenders(array $globalUniqueUnreadSenders)
 * @method ConversationType getUniqueSenders()
 * @method ConversationType setUniqueSenders(array $uniqueSenders)
 * @method ConversationType getGlobalUniqueSenders()
 * @method ConversationType setGlobalUniqueSenders(array $globalUniqueSenders)
 * @method ConversationType getLastDeliveryTime()
 * @method ConversationType setLastDeliveryTime(\DateTime $lastDeliveryTime)
 * @method ConversationType getGlobalLastDeliveryTime()
 * @method ConversationType setGlobalLastDeliveryTime(\DateTime $globalLastDeliveryTime)
 * @method ConversationType getCategories()
 * @method ConversationType setCategories(array $categories)
 * @method ConversationType getGlobalCategories()
 * @method ConversationType setGlobalCategories(array $globalCategories)
 * @method ConversationType getFlagStatus()
 * @method ConversationType setFlagStatus(string $flagStatus)
 * @method ConversationType getGlobalFlagStatus()
 * @method ConversationType setGlobalFlagStatus(string $globalFlagStatus)
 * @method ConversationType getHasAttachments()
 * @method ConversationType setHasAttachments(boolean $hasAttachments)
 * @method ConversationType getGlobalHasAttachments()
 * @method ConversationType setGlobalHasAttachments(boolean $globalHasAttachments)
 * @method ConversationType getMessageCount()
 * @method ConversationType setMessageCount(integer $messageCount)
 * @method ConversationType getGlobalMessageCount()
 * @method ConversationType setGlobalMessageCount(integer $globalMessageCount)
 * @method ConversationType getUnreadCount()
 * @method ConversationType setUnreadCount(integer $unreadCount)
 * @method ConversationType getGlobalUnreadCount()
 * @method ConversationType setGlobalUnreadCount(integer $globalUnreadCount)
 * @method ConversationType getSize()
 * @method ConversationType setSize(integer $size)
 * @method ConversationType getGlobalSize()
 * @method ConversationType setGlobalSize(integer $globalSize)
 * @method ConversationType getItemClasses()
 * @method ConversationType setItemClasses(array $itemClasses)
 * @method ConversationType getGlobalItemClasses()
 * @method ConversationType setGlobalItemClasses(array $globalItemClasses)
 * @method ConversationType getImportance()
 * @method ConversationType setImportance(string $importance)
 * @method ConversationType getGlobalImportance()
 * @method ConversationType setGlobalImportance(string $globalImportance)
 * @method ConversationType getItemIds()
 * @method ConversationType setItemIds(NonEmptyArrayOfBaseItemIdsType $itemIds)
 * @method ConversationType getGlobalItemIds()
 * @method ConversationType setGlobalItemIds(NonEmptyArrayOfBaseItemIdsType $globalItemIds)
 */
class ConversationType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $conversationId
     */
    protected $conversationId = null;

    /**
     * @property string $conversationTopic
     */
    protected $conversationTopic = null;

    /**
     * @property string[] $uniqueRecipients
     */
    protected $uniqueRecipients = null;

    /**
     * @property string[] $globalUniqueRecipients
     */
    protected $globalUniqueRecipients = null;

    /**
     * @property string[] $uniqueUnreadSenders
     */
    protected $uniqueUnreadSenders = null;

    /**
     * @property string[] $globalUniqueUnreadSenders
     */
    protected $globalUniqueUnreadSenders = null;

    /**
     * @property string[] $uniqueSenders
     */
    protected $uniqueSenders = null;

    /**
     * @property string[] $globalUniqueSenders
     */
    protected $globalUniqueSenders = null;

    /**
     * @property \DateTime $lastDeliveryTime
     */
    protected $lastDeliveryTime = null;

    protected $_typeMap = array(
        'lastDeliveryTime' => 'dateTime',
        'globalLastDeliveryTime' => 'dateTime',
    );

    /**
     * @property \DateTime $globalLastDeliveryTime
     */
    protected $globalLastDeliveryTime = null;

    /**
     * @property string[] $categories
     */
    protected $categories = null;

    /**
     * @property string[] $globalCategories
     */
    protected $globalCategories = null;

    /**
     * @property string $flagStatus
     */
    protected $flagStatus = null;

    /**
     * @property string $globalFlagStatus
     */
    protected $globalFlagStatus = null;

    /**
     * @property boolean $hasAttachments
     */
    protected $hasAttachments = null;

    /**
     * @property boolean $globalHasAttachments
     */
    protected $globalHasAttachments = null;

    /**
     * @property integer $messageCount
     */
    protected $messageCount = null;

    /**
     * @property integer $globalMessageCount
     */
    protected $globalMessageCount = null;

    /**
     * @property integer $unreadCount
     */
    protected $unreadCount = null;

    /**
     * @property integer $globalUnreadCount
     */
    protected $globalUnreadCount = null;

    /**
     * @property integer $size
     */
    protected $size = null;

    /**
     * @property integer $globalSize
     */
    protected $globalSize = null;

    /**
     * @property string[] $itemClasses
     */
    protected $itemClasses = null;

    /**
     * @property string[] $globalItemClasses
     */
    protected $globalItemClasses = null;

    /**
     * @property string $importance
     */
    protected $importance = null;

    /**
     * @property string $globalImportance
     */
    protected $globalImportance = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfBaseItemIdsType
     * $globalItemIds
     */
    protected $globalItemIds = null;
}
