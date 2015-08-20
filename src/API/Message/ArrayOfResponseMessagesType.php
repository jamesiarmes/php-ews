<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing ArrayOfResponseMessagesType
 *
 *
 * XSD Type: ArrayOfResponseMessagesType
 *
 * @method array getCreateItemResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateItemResponseMessage(array $createItemResponseMessage)
 * @method array getDeleteItemResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteItemResponseMessage(array $deleteItemResponseMessage)
 * @method array getGetItemResponseMessage()
 * @method ArrayOfResponseMessagesType setGetItemResponseMessage(array $getItemResponseMessage)
 * @method array getUpdateItemResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateItemResponseMessage(array $updateItemResponseMessage)
 * @method array getSendItemResponseMessage()
 * @method ArrayOfResponseMessagesType setSendItemResponseMessage(array $sendItemResponseMessage)
 * @method array getDeleteFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteFolderResponseMessage(array $deleteFolderResponseMessage)
 * @method array getEmptyFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setEmptyFolderResponseMessage(array $emptyFolderResponseMessage)
 * @method array getCreateFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateFolderResponseMessage(array $createFolderResponseMessage)
 * @method array getGetFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setGetFolderResponseMessage(array $getFolderResponseMessage)
 * @method array getFindFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setFindFolderResponseMessage(array $findFolderResponseMessage)
 * @method array getUpdateFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateFolderResponseMessage(array $updateFolderResponseMessage)
 * @method array getMoveFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setMoveFolderResponseMessage(array $moveFolderResponseMessage)
 * @method array getCopyFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCopyFolderResponseMessage(array $copyFolderResponseMessage)
 * @method array getCreateAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateAttachmentResponseMessage(array $createAttachmentResponseMessage)
 * @method array getDeleteAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteAttachmentResponseMessage(array $deleteAttachmentResponseMessage)
 * @method array getGetAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType setGetAttachmentResponseMessage(array $getAttachmentResponseMessage)
 * @method array getUploadItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setUploadItemsResponseMessage(array $uploadItemsResponseMessage)
 * @method array getExportItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setExportItemsResponseMessage(array $exportItemsResponseMessage)
 * @method array getFindItemResponseMessage()
 * @method ArrayOfResponseMessagesType setFindItemResponseMessage(array $findItemResponseMessage)
 * @method array getMoveItemResponseMessage()
 * @method ArrayOfResponseMessagesType setMoveItemResponseMessage(array $moveItemResponseMessage)
 * @method array getCopyItemResponseMessage()
 * @method ArrayOfResponseMessagesType setCopyItemResponseMessage(array $copyItemResponseMessage)
 * @method array getResolveNamesResponseMessage()
 * @method ArrayOfResponseMessagesType setResolveNamesResponseMessage(array $resolveNamesResponseMessage)
 * @method array getExpandDLResponseMessage()
 * @method ArrayOfResponseMessagesType setExpandDLResponseMessage(array $expandDLResponseMessage)
 * @method array getGetServerTimeZonesResponseMessage()
 * @method ArrayOfResponseMessagesType setGetServerTimeZonesResponseMessage(array $getServerTimeZonesResponseMessage)
 * @method array getGetEventsResponseMessage()
 * @method ArrayOfResponseMessagesType setGetEventsResponseMessage(array $getEventsResponseMessage)
 * @method array getGetStreamingEventsResponseMessage()
 * @method ArrayOfResponseMessagesType setGetStreamingEventsResponseMessage(array $getStreamingEventsResponseMessage)
 * @method array getSubscribeResponseMessage()
 * @method ArrayOfResponseMessagesType setSubscribeResponseMessage(array $subscribeResponseMessage)
 * @method array getUnsubscribeResponseMessage()
 * @method ArrayOfResponseMessagesType setUnsubscribeResponseMessage(array $unsubscribeResponseMessage)
 * @method array getSendNotificationResponseMessage()
 * @method ArrayOfResponseMessagesType setSendNotificationResponseMessage(array $sendNotificationResponseMessage)
 * @method array getSyncFolderHierarchyResponseMessage()
 * @method ArrayOfResponseMessagesType setSyncFolderHierarchyResponseMessage(array $syncFolderHierarchyResponseMessage)
 * @method array getSyncFolderItemsResponseMessage()
 * @method ArrayOfResponseMessagesType setSyncFolderItemsResponseMessage(array $syncFolderItemsResponseMessage)
 * @method array getCreateManagedFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateManagedFolderResponseMessage(array $createManagedFolderResponseMessage)
 * @method array getConvertIdResponseMessage()
 * @method ArrayOfResponseMessagesType setConvertIdResponseMessage(array $convertIdResponseMessage)
 * @method array getGetSharingMetadataResponseMessage()
 * @method ArrayOfResponseMessagesType setGetSharingMetadataResponseMessage(array $getSharingMetadataResponseMessage)
 * @method array getRefreshSharingFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setRefreshSharingFolderResponseMessage(array $refreshSharingFolderResponseMessage)
 * @method array getGetSharingFolderResponseMessage()
 * @method ArrayOfResponseMessagesType setGetSharingFolderResponseMessage(array $getSharingFolderResponseMessage)
 * @method array getCreateUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setCreateUserConfigurationResponseMessage(array $createUserConfigurationResponseMessage)
 * @method array getDeleteUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setDeleteUserConfigurationResponseMessage(array $deleteUserConfigurationResponseMessage)
 * @method array getGetUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setGetUserConfigurationResponseMessage(array $getUserConfigurationResponseMessage)
 * @method array getUpdateUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType setUpdateUserConfigurationResponseMessage(array $updateUserConfigurationResponseMessage)
 * @method array getGetRoomListsResponse()
 * @method ArrayOfResponseMessagesType setGetRoomListsResponse(array $getRoomListsResponse)
 * @method array getGetRoomsResponse()
 * @method ArrayOfResponseMessagesType setGetRoomsResponse(array $getRoomsResponse)
 * @method array getApplyConversationActionResponseMessage()
 * @method ArrayOfResponseMessagesType setApplyConversationActionResponseMessage(array $applyConversationActionResponseMessage)
 * @method array getFindMailboxStatisticsByKeywordsResponseMessage()
 * @method ArrayOfResponseMessagesType setFindMailboxStatisticsByKeywordsResponseMessage(array $findMailboxStatisticsByKeywordsResponseMessage)
 * @method array getGetPasswordExpirationDateResponse()
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
