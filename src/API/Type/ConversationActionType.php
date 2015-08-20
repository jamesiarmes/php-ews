<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ConversationActionType
 *
 *
 * XSD Type: ConversationActionType
 *
 * @method string getAction()
 * @method ConversationActionType setAction(string $action)
 * @method ItemIdType getConversationId()
 * @method ConversationActionType setConversationId(ItemIdType $conversationId)
 * @method TargetFolderIdType getContextFolderId()
 * @method ConversationActionType setContextFolderId(TargetFolderIdType $contextFolderId)
 * @method \DateTime getConversationLastSyncTime()
 * @method ConversationActionType setConversationLastSyncTime(\DateTime $conversationLastSyncTime)
 * @method boolean getProcessRightAway()
 * @method ConversationActionType setProcessRightAway(boolean $processRightAway)
 * @method TargetFolderIdType getDestinationFolderId()
 * @method ConversationActionType setDestinationFolderId(TargetFolderIdType $destinationFolderId)
 * @method ConversationActionType addCategories(string $categories)
 * @method string[] getCategories()
 * @method ConversationActionType setCategories(array $categories)
 * @method boolean getEnableAlwaysDelete()
 * @method ConversationActionType setEnableAlwaysDelete(boolean $enableAlwaysDelete)
 * @method boolean getIsRead()
 * @method ConversationActionType setIsRead(boolean $isRead)
 * @method string getDeleteType()
 * @method ConversationActionType setDeleteType(string $deleteType)
 */
class ConversationActionType extends Type
{

    /**
     * @var string
     */
    protected $action = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $conversationId = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $contextFolderId = null;

    /**
     * @var \DateTime
     */
    protected $conversationLastSyncTime = null;

    protected $_typeMap = array(
        'conversationLastSyncTime' => 'dateTime',
    );

    /**
     * @var boolean
     */
    protected $processRightAway = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TargetFolderIdType
     */
    protected $destinationFolderId = null;

    /**
     * @var string[]
     */
    protected $categories = null;

    /**
     * @var boolean
     */
    protected $enableAlwaysDelete = null;

    /**
     * @var boolean
     */
    protected $isRead = null;

    /**
     * @var string
     */
    protected $deleteType = null;
}
