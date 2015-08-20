<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ConversationActionType
 *
 *
 * XSD Type: ConversationActionType
 *
 * @method ConversationActionType getAction()
 * @method ConversationActionType setAction(string $action)
 * @method ConversationActionType getConversationId()
 * @method ConversationActionType setConversationId(ItemIdType $conversationId)
 * @method ConversationActionType getContextFolderId()
 * @method ConversationActionType setContextFolderId(TargetFolderIdType $contextFolderId)
 * @method ConversationActionType getConversationLastSyncTime()
 * @method ConversationActionType setConversationLastSyncTime(\DateTime $conversationLastSyncTime)
 * @method ConversationActionType getProcessRightAway()
 * @method ConversationActionType setProcessRightAway(boolean $processRightAway)
 * @method ConversationActionType getDestinationFolderId()
 * @method ConversationActionType setDestinationFolderId(TargetFolderIdType $destinationFolderId)
 * @method ConversationActionType getCategories()
 * @method ConversationActionType setCategories(array $categories)
 * @method ConversationActionType getEnableAlwaysDelete()
 * @method ConversationActionType setEnableAlwaysDelete(boolean $enableAlwaysDelete)
 * @method ConversationActionType getIsRead()
 * @method ConversationActionType setIsRead(boolean $isRead)
 * @method ConversationActionType getDeleteType()
 * @method ConversationActionType setDeleteType(string $deleteType)
 */
class ConversationActionType extends Type
{

    /**
     * @property string $action
     */
    protected $action = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $conversationId
     */
    protected $conversationId = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $contextFolderId
     */
    protected $contextFolderId = null;

    /**
     * @property \DateTime $conversationLastSyncTime
     */
    protected $conversationLastSyncTime = null;

    protected $_typeMap = array(
        'conversationLastSyncTime' => 'dateTime',
    );

    /**
     * @property boolean $processRightAway
     */
    protected $processRightAway = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TargetFolderIdType $destinationFolderId
     */
    protected $destinationFolderId = null;

    /**
     * @property string[] $categories
     */
    protected $categories = null;

    /**
     * @property boolean $enableAlwaysDelete
     */
    protected $enableAlwaysDelete = null;

    /**
     * @property boolean $isRead
     */
    protected $isRead = null;

    /**
     * @property string $deleteType
     */
    protected $deleteType = null;


}

