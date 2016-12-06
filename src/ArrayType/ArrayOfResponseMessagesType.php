<?php
/**
 * Contains \jamesiarmes\PhpEws\ArrayType\ArrayOfResponseMessagesType.
 */

namespace jamesiarmes\PhpEws\ArrayType;

use \jamesiarmes\PhpEws\ArrayType;

/**
 * Represents the response messages for an Exchange Web Services request.
 *
 * @package php-ews\Array
 */
class ArrayOfResponseMessagesType extends ArrayType
{
    /**
     * Contains the status and results of an ApplyConversationAction Operation
     * request.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Response\ApplyConversationActionResponseMessageType[]
     */
    public $ApplyConversationActionResponseMessage = array();

    /**
     * Contains the status and result of a single ArchiveItem request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\ItemInfoResponseMessageType[]
     */
    public $ArchiveItemResponseMessage = array();

    /**
     * Contains the status and result of a ConvertId request.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\Response\ConvertIdResponseMessageType[]
     */
    public $ConvertIdResponseMessage = array();

    /**
     * Contains the status and result of a single CopyFolder request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\FolderInfoResponseMessageType[]
     */
    public $CopyFolderResponseMessage = array();

    /**
     * Contains the status and result of a single CopyItem request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ItemInfoResponseMessageType[]
     */
    public $CopyItemResponseMessage = array();

    /**
     * Contains the status and result of a single CreateAttachment request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\AttachmentInfoResponseMessageType[]
     */
    public $CreateAttachmentResponseMessage = array();

    /**
     * Contains the status and result of a single CreateFolder request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\FolderInfoResponseMessageType[]
     */
    public $CreateFolderResponseMessage = array();

    /**
     * Contains the status and result of a single CreateItem request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ItemInfoResponseMessageType[]
     */
    public $CreateItemResponseMessage = array();

    /**
     * Contains the status and result of a single CreateManagedFolder request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\FolderInfoResponseMessageType[]
     */
    public $CreateManagedFolderResponseMessage = array();

    /**
     * Contains the status and results of a CreateUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType[]
     */
    public $CreateUserConfigurationResponseMessage = array();

    /**
     * Contains the status and result of a single DeleteAttachment request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\DeleteAttachmentResponseMessageType[]
     */
    public $DeleteAttachmentResponseMessage = array();

    /**
     * Contains the status and result of a single DeleteFolder request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType[]
     */
    public $DeleteFolderResponseMessage = array();

    /**
     * Contains the status and result of a single DeleteItem request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType[]
     */
    public $DeleteItemResponseMessage = array();

    /**
     * Contains the status and results of a DeleteUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType[]
     */
    public $DeleteUserConfigurationResponseMessage = array();

    /**
     * Contains the status and result of a single EmptyFolder request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType[]
     */
    public $EmptyFolderResponseMessage = array();

    /**
     * Contains the status and result of a single ExpandDL request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ExpandDLResponseMessageType[]
     */
    public $ExpandDLResponseMessage = array();

    /**
     * Contains the status and results of a single ExportItems request.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Response\ExportItemsResponseMessageType[]
     */
    public $ExportItemsResponseMessage = array();

    /**
     * Contains the status and result of a single FindFolder request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\FindFolderResponseMessageType[]
     */
    public $FindFolderResponseMessage = array();

    /**
     * Contains the status and result of a single FindItem request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\FindItemResponseMessageType[]
     */
    public $FindItemResponseMessage = array();

    /**
     * Contains the status and result of a single FindMailboxStatisticsByKeyword
     * request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\FindMailboxStatisticsByKeywordsResponseMessageType[]
     */
    public $FindMailboxStatisticsByKeywordsResponseMessage = array();

    /**
     * Contains the status and result of a single GetAttachment request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\AttachmentInfoResponseMessageType[]
     */
    public $GetAttachmentResponseMessage = array();

    /**
     * Contains the status and result of a single GetClientAccessToken request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\GetClientAccessTokenResponseMessageType[]
     */
    public $GetClientAccessTokenResponseMessage = array();

    /**
     * Specifies the response message for a GetConversationItems request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\GetConversationItemsResponseMessageType[]
     */
    public $GetConversationItemsResponseMessage = array();

    /**
     * Contains the status and result of a single GetEvents request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\GetEventsResponseMessageType[]
     */
    public $GetEventsResponseMessage = array();

    /**
     * Contains the status and result of a single GetFolder request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\FolderInfoResponseMessageType[]
     */
    public $GetFolderResponseMessage = array();

    /**
     * Contains the status and result of a single GetItem request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ItemInfoResponseMessageType[]
     */
    public $GetItemResponseMessage = array();

    /**
     * Contains the status and results of a GetReminders request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\GetRemindersResponseMessageType[]
     */
    public $GetRemindersResponse = array();

    /**
     * Contains the status and results of a GetRoomLists request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\GetRoomListsResponseMessageType[]
     */
    public $GetRoomListsResponse = array();

    /**
     * Contains the status and results of a GetRooms request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\GetRoomsResponseMessageType[]
     */
    public $GetRoomsResponse = array();

    /**
     * Contains the status and result of a single GetServerTimeZones request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\GetServerTimeZonesResponseMessageType[]
     */
    public $GetServerTimeZonesResponseMessage = array();

    /**
     * Contains the status and results of a GetSharingFolder request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\GetSharingFolderResponseMessageType[]
     */
    public $GetSharingFolderResponseMessage = array();

    /**
     * Contains the status and results of a GetSharingMetadata request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\GetSharingMetadataResponseMessageType[]
     */
    public $GetSharingMetadataResponseMessage = array();

    /**
     * Contains the status and result of a single GetStreamingEvents request.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Response\GetStreamingEventsResponseMessageType[]
     */
    public $GetStreamingEventsResponseMessage = array();

    /**
     * Contains the status and results of a GetUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\GetUserConfigurationResponseMessageType[]
     */
    public $GetUserConfigurationResponseMessage = array();

    /**
     * Contains the status and results of a GetUserPhoto request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\GetUserPhotoResponseMessageType[]
     */
    public $GetUserPhotoResponseMessage = array();

    /**
     * Defines a response message for a MarkAllItemsAsRead request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType
     */
    public $MarkAllItemsAsReadResponseMessage = array();

    /**
     * Defines a response message for a MarkAsJunk request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\MarkAsJunkResponseMessageType
     */
    public $MarkAsJunkResponseMessage = array();

    /**
     * Contains the status and result of a single MoveFolder request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\FolderInfoResponseMessageType[]
     */
    public $MoveFolderResponseMessage = array();

    /**
     * Contains the status and result of a single MoveItem request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ItemInfoResponseMessageType[]
     */
    public $MoveItemResponseMessage = array();

    /**
     * Contains the status and results of a PerformReminderAction request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\PerformReminderActionResponseMessageType[]
     */
    public $PerformReminderActionResponse = array();

    /**
     * Contains the status and results of a RefreshSharingFolder request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\RefreshSharingFolderResponseMessageType[]
     */
    public $RefreshSharingFolderResponseMessage = array();

    /**
     * Contains the status and result of a ResolveNames request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ResolveNamesResponseMessageType[]
     */
    public $ResolveNamesResponseMessage = array();

    /**
     * Contains the status and result of a SearchMailboxes request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\SearchMailboxesResponseMessageType[]
     */
    public $SearchMailboxesResponseMessage = array();

    /**
     * Contains the status and result of a single SendItem request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType[]
     */
    public $SendItemResponseMessage = array();

    /**
     * Contains the status and result of a single SendNotification request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\SendNotificationResponseMessageType[]
     */
    public $SendNotificationResponseMessage = array();

    /**
     * Contains the status and result of a SetHoldOnMailboxes request.
     *
     * @since Exchange 2013
     *
     * @var \jamesiarmes\PhpEws\Response\SetHoldOnMailboxesResponseMessageType[]
     */
    public $SetHoldOnMailboxesResponseMessage = array();

    /**
     * Contains the status and result of a single Subscribe request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\SubscribeResponseMessageType[]
     */
    public $SubscribeResponseMessage = array();

    /**
     * Contains the status and result of a SyncFolderHierarchy request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\SyncFolderHierarchyResponseMessageType[]
     */
    public $SyncFolderHierarchyResponseMessage = array();

    /**
     * Contains the status and result of a SyncFolderItems request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\SyncFolderItemsResponseMessageType[]
     */
    public $SyncFolderItemsResponseMessage = array();

    /**
     * Contains the status and result of a single Unsubscribe request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType[]
     */
    public $UnsubscribeResponseMessage = array();

    /**
     * Contains the status and result of a single UpdateFolder request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\FolderInfoResponseMessageType[]
     */
    public $UpdateFolderResponseMessage = array();

    /**
     * Contains the status and result of a single UpdateItem request.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Response\UpdateItemResponseMessageType[]
     */
    public $UpdateItemResponseMessage = array();

    /**
     * Contains the status and results of an UpdateUserConfiguration request.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Response\ResponseMessageType[]
     */
    public $UpdateUserConfigurationResponseMessage = array();

    /**
     * Contains the status and results of a single UploadItems request.
     *
     * @since Exchange 2010 SP1
     *
     * @var \jamesiarmes\PhpEws\Response\UploadItemsResponseMessageType[]
     */
    public $UploadItemsResponseMessage = array();
}
