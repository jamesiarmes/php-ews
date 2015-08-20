<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing ArrayOfResponseMessagesType
 *
 *
 * XSD Type: ArrayOfResponseMessagesType
 *
 * @method ArrayOfResponseMessagesType addCreateItemResponseMessage(ItemInfoResponseMessageType $createItemResponseMessage)
 * @method ItemInfoResponseMessageType[] getCreateItemResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateItemResponseMessage(array $createItemResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteItemResponseMessage(ResponseMessageType $deleteItemResponseMessage)
 * @method ResponseMessageType[] getDeleteItemResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteItemResponseMessage(array $deleteItemResponseMessage)
 * @method ArrayOfResponseMessagesType addGetItemResponseMessage(ItemInfoResponseMessageType $getItemResponseMessage)
 * @method ItemInfoResponseMessageType[] getGetItemResponseMessage()
 * @method ArrayOfResponseMessagesType setGetItemResponseMessage(array $getItemResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateItemResponseMessage(UpdateItemResponseMessageType $updateItemResponseMessage)
 * @method UpdateItemResponseMessageType[] getUpdateItemResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateItemResponseMessage(array $updateItemResponseMessage)
 * @method ArrayOfResponseMessagesType addSendItemResponseMessage(ResponseMessageType $sendItemResponseMessage)
 * @method ResponseMessageType[] getSendItemResponseMessage()
 * @method ArrayOfResponseMessagesType setSendItemResponseMessage(array $sendItemResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteFolderResponseMessage(ResponseMessageType $deleteFolderResponseMessage)
 * @method ResponseMessageType[] getDeleteFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteFolderResponseMessage(array $deleteFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addEmptyFolderResponseMessage(ResponseMessageType $emptyFolderResponseMessage)
 * @method ResponseMessageType[] getEmptyFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setEmptyFolderResponseMessage(array $emptyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateFolderResponseMessage(FolderInfoResponseMessageType $createFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getCreateFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateFolderResponseMessage(array $createFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addGetFolderResponseMessage(FolderInfoResponseMessageType $getFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getGetFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setGetFolderResponseMessage(array $getFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addFindFolderResponseMessage(FindFolderResponseMessageType $findFolderResponseMessage)
 * @method FindFolderResponseMessageType[] getFindFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setFindFolderResponseMessage(array $findFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateFolderResponseMessage(FolderInfoResponseMessageType $updateFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getUpdateFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateFolderResponseMessage(array $updateFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addMoveFolderResponseMessage(FolderInfoResponseMessageType $moveFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getMoveFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setMoveFolderResponseMessage(array $moveFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCopyFolderResponseMessage(FolderInfoResponseMessageType $copyFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getCopyFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCopyFolderResponseMessage(array $copyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateAttachmentResponseMessage(AttachmentInfoResponseMessageType $createAttachmentResponseMessage)
 * @method AttachmentInfoResponseMessageType[] getCreateAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateAttachmentResponseMessage(array $createAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteAttachmentResponseMessage(DeleteAttachmentResponseMessageType $deleteAttachmentResponseMessage)
 * @method DeleteAttachmentResponseMessageType[] getDeleteAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteAttachmentResponseMessage(array $deleteAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addGetAttachmentResponseMessage(AttachmentInfoResponseMessageType $getAttachmentResponseMessage)
 * @method AttachmentInfoResponseMessageType[] getGetAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setGetAttachmentResponseMessage(array $getAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType addUploadItemsResponseMessage(UploadItemsResponseMessageType $uploadItemsResponseMessage)
 * @method UploadItemsResponseMessageType[] getUploadItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setUploadItemsResponseMessage(array $uploadItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addExportItemsResponseMessage(ExportItemsResponseMessageType $exportItemsResponseMessage)
 * @method ExportItemsResponseMessageType[] getExportItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setExportItemsResponseMessage(array $exportItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addFindItemResponseMessage(FindItemResponseMessageType $findItemResponseMessage)
 * @method FindItemResponseMessageType[] getFindItemResponseMessage()
 * @method ArrayOfResponseMessagesType setFindItemResponseMessage(array $findItemResponseMessage)
 * @method ArrayOfResponseMessagesType addMoveItemResponseMessage(ItemInfoResponseMessageType $moveItemResponseMessage)
 * @method ItemInfoResponseMessageType[] getMoveItemResponseMessage()
 * @method ArrayOfResponseMessagesType setMoveItemResponseMessage(array $moveItemResponseMessage)
 * @method ArrayOfResponseMessagesType addCopyItemResponseMessage(ItemInfoResponseMessageType $copyItemResponseMessage)
 * @method ItemInfoResponseMessageType[] getCopyItemResponseMessage()
 * @method ArrayOfResponseMessagesType setCopyItemResponseMessage(array $copyItemResponseMessage)
 * @method ArrayOfResponseMessagesType addResolveNamesResponseMessage(ResolveNamesResponseMessageType $resolveNamesResponseMessage)
 * @method ResolveNamesResponseMessageType[] getResolveNamesResponseMessage()
 * @method ArrayOfResponseMessagesType setResolveNamesResponseMessage(array $resolveNamesResponseMessage)
 * @method ArrayOfResponseMessagesType addExpandDLResponseMessage(ExpandDLResponseMessageType $expandDLResponseMessage)
 * @method ExpandDLResponseMessageType[] getExpandDLResponseMessage()
 * @method ArrayOfResponseMessagesType setExpandDLResponseMessage(array $expandDLResponseMessage)
 * @method ArrayOfResponseMessagesType addGetServerTimeZonesResponseMessage(GetServerTimeZonesResponseMessageType $getServerTimeZonesResponseMessage)
 * @method GetServerTimeZonesResponseMessageType[] getGetServerTimeZonesResponseMessage()
 * @method ArrayOfResponseMessagesType setGetServerTimeZonesResponseMessage(array $getServerTimeZonesResponseMessage)
 * @method ArrayOfResponseMessagesType addGetEventsResponseMessage(GetEventsResponseMessageType $getEventsResponseMessage)
 * @method GetEventsResponseMessageType[] getGetEventsResponseMessage()
 * @method ArrayOfResponseMessagesType setGetEventsResponseMessage(array $getEventsResponseMessage)
 * @method ArrayOfResponseMessagesType addGetStreamingEventsResponseMessage(GetStreamingEventsResponseMessageType $getStreamingEventsResponseMessage)
 * @method GetStreamingEventsResponseMessageType[] getGetStreamingEventsResponseMessage()
 * @method ArrayOfResponseMessagesType setGetStreamingEventsResponseMessage(array $getStreamingEventsResponseMessage)
 * @method ArrayOfResponseMessagesType addSubscribeResponseMessage(SubscribeResponseMessageType $subscribeResponseMessage)
 * @method SubscribeResponseMessageType[] getSubscribeResponseMessage()
 * @method ArrayOfResponseMessagesType setSubscribeResponseMessage(array $subscribeResponseMessage)
 * @method ArrayOfResponseMessagesType addUnsubscribeResponseMessage(ResponseMessageType $unsubscribeResponseMessage)
 * @method ResponseMessageType[] getUnsubscribeResponseMessage()
 * @method ArrayOfResponseMessagesType setUnsubscribeResponseMessage(array $unsubscribeResponseMessage)
 * @method ArrayOfResponseMessagesType addSendNotificationResponseMessage(SendNotificationResponseMessageType $sendNotificationResponseMessage)
 * @method SendNotificationResponseMessageType[] getSendNotificationResponseMessage()
 * @method ArrayOfResponseMessagesType setSendNotificationResponseMessage(array $sendNotificationResponseMessage)
 * @method ArrayOfResponseMessagesType addSyncFolderHierarchyResponseMessage(SyncFolderHierarchyResponseMessageType $syncFolderHierarchyResponseMessage)
 * @method SyncFolderHierarchyResponseMessageType[] getSyncFolderHierarchyResponseMessage()
 * @method ArrayOfResponseMessagesType setSyncFolderHierarchyResponseMessage(array $syncFolderHierarchyResponseMessage)
 * @method ArrayOfResponseMessagesType addSyncFolderItemsResponseMessage(SyncFolderItemsResponseMessageType $syncFolderItemsResponseMessage)
 * @method SyncFolderItemsResponseMessageType[] getSyncFolderItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setSyncFolderItemsResponseMessage(array $syncFolderItemsResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateManagedFolderResponseMessage(FolderInfoResponseMessageType $createManagedFolderResponseMessage)
 * @method FolderInfoResponseMessageType[] getCreateManagedFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateManagedFolderResponseMessage(array $createManagedFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addConvertIdResponseMessage(ConvertIdResponseMessageType $convertIdResponseMessage)
 * @method ConvertIdResponseMessageType[] getConvertIdResponseMessage()
 * @method ArrayOfResponseMessagesType setConvertIdResponseMessage(array $convertIdResponseMessage)
 * @method ArrayOfResponseMessagesType addGetSharingMetadataResponseMessage(GetSharingMetadataResponseMessageType $getSharingMetadataResponseMessage)
 * @method GetSharingMetadataResponseMessageType[] getGetSharingMetadataResponseMessage()
 * @method ArrayOfResponseMessagesType setGetSharingMetadataResponseMessage(array $getSharingMetadataResponseMessage)
 * @method ArrayOfResponseMessagesType addRefreshSharingFolderResponseMessage(RefreshSharingFolderResponseMessageType $refreshSharingFolderResponseMessage)
 * @method RefreshSharingFolderResponseMessageType[] getRefreshSharingFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setRefreshSharingFolderResponseMessage(array $refreshSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addGetSharingFolderResponseMessage(GetSharingFolderResponseMessageType $getSharingFolderResponseMessage)
 * @method GetSharingFolderResponseMessageType[] getGetSharingFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setGetSharingFolderResponseMessage(array $getSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType addCreateUserConfigurationResponseMessage(ResponseMessageType $createUserConfigurationResponseMessage)
 * @method ResponseMessageType[] getCreateUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateUserConfigurationResponseMessage(array $createUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addDeleteUserConfigurationResponseMessage(ResponseMessageType $deleteUserConfigurationResponseMessage)
 * @method ResponseMessageType[] getDeleteUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteUserConfigurationResponseMessage(array $deleteUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addGetUserConfigurationResponseMessage(GetUserConfigurationResponseMessageType $getUserConfigurationResponseMessage)
 * @method GetUserConfigurationResponseMessageType[] getGetUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setGetUserConfigurationResponseMessage(array $getUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addUpdateUserConfigurationResponseMessage(ResponseMessageType $updateUserConfigurationResponseMessage)
 * @method ResponseMessageType[] getUpdateUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateUserConfigurationResponseMessage(array $updateUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType addGetRoomListsResponse(GetRoomListsResponseMessageType $getRoomListsResponse)
 * @method GetRoomListsResponseMessageType[] getGetRoomListsResponse()
 * @method ArrayOfResponseMessagesType setGetRoomListsResponse(array $getRoomListsResponse)
 * @method ArrayOfResponseMessagesType addGetRoomsResponse(GetRoomsResponseMessageType $getRoomsResponse)
 * @method GetRoomsResponseMessageType[] getGetRoomsResponse()
 * @method ArrayOfResponseMessagesType setGetRoomsResponse(array $getRoomsResponse)
 * @method ArrayOfResponseMessagesType addApplyConversationActionResponseMessage(ResponseMessageType $applyConversationActionResponseMessage)
 * @method ResponseMessageType[] getApplyConversationActionResponseMessage()
 * @method ArrayOfResponseMessagesType setApplyConversationActionResponseMessage(array $applyConversationActionResponseMessage)
 * @method ArrayOfResponseMessagesType addFindMailboxStatisticsByKeywordsResponseMessage(FindMailboxStatisticsByKeywordsResponseMessageType $findMailboxStatisticsByKeywordsResponseMessage)
 * @method FindMailboxStatisticsByKeywordsResponseMessageType[] getFindMailboxStatisticsByKeywordsResponseMessage()
 * @method ArrayOfResponseMessagesType setFindMailboxStatisticsByKeywordsResponseMessage(array $findMailboxStatisticsByKeywordsResponseMessage)
 * @method ArrayOfResponseMessagesType addGetPasswordExpirationDateResponse(GetPasswordExpirationDateResponseMessageType $getPasswordExpirationDateResponse)
 * @method GetPasswordExpirationDateResponseMessageType[] getGetPasswordExpirationDateResponse()
 * @method ArrayOfResponseMessagesType setGetPasswordExpirationDateResponse(array $getPasswordExpirationDateResponse)
 */
class ArrayOfResponseMessagesType extends Message
{

    /**
     * @var \jamesiarmes\PEWS\API\Message\ItemInfoResponseMessageType[]
     */
    protected $createItemResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $deleteItemResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ItemInfoResponseMessageType[]
     */
    protected $getItemResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\UpdateItemResponseMessageType[]
     */
    protected $updateItemResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $sendItemResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $deleteFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $emptyFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\FolderInfoResponseMessageType[]
     */
    protected $createFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\FolderInfoResponseMessageType[]
     */
    protected $getFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\FindFolderResponseMessageType[]
     */
    protected $findFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\FolderInfoResponseMessageType[]
     */
    protected $updateFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\FolderInfoResponseMessageType[]
     */
    protected $moveFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\FolderInfoResponseMessageType[]
     */
    protected $copyFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\AttachmentInfoResponseMessageType[]
     */
    protected $createAttachmentResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\DeleteAttachmentResponseMessageType[]
     */
    protected $deleteAttachmentResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\AttachmentInfoResponseMessageType[]
     */
    protected $getAttachmentResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\UploadItemsResponseMessageType[]
     */
    protected $uploadItemsResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ExportItemsResponseMessageType[]
     */
    protected $exportItemsResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\FindItemResponseMessageType[]
     */
    protected $findItemResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ItemInfoResponseMessageType[]
     */
    protected $moveItemResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ItemInfoResponseMessageType[]
     */
    protected $copyItemResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResolveNamesResponseMessageType[]
     */
    protected $resolveNamesResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ExpandDLResponseMessageType[]
     */
    protected $expandDLResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\GetServerTimeZonesResponseMessageType[]
     */
    protected $getServerTimeZonesResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\GetEventsResponseMessageType[]
     */
    protected $getEventsResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\GetStreamingEventsResponseMessageType[]
     */
    protected $getStreamingEventsResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\SubscribeResponseMessageType[]
     */
    protected $subscribeResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $unsubscribeResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\SendNotificationResponseMessageType[]
     */
    protected $sendNotificationResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\SyncFolderHierarchyResponseMessageType[]
     */
    protected $syncFolderHierarchyResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\SyncFolderItemsResponseMessageType[]
     */
    protected $syncFolderItemsResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\FolderInfoResponseMessageType[]
     */
    protected $createManagedFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ConvertIdResponseMessageType[]
     */
    protected $convertIdResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\GetSharingMetadataResponseMessageType[]
     */
    protected $getSharingMetadataResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\RefreshSharingFolderResponseMessageType[]
     */
    protected $refreshSharingFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\GetSharingFolderResponseMessageType[]
     */
    protected $getSharingFolderResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $createUserConfigurationResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $deleteUserConfigurationResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\GetUserConfigurationResponseMessageType[]
     */
    protected $getUserConfigurationResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $updateUserConfigurationResponseMessage = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\GetRoomListsResponseMessageType[]
     */
    protected $getRoomListsResponse = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\GetRoomsResponseMessageType[]
     */
    protected $getRoomsResponse = null;

    /**
     * @var \jamesiarmes\PEWS\API\Message\ResponseMessageType[]
     */
    protected $applyConversationActionResponseMessage = null;

    /**
     * @var
     * \jamesiarmes\PEWS\API\Message\FindMailboxStatisticsByKeywordsResponseMessageType[]
     */
    protected $findMailboxStatisticsByKeywordsResponseMessage = null;

    /**
     * @var
     * \jamesiarmes\PEWS\API\Message\GetPasswordExpirationDateResponseMessageType[]
     */
    protected $getPasswordExpirationDateResponse = null;
}
