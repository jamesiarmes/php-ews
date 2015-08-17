<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing ConversationType
 *
 *
 * XSD Type: ConversationType
 *
 * @method ConversationType getConversationId()
 * @method ConversationType setConversationId($conversationId)
 * @method ConversationType getConversationTopic()
 * @method ConversationType setConversationTopic($conversationTopic)
 * @method ConversationType getUniqueRecipients()
 * @method ConversationType setUniqueRecipients($uniqueRecipients)
 * @method ConversationType getGlobalUniqueRecipients()
 * @method ConversationType setGlobalUniqueRecipients($globalUniqueRecipients)
 * @method ConversationType getUniqueUnreadSenders()
 * @method ConversationType setUniqueUnreadSenders($uniqueUnreadSenders)
 * @method ConversationType getGlobalUniqueUnreadSenders()
 * @method ConversationType
 * setGlobalUniqueUnreadSenders($globalUniqueUnreadSenders)
 * @method ConversationType getUniqueSenders()
 * @method ConversationType setUniqueSenders($uniqueSenders)
 * @method ConversationType getGlobalUniqueSenders()
 * @method ConversationType setGlobalUniqueSenders($globalUniqueSenders)
 * @method ConversationType getLastDeliveryTime()
 * @method ConversationType setLastDeliveryTime($lastDeliveryTime)
 * @method ConversationType getGlobalLastDeliveryTime()
 * @method ConversationType setGlobalLastDeliveryTime($globalLastDeliveryTime)
 * @method ConversationType getCategories()
 * @method ConversationType setCategories($categories)
 * @method ConversationType getGlobalCategories()
 * @method ConversationType setGlobalCategories($globalCategories)
 * @method ConversationType getFlagStatus()
 * @method ConversationType setFlagStatus($flagStatus)
 * @method ConversationType getGlobalFlagStatus()
 * @method ConversationType setGlobalFlagStatus($globalFlagStatus)
 * @method ConversationType getHasAttachments()
 * @method ConversationType setHasAttachments($hasAttachments)
 * @method ConversationType getGlobalHasAttachments()
 * @method ConversationType setGlobalHasAttachments($globalHasAttachments)
 * @method ConversationType getMessageCount()
 * @method ConversationType setMessageCount($messageCount)
 * @method ConversationType getGlobalMessageCount()
 * @method ConversationType setGlobalMessageCount($globalMessageCount)
 * @method ConversationType getUnreadCount()
 * @method ConversationType setUnreadCount($unreadCount)
 * @method ConversationType getGlobalUnreadCount()
 * @method ConversationType setGlobalUnreadCount($globalUnreadCount)
 * @method ConversationType getSize()
 * @method ConversationType setSize($size)
 * @method ConversationType getGlobalSize()
 * @method ConversationType setGlobalSize($globalSize)
 * @method ConversationType getItemClasses()
 * @method ConversationType setItemClasses($itemClasses)
 * @method ConversationType getGlobalItemClasses()
 * @method ConversationType setGlobalItemClasses($globalItemClasses)
 * @method ConversationType getImportance()
 * @method ConversationType setImportance($importance)
 * @method ConversationType getGlobalImportance()
 * @method ConversationType setGlobalImportance($globalImportance)
 * @method ConversationType getItemIds()
 * @method ConversationType setItemIds($itemIds)
 * @method ConversationType getGlobalItemIds()
 * @method ConversationType setGlobalItemIds($globalItemIds)
 */
class ConversationType extends TypeTest
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $conversationId
     */
    protected $conversationId = null;

    /**
     * @property string $conversationTopic
     */
    protected $conversationTopic = null;

    /**
     * @property array $uniqueRecipients
     */
    protected $uniqueRecipients = null;

    /**
     * @property array $globalUniqueRecipients
     */
    protected $globalUniqueRecipients = null;

    /**
     * @property array $uniqueUnreadSenders
     */
    protected $uniqueUnreadSenders = null;

    /**
     * @property array $globalUniqueUnreadSenders
     */
    protected $globalUniqueUnreadSenders = null;

    /**
     * @property array $uniqueSenders
     */
    protected $uniqueSenders = null;

    /**
     * @property array $globalUniqueSenders
     */
    protected $globalUniqueSenders = null;

    /**
     * @property \DateTime $lastDeliveryTime
     */
    protected $lastDeliveryTime = null;

    /**
     * @property \DateTime $globalLastDeliveryTime
     */
    protected $globalLastDeliveryTime = null;

    /**
     * @property array $categories
     */
    protected $categories = null;

    /**
     * @property array $globalCategories
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
     * @property array $itemClasses
     */
    protected $itemClasses = null;

    /**
     * @property array $globalItemClasses
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
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType $itemIds
     */
    protected $itemIds = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfBaseItemIdsType
     * $globalItemIds
     */
    protected $globalItemIds = null;


}

