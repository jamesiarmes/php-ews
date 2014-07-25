<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the ArrayOfResponseMessagesType type
 */
class ArrayOfResponseMessagesType extends DataType
{
    /**
     * CreateItemResponseMessage property
     *
     * @var ItemInfoResponseMessageType
     */
    public $CreateItemResponseMessage;

    /**
     * DeleteItemResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $DeleteItemResponseMessage;

    /**
     * GetItemResponseMessage property
     *
     * @var ItemInfoResponseMessageType
     */
    public $GetItemResponseMessage;

    /**
     * UpdateItemResponseMessage property
     *
     * @var UpdateItemResponseMessageType
     */
    public $UpdateItemResponseMessage;

    /**
     * SendItemResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $SendItemResponseMessage;

    /**
     * DeleteFolderResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $DeleteFolderResponseMessage;

    /**
     * CreateFolderResponseMessage property
     *
     * @var FolderInfoResponseMessageType
     */
    public $CreateFolderResponseMessage;

    /**
     * GetFolderResponseMessage property
     *
     * @var FolderInfoResponseMessageType
     */
    public $GetFolderResponseMessage;

    /**
     * FindFolderResponseMessage property
     *
     * @var FindFolderResponseMessageType
     */
    public $FindFolderResponseMessage;

    /**
     * UpdateFolderResponseMessage property
     *
     * @var FolderInfoResponseMessageType
     */
    public $UpdateFolderResponseMessage;

    /**
     * MoveFolderResponseMessage property
     *
     * @var FolderInfoResponseMessageType
     */
    public $MoveFolderResponseMessage;

    /**
     * CopyFolderResponseMessage property
     *
     * @var FolderInfoResponseMessageType
     */
    public $CopyFolderResponseMessage;

    /**
     * CreateAttachmentResponseMessage property
     *
     * @var AttachmentInfoResponseMessageType
     */
    public $CreateAttachmentResponseMessage;

    /**
     * DeleteAttachmentResponseMessage property
     *
     * @var DeleteAttachmentResponseMessageType
     */
    public $DeleteAttachmentResponseMessage;

    /**
     * GetAttachmentResponseMessage property
     *
     * @var AttachmentInfoResponseMessageType
     */
    public $GetAttachmentResponseMessage;

    /**
     * FindItemResponseMessage property
     *
     * @var FindItemResponseMessageType
     */
    public $FindItemResponseMessage;

    /**
     * MoveItemResponseMessage property
     *
     * @var ItemInfoResponseMessageType
     */
    public $MoveItemResponseMessage;

    /**
     * CopyItemResponseMessage property
     *
     * @var ItemInfoResponseMessageType
     */
    public $CopyItemResponseMessage;

    /**
     * ResolveNamesResponseMessage property
     *
     * @var ResolveNamesResponseMessageType
     */
    public $ResolveNamesResponseMessage;

    /**
     * ExpandDLResponseMessage property
     *
     * @var ExpandDLResponseMessageType
     */
    public $ExpandDLResponseMessage;

    /**
     * GetEventsResponseMessage property
     *
     * @var GetEventsResponseMessageType
     */
    public $GetEventsResponseMessage;

    /**
     * SubscribeResponseMessage property
     *
     * @var SubscribeResponseMessageType
     */
    public $SubscribeResponseMessage;

    /**
     * UnsubscribeResponseMessage property
     *
     * @var ResponseMessageType
     */
    public $UnsubscribeResponseMessage;

    /**
     * SendNotificationResponseMessage property
     *
     * @var SendNotificationResponseMessageType
     */
    public $SendNotificationResponseMessage;

    /**
     * SyncFolderHierarchyResponseMessage property
     *
     * @var SyncFolderHierarchyResponseMessageType
     */
    public $SyncFolderHierarchyResponseMessage;

    /**
     * SyncFolderItemsResponseMessage property
     *
     * @var SyncFolderItemsResponseMessageType
     */
    public $SyncFolderItemsResponseMessage;

    /**
     * CreateManagedFolderResponseMessage property
     *
     * @var FolderInfoResponseMessageType
     */
    public $CreateManagedFolderResponseMessage;

    /**
     * ConvertIdResponseMessage property
     *
     * @var ConvertIdResponseMessageType
     */
    public $ConvertIdResponseMessage;
}
