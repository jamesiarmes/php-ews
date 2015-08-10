<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ConversationActionType
 *
 *
 * XSD Type: ConversationActionType
 *
 * @method ConversationActionType getAction()
 * @method ConversationActionType setAction($action)
 * @method ConversationActionType getConversationId()
 * @method ConversationActionType setConversationId($conversationId)
 * @method ConversationActionType getContextFolderId()
 * @method ConversationActionType setContextFolderId($contextFolderId)
 * @method ConversationActionType getConversationLastSyncTime()
 * @method ConversationActionType
 * setConversationLastSyncTime($conversationLastSyncTime)
 * @method ConversationActionType getProcessRightAway()
 * @method ConversationActionType setProcessRightAway($processRightAway)
 * @method ConversationActionType getDestinationFolderId()
 * @method ConversationActionType setDestinationFolderId($destinationFolderId)
 * @method ConversationActionType getCategories()
 * @method ConversationActionType setCategories($categories)
 * @method ConversationActionType getEnableAlwaysDelete()
 * @method ConversationActionType setEnableAlwaysDelete($enableAlwaysDelete)
 * @method ConversationActionType getIsRead()
 * @method ConversationActionType setIsRead($isRead)
 * @method ConversationActionType getDeleteType()
 * @method ConversationActionType setDeleteType($deleteType)
 */
class ConversationActionType extends Type
{

    /**
     * @property string $action
     */
    protected $action = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $conversationId
     */
    protected $conversationId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $contextFolderId
     */
    protected $contextFolderId = null;

    /**
     * @property \DateTime $conversationLastSyncTime
     */
    protected $conversationLastSyncTime = null;

    /**
     * @property boolean $processRightAway
     */
    protected $processRightAway = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TargetFolderIdType $destinationFolderId
     */
    protected $destinationFolderId = null;

    /**
     * @property array $categories
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

