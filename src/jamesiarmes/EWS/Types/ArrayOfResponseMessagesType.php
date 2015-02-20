<?php
/**
 * Contains ArrayOfResponseMessagesType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the response messages for an Exchange Web Services request.
 *
 * @package jamesiarmes\EWS\Types
 */
class ArrayOfResponseMessagesType extends EWSType
{
    /**
     * Contains the status and results of an ApplyConversationAction Operation
     * request.
     *
     * @since Exchange 2010 SP1
     *
     * @var ApplyConversationActionResponseMessageType
     */
    public $ApplyConversationActionResponseMessage;

    /**
     * Contains the status and result of a ConvertId request.
     *
     * @since Exchange 2007 SP1
     *
     * @var ConvertIdResponseMessageType
     */
    public $ConvertIdResponseMessage;

    /**
     * Contains the status and result of a single CopyFolder request.
     *
     * @since Exchange 2007
     *
     * @var FolderInfoResponseMessageType
     */
    public $CopyFolderResponseMessage;

    /**
     * Contains the status and result of a single CopyItem request.
     *
     * @since Exchange 2007
     *
     * @var ItemInfoResponseMessageType
     */
    public $CopyItemResponseMessage;

    /**
     * Contains the status and result of a single CreateAttachment request.
     *
     * @since Exchange 2007
     *
     * @var AttachmentInfoResponseMessageType
     */
    public $CreateAttachmentResponseMessage;

    /**
     * Contains the status and result of a single CreateFolder request.
     *
     * @since Exchange 2007
     *
     * @var FolderInfoResponseMessageType
     */
    public $CreateFolderResponseMessage;

    /**
     * Contains the status and result of a single CreateItem request.
     *
     * @since Exchange 2007
     *
     * @var ItemInfoResponseMessageType
     */
    public $CreateItemResponseMessage;

    /**
     * Contains the status and result of a single CreateManagedFolder request.
     *
     * @since Exchange 2007
     *
     * @var FolderInfoResponseMessageType
     */
    public $CreateManagedFolderResponseMessage;

    /**
     * Contains the status and results of a CreateUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var ResponseMessageType
     */
    public $CreateUserConfigurationResponseMessage;

    /**
     * Contains the status and result of a single DeleteAttachment request.
     *
     * @since Exchange 2007
     *
     * @var DeleteAttachmentResponseMessageType
     */
    public $DeleteAttachmentResponseMessage;

    /**
     * Contains the status and result of a single DeleteFolder request.
     *
     * @since Exchange 2007
     *
     * @var ResponseMessageType
     */
    public $DeleteFolderResponseMessage;

    /**
     * Contains the status and result of a single DeleteItem request.
     *
     * @since Exchange 2007
     *
     * @var ResponseMessageType
     */
    public $DeleteItemResponseMessage;

    /**
     * Contains the status and results of a DeleteUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var ResponseMessageType
     */
    public $DeleteUserConfigurationResponseMessage;

    /**
     * Contains the status and result of a single EmptyFolder request.
     *
     * @since Exchange 2010
     *
     * @var ResponseMessageType
     */
    public $EmptyFolderResponseMessage;

    /**
     * Contains the status and result of a single ExpandDL request.
     *
     * @since Exchange 2007
     *
     * @var ExpandDLResponseMessageType
     */
    public $ExpandDLResponseMessage;

    /**
     * Contains the status and results of a single ExportItems request.
     *
     * @since Exchange 2010 SP1
     *
     * @var ExportItemsResponseMessageType
     */
    public $ExportItemsResponseMessage;

    /**
     * Contains the status and result of a single FindFolder request.
     *
     * @since Exchange 2007
     *
     * @var FindFolderResponseMessageType
     */
    public $FindFolderResponseMessage;

    /**
     * Contains the status and result of a single FindItem request.
     *
     * @since Exchange 2007
     *
     * @var FindItemResponseMessageType
     */
    public $FindItemResponseMessage;

    /**
     * Contains the status and result of a single FindMailboxStatisticsByKeyword
     * request.
     *
     * @since Exchange 2013
     *
     * @var FindMailboxStatisticsByKeywordsResponseMessageType
     */
    public $FindMailboxStatisticsByKeywordsResponseMessage;

    /**
     * Contains the status and result of a single GetAttachment request.
     *
     * @since Exchange 2007
     *
     * @var AttachmentInfoResponseMessageType
     */
    public $GetAttachmentResponseMessage;

    /**
     * Contains the status and result of a single GetEvents request.
     *
     * @since Exchange 2007
     *
     * @var GetEventsResponseMessageType
     */
    public $GetEventsResponseMessage;

    /**
     * Contains the status and result of a single GetFolder request.
     *
     * @since Exchange 2007
     *
     * @var FolderInfoResponseMessageType
     */
    public $GetFolderResponseMessage;

    /**
     * Contains the status and result of a single GetItem request.
     *
     * @since Exchange 2007
     *
     * @var ItemInfoResponseMessageType
     */
    public $GetItemResponseMessage;

    /**
     * Contains the status and results of a GetReminders request.
     *
     * @since Exchange 2013
     *
     * @var GetRemindersResponseMessageType
     */
    public $GetRemindersResponse;

    /**
     * Contains the status and results of a GetRoomLists request.
     *
     * @since Exchange 2010
     *
     * @var GetRoomListsResponseMessageType
     */
    public $GetRoomListsResponse;

    /**
     * Contains the status and results of a GetRooms request.
     *
     * @since Exchange 2010
     *
     * @var GetRoomsResponseMessageType
     */
    public $GetRoomsResponse;

    /**
     * Contains the status and result of a single GetServerTimeZones request.
     *
     * @since Exchange 2010
     *
     * @var GetServerTimeZonesResponseMessageType
     */
    public $GetServerTimeZonesResponseMessage;

    /**
     * Contains the status and results of a GetSharingFolder request.
     *
     * @since Exchange 2010
     *
     * @var GetSharingFolderResponseMessageType
     */
    public $GetSharingFolderResponseMessage;

    /**
     * Contains the status and results of a GetSharingMetadata request.
     *
     * @since Exchange 2010
     *
     * @var GetSharingMetadataResponseMessageType
     */
    public $GetSharingMetadataResponseMessage;

    /**
     * Contains the status and result of a single GetStreamingEvents request.
     *
     * @since Exchange 2010 SP1
     *
     * @var GetStreamingEventsResponseMessageType
     */
    public $GetStreamingEventsResponseMessage;

    /**
     * Contains the status and results of a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var GetUserConfigurationResponseMessageType
     */
    public $GetUserConfigurationResponseMessage;

    /**
     * Contains the status and result of a single MoveFolder request.
     *
     * @since Exchange 2007
     *
     * @var FolderInfoResponseMessageType
     */
    public $MoveFolderResponseMessage;

    /**
     * Contains the status and result of a single MoveItem request.
     *
     * @since Exchange 2007
     *
     * @var ItemInfoResponseMessageType
     */
    public $MoveItemResponseMessage;

    /**
     * Contains the status and results of a PerformReminderAction request.
     *
     * @since Exchange 2013
     *
     * @var PerformReminderActionResponseMessageType
     */
    public $PerformReminderActionResponse;

    /**
     * Contains the status and results of a RefreshSharingFolder request.
     *
     * @since Exchange 2010
     *
     * @var ResponseMessageType
     */
    public $RefreshSharingFolderResponseMessage;

    /**
     * Contains the status and result of a ResolveNames request.
     *
     * @since Exchange 2007
     *
     * @var ResolveNamesResponseMessageType
     */
    public $ResolveNamesResponseMessage;

    /**
     * Contains the status and result of a single SendItem request.
     *
     * @since Exchange 2007
     *
     * @var ResponseMessageType
     */
    public $SendItemResponseMessage;

    /**
     * Contains the status and result of a single SendNotification request.
     *
     * @since Exchange 2007
     *
     * @var SendNotificationResponseMessageType
     */
    public $SendNotificationResponseMessage;

    /**
     * Contains the status and result of a single Subscribe request.
     *
     * @since Exchange 2007
     *
     * @var SubscribeResponseMessageType
     */
    public $SubscribeResponseMessage;

    /**
     * Contains the status and result of a SyncFolderHierarchy request.
     *
     * @since Exchange 2007
     *
     * @var SyncFolderHierarchyResponseMessageType
     */
    public $SyncFolderHierarchyResponseMessage;

    /**
     * Contains the status and result of a SyncFolderItems request.
     *
     * @since Exchange 2007
     *
     * @var SyncFolderItemsResponseMessageType
     */
    public $SyncFolderItemsResponseMessage;

    /**
     * Contains the status and result of a single Unsubscribe request.
     *
     * @since Exchange 2007
     *
     * @var ResponseMessageType
     */
    public $UnsubscribeResponseMessage;

    /**
     * Contains the status and result of a single UpdateFolder request.
     *
     * @since Exchange 2007
     *
     * @var FolderInfoResponseMessageType
     */
    public $UpdateFolderResponseMessage;

    /**
     * Contains the status and result of a single UpdateItem request.
     *
     * @since Exchange 2007
     *
     * @var UpdateItemResponseMessageType
     */
    public $UpdateItemResponseMessage;

    /**
     * Contains the status and results of an UpdateUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var ResponseMessageType
     */
    public $UpdateUserConfigurationResponseMessage;

    /**
     * Contains the status and results of a single UploadItems request.
     *
     * @since Exchange 2010 SP1
     *
     * @var UploadItemsResponseMessageType
     */
    public $UploadItemsResponseMessage;
}
