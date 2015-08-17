<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Messages;

/**
 * Class representing ArrayOfResponseMessagesType
 *
 *
 * XSD Type: ArrayOfResponseMessagesType
 *
 * @method ArrayOfResponseMessagesType getCreateItemResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setCreateItemResponseMessage($createItemResponseMessage)
 * @method ArrayOfResponseMessagesType getDeleteItemResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setDeleteItemResponseMessage($deleteItemResponseMessage)
 * @method ArrayOfResponseMessagesType getGetItemResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetItemResponseMessage($getItemResponseMessage)
 * @method ArrayOfResponseMessagesType getUpdateItemResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setUpdateItemResponseMessage($updateItemResponseMessage)
 * @method ArrayOfResponseMessagesType getSendItemResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setSendItemResponseMessage($sendItemResponseMessage)
 * @method ArrayOfResponseMessagesType getDeleteFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setDeleteFolderResponseMessage($deleteFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getEmptyFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setEmptyFolderResponseMessage($emptyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getCreateFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setCreateFolderResponseMessage($createFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getGetFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetFolderResponseMessage($getFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getFindFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setFindFolderResponseMessage($findFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getUpdateFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setUpdateFolderResponseMessage($updateFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getMoveFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setMoveFolderResponseMessage($moveFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getCopyFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setCopyFolderResponseMessage($copyFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getCreateAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setCreateAttachmentResponseMessage($createAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType getDeleteAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setDeleteAttachmentResponseMessage($deleteAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType getGetAttachmentResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetAttachmentResponseMessage($getAttachmentResponseMessage)
 * @method ArrayOfResponseMessagesType getUploadItemsResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setUploadItemsResponseMessage($uploadItemsResponseMessage)
 * @method ArrayOfResponseMessagesType getExportItemsResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setExportItemsResponseMessage($exportItemsResponseMessage)
 * @method ArrayOfResponseMessagesType getFindItemResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setFindItemResponseMessage($findItemResponseMessage)
 * @method ArrayOfResponseMessagesType getMoveItemResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setMoveItemResponseMessage($moveItemResponseMessage)
 * @method ArrayOfResponseMessagesType getCopyItemResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setCopyItemResponseMessage($copyItemResponseMessage)
 * @method ArrayOfResponseMessagesType getResolveNamesResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setResolveNamesResponseMessage($resolveNamesResponseMessage)
 * @method ArrayOfResponseMessagesType getExpandDLResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setExpandDLResponseMessage($expandDLResponseMessage)
 * @method ArrayOfResponseMessagesType getGetServerTimeZonesResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetServerTimeZonesResponseMessage($getServerTimeZonesResponseMessage)
 * @method ArrayOfResponseMessagesType getGetEventsResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetEventsResponseMessage($getEventsResponseMessage)
 * @method ArrayOfResponseMessagesType getGetStreamingEventsResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetStreamingEventsResponseMessage($getStreamingEventsResponseMessage)
 * @method ArrayOfResponseMessagesType getSubscribeResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setSubscribeResponseMessage($subscribeResponseMessage)
 * @method ArrayOfResponseMessagesType getUnsubscribeResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setUnsubscribeResponseMessage($unsubscribeResponseMessage)
 * @method ArrayOfResponseMessagesType getSendNotificationResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setSendNotificationResponseMessage($sendNotificationResponseMessage)
 * @method ArrayOfResponseMessagesType getSyncFolderHierarchyResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setSyncFolderHierarchyResponseMessage($syncFolderHierarchyResponseMessage)
 * @method ArrayOfResponseMessagesType getSyncFolderItemsResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setSyncFolderItemsResponseMessage($syncFolderItemsResponseMessage)
 * @method ArrayOfResponseMessagesType getCreateManagedFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setCreateManagedFolderResponseMessage($createManagedFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getConvertIdResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setConvertIdResponseMessage($convertIdResponseMessage)
 * @method ArrayOfResponseMessagesType getGetSharingMetadataResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetSharingMetadataResponseMessage($getSharingMetadataResponseMessage)
 * @method ArrayOfResponseMessagesType getRefreshSharingFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setRefreshSharingFolderResponseMessage($refreshSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getGetSharingFolderResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetSharingFolderResponseMessage($getSharingFolderResponseMessage)
 * @method ArrayOfResponseMessagesType getCreateUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setCreateUserConfigurationResponseMessage($createUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType getDeleteUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setDeleteUserConfigurationResponseMessage($deleteUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType getGetUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setGetUserConfigurationResponseMessage($getUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType getUpdateUserConfigurationResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setUpdateUserConfigurationResponseMessage($updateUserConfigurationResponseMessage)
 * @method ArrayOfResponseMessagesType getGetRoomListsResponse()
 * @method ArrayOfResponseMessagesType
 * setGetRoomListsResponse($getRoomListsResponse)
 * @method ArrayOfResponseMessagesType getGetRoomsResponse()
 * @method ArrayOfResponseMessagesType setGetRoomsResponse($getRoomsResponse)
 * @method ArrayOfResponseMessagesType getApplyConversationActionResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setApplyConversationActionResponseMessage($applyConversationActionResponseMessage)
 * @method ArrayOfResponseMessagesType
 * getFindMailboxStatisticsByKeywordsResponseMessage()
 * @method ArrayOfResponseMessagesType
 * setFindMailboxStatisticsByKeywordsResponseMessage($findMailboxStatisticsByKeywordsResponseMessage)
 * @method ArrayOfResponseMessagesType getGetPasswordExpirationDateResponse()
 * @method ArrayOfResponseMessagesType
 * setGetPasswordExpirationDateResponse($getPasswordExpirationDateResponse)
 */
class ArrayOfResponseMessagesType extends Messages
{

    /**
     * @property array $createItemResponseMessage
     */
    protected $createItemResponseMessage = null;

    /**
     * @property array $deleteItemResponseMessage
     */
    protected $deleteItemResponseMessage = null;

    /**
     * @property array $getItemResponseMessage
     */
    protected $getItemResponseMessage = null;

    /**
     * @property array $updateItemResponseMessage
     */
    protected $updateItemResponseMessage = null;

    /**
     * @property array $sendItemResponseMessage
     */
    protected $sendItemResponseMessage = null;

    /**
     * @property array $deleteFolderResponseMessage
     */
    protected $deleteFolderResponseMessage = null;

    /**
     * @property array $emptyFolderResponseMessage
     */
    protected $emptyFolderResponseMessage = null;

    /**
     * @property array $createFolderResponseMessage
     */
    protected $createFolderResponseMessage = null;

    /**
     * @property array $getFolderResponseMessage
     */
    protected $getFolderResponseMessage = null;

    /**
     * @property array $findFolderResponseMessage
     */
    protected $findFolderResponseMessage = null;

    /**
     * @property array $updateFolderResponseMessage
     */
    protected $updateFolderResponseMessage = null;

    /**
     * @property array $moveFolderResponseMessage
     */
    protected $moveFolderResponseMessage = null;

    /**
     * @property array $copyFolderResponseMessage
     */
    protected $copyFolderResponseMessage = null;

    /**
     * @property array $createAttachmentResponseMessage
     */
    protected $createAttachmentResponseMessage = null;

    /**
     * @property array $deleteAttachmentResponseMessage
     */
    protected $deleteAttachmentResponseMessage = null;

    /**
     * @property array $getAttachmentResponseMessage
     */
    protected $getAttachmentResponseMessage = null;

    /**
     * @property array $uploadItemsResponseMessage
     */
    protected $uploadItemsResponseMessage = null;

    /**
     * @property array $exportItemsResponseMessage
     */
    protected $exportItemsResponseMessage = null;

    /**
     * @property array $findItemResponseMessage
     */
    protected $findItemResponseMessage = null;

    /**
     * @property array $moveItemResponseMessage
     */
    protected $moveItemResponseMessage = null;

    /**
     * @property array $copyItemResponseMessage
     */
    protected $copyItemResponseMessage = null;

    /**
     * @property array $resolveNamesResponseMessage
     */
    protected $resolveNamesResponseMessage = null;

    /**
     * @property array $expandDLResponseMessage
     */
    protected $expandDLResponseMessage = null;

    /**
     * @property array $getServerTimeZonesResponseMessage
     */
    protected $getServerTimeZonesResponseMessage = null;

    /**
     * @property array $getEventsResponseMessage
     */
    protected $getEventsResponseMessage = null;

    /**
     * @property array $getStreamingEventsResponseMessage
     */
    protected $getStreamingEventsResponseMessage = null;

    /**
     * @property array $subscribeResponseMessage
     */
    protected $subscribeResponseMessage = null;

    /**
     * @property array $unsubscribeResponseMessage
     */
    protected $unsubscribeResponseMessage = null;

    /**
     * @property array $sendNotificationResponseMessage
     */
    protected $sendNotificationResponseMessage = null;

    /**
     * @property array $syncFolderHierarchyResponseMessage
     */
    protected $syncFolderHierarchyResponseMessage = null;

    /**
     * @property array $syncFolderItemsResponseMessage
     */
    protected $syncFolderItemsResponseMessage = null;

    /**
     * @property array $createManagedFolderResponseMessage
     */
    protected $createManagedFolderResponseMessage = null;

    /**
     * @property array $convertIdResponseMessage
     */
    protected $convertIdResponseMessage = null;

    /**
     * @property array $getSharingMetadataResponseMessage
     */
    protected $getSharingMetadataResponseMessage = null;

    /**
     * @property array $refreshSharingFolderResponseMessage
     */
    protected $refreshSharingFolderResponseMessage = null;

    /**
     * @property array $getSharingFolderResponseMessage
     */
    protected $getSharingFolderResponseMessage = null;

    /**
     * @property array $createUserConfigurationResponseMessage
     */
    protected $createUserConfigurationResponseMessage = null;

    /**
     * @property array $deleteUserConfigurationResponseMessage
     */
    protected $deleteUserConfigurationResponseMessage = null;

    /**
     * @property array $getUserConfigurationResponseMessage
     */
    protected $getUserConfigurationResponseMessage = null;

    /**
     * @property array $updateUserConfigurationResponseMessage
     */
    protected $updateUserConfigurationResponseMessage = null;

    /**
     * @property array $getRoomListsResponse
     */
    protected $getRoomListsResponse = null;

    /**
     * @property array $getRoomsResponse
     */
    protected $getRoomsResponse = null;

    /**
     * @property array $applyConversationActionResponseMessage
     */
    protected $applyConversationActionResponseMessage = null;

    /**
     * @property array $findMailboxStatisticsByKeywordsResponseMessage
     */
    protected $findMailboxStatisticsByKeywordsResponseMessage = null;

    /**
     * @property array $getPasswordExpirationDateResponse
     */
    protected $getPasswordExpirationDateResponse = null;


}

