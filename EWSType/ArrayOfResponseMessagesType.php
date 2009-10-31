<?php
/**
 * Definition of the ArrayOfResponseMessagesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfResponseMessagesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfResponseMessagesType extends EWSType {
	/**
	 * CreateItemResponseMessage property
	 * 
	 * @var EWSType_ItemInfoResponseMessageType
	 */
	public $CreateItemResponseMessage;

	/**
	 * DeleteItemResponseMessage property
	 * 
	 * @var EWSType_ResponseMessageType
	 */
	public $DeleteItemResponseMessage;

	/**
	 * GetItemResponseMessage property
	 * 
	 * @var EWSType_ItemInfoResponseMessageType
	 */
	public $GetItemResponseMessage;

	/**
	 * UpdateItemResponseMessage property
	 * 
	 * @var EWSType_UpdateItemResponseMessageType
	 */
	public $UpdateItemResponseMessage;

	/**
	 * SendItemResponseMessage property
	 * 
	 * @var EWSType_ResponseMessageType
	 */
	public $SendItemResponseMessage;

	/**
	 * DeleteFolderResponseMessage property
	 * 
	 * @var EWSType_ResponseMessageType
	 */
	public $DeleteFolderResponseMessage;

	/**
	 * CreateFolderResponseMessage property
	 * 
	 * @var EWSType_FolderInfoResponseMessageType
	 */
	public $CreateFolderResponseMessage;

	/**
	 * GetFolderResponseMessage property
	 * 
	 * @var EWSType_FolderInfoResponseMessageType
	 */
	public $GetFolderResponseMessage;

	/**
	 * FindFolderResponseMessage property
	 * 
	 * @var EWSType_FindFolderResponseMessageType
	 */
	public $FindFolderResponseMessage;

	/**
	 * UpdateFolderResponseMessage property
	 * 
	 * @var EWSType_FolderInfoResponseMessageType
	 */
	public $UpdateFolderResponseMessage;

	/**
	 * MoveFolderResponseMessage property
	 * 
	 * @var EWSType_FolderInfoResponseMessageType
	 */
	public $MoveFolderResponseMessage;

	/**
	 * CopyFolderResponseMessage property
	 * 
	 * @var EWSType_FolderInfoResponseMessageType
	 */
	public $CopyFolderResponseMessage;

	/**
	 * CreateAttachmentResponseMessage property
	 * 
	 * @var EWSType_AttachmentInfoResponseMessageType
	 */
	public $CreateAttachmentResponseMessage;

	/**
	 * DeleteAttachmentResponseMessage property
	 * 
	 * @var EWSType_DeleteAttachmentResponseMessageType
	 */
	public $DeleteAttachmentResponseMessage;

	/**
	 * GetAttachmentResponseMessage property
	 * 
	 * @var EWSType_AttachmentInfoResponseMessageType
	 */
	public $GetAttachmentResponseMessage;

	/**
	 * FindItemResponseMessage property
	 * 
	 * @var EWSType_FindItemResponseMessageType
	 */
	public $FindItemResponseMessage;

	/**
	 * MoveItemResponseMessage property
	 * 
	 * @var EWSType_ItemInfoResponseMessageType
	 */
	public $MoveItemResponseMessage;

	/**
	 * CopyItemResponseMessage property
	 * 
	 * @var EWSType_ItemInfoResponseMessageType
	 */
	public $CopyItemResponseMessage;

	/**
	 * ResolveNamesResponseMessage property
	 * 
	 * @var EWSType_ResolveNamesResponseMessageType
	 */
	public $ResolveNamesResponseMessage;

	/**
	 * ExpandDLResponseMessage property
	 * 
	 * @var EWSType_ExpandDLResponseMessageType
	 */
	public $ExpandDLResponseMessage;

	/**
	 * GetEventsResponseMessage property
	 * 
	 * @var EWSType_GetEventsResponseMessageType
	 */
	public $GetEventsResponseMessage;

	/**
	 * SubscribeResponseMessage property
	 * 
	 * @var EWSType_SubscribeResponseMessageType
	 */
	public $SubscribeResponseMessage;

	/**
	 * UnsubscribeResponseMessage property
	 * 
	 * @var EWSType_ResponseMessageType
	 */
	public $UnsubscribeResponseMessage;

	/**
	 * SendNotificationResponseMessage property
	 * 
	 * @var EWSType_SendNotificationResponseMessageType
	 */
	public $SendNotificationResponseMessage;

	/**
	 * SyncFolderHierarchyResponseMessage property
	 * 
	 * @var EWSType_SyncFolderHierarchyResponseMessageType
	 */
	public $SyncFolderHierarchyResponseMessage;

	/**
	 * SyncFolderItemsResponseMessage property
	 * 
	 * @var EWSType_SyncFolderItemsResponseMessageType
	 */
	public $SyncFolderItemsResponseMessage;

	/**
	 * CreateManagedFolderResponseMessage property
	 * 
	 * @var EWSType_FolderInfoResponseMessageType
	 */
	public $CreateManagedFolderResponseMessage;

	/**
	 * ConvertIdResponseMessage property
	 * 
	 * @var EWSType_ConvertIdResponseMessageType
	 */
	public $ConvertIdResponseMessage;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'CreateItemResponseMessage',
				'required' => false,
				'type' => 'ItemInfoResponseMessageType',
			),
			array(
				'name' => 'DeleteItemResponseMessage',
				'required' => false,
				'type' => 'ResponseMessageType',
			),
			array(
				'name' => 'GetItemResponseMessage',
				'required' => false,
				'type' => 'ItemInfoResponseMessageType',
			),
			array(
				'name' => 'UpdateItemResponseMessage',
				'required' => false,
				'type' => 'UpdateItemResponseMessageType',
			),
			array(
				'name' => 'SendItemResponseMessage',
				'required' => false,
				'type' => 'ResponseMessageType',
			),
			array(
				'name' => 'DeleteFolderResponseMessage',
				'required' => false,
				'type' => 'ResponseMessageType',
			),
			array(
				'name' => 'CreateFolderResponseMessage',
				'required' => false,
				'type' => 'FolderInfoResponseMessageType',
			),
			array(
				'name' => 'GetFolderResponseMessage',
				'required' => false,
				'type' => 'FolderInfoResponseMessageType',
			),
			array(
				'name' => 'FindFolderResponseMessage',
				'required' => false,
				'type' => 'FindFolderResponseMessageType',
			),
			array(
				'name' => 'UpdateFolderResponseMessage',
				'required' => false,
				'type' => 'FolderInfoResponseMessageType',
			),
			array(
				'name' => 'MoveFolderResponseMessage',
				'required' => false,
				'type' => 'FolderInfoResponseMessageType',
			),
			array(
				'name' => 'CopyFolderResponseMessage',
				'required' => false,
				'type' => 'FolderInfoResponseMessageType',
			),
			array(
				'name' => 'CreateAttachmentResponseMessage',
				'required' => false,
				'type' => 'AttachmentInfoResponseMessageType',
			),
			array(
				'name' => 'DeleteAttachmentResponseMessage',
				'required' => false,
				'type' => 'DeleteAttachmentResponseMessageType',
			),
			array(
				'name' => 'GetAttachmentResponseMessage',
				'required' => false,
				'type' => 'AttachmentInfoResponseMessageType',
			),
			array(
				'name' => 'FindItemResponseMessage',
				'required' => false,
				'type' => 'FindItemResponseMessageType',
			),
			array(
				'name' => 'MoveItemResponseMessage',
				'required' => false,
				'type' => 'ItemInfoResponseMessageType',
			),
			array(
				'name' => 'CopyItemResponseMessage',
				'required' => false,
				'type' => 'ItemInfoResponseMessageType',
			),
			array(
				'name' => 'ResolveNamesResponseMessage',
				'required' => false,
				'type' => 'ResolveNamesResponseMessageType',
			),
			array(
				'name' => 'ExpandDLResponseMessage',
				'required' => false,
				'type' => 'ExpandDLResponseMessageType',
			),
			array(
				'name' => 'GetEventsResponseMessage',
				'required' => false,
				'type' => 'GetEventsResponseMessageType',
			),
			array(
				'name' => 'SubscribeResponseMessage',
				'required' => false,
				'type' => 'SubscribeResponseMessageType',
			),
			array(
				'name' => 'UnsubscribeResponseMessage',
				'required' => false,
				'type' => 'ResponseMessageType',
			),
			array(
				'name' => 'SendNotificationResponseMessage',
				'required' => false,
				'type' => 'SendNotificationResponseMessageType',
			),
			array(
				'name' => 'SyncFolderHierarchyResponseMessage',
				'required' => false,
				'type' => 'SyncFolderHierarchyResponseMessageType',
			),
			array(
				'name' => 'SyncFolderItemsResponseMessage',
				'required' => false,
				'type' => 'SyncFolderItemsResponseMessageType',
			),
			array(
				'name' => 'CreateManagedFolderResponseMessage',
				'required' => false,
				'type' => 'FolderInfoResponseMessageType',
			),
			array(
				'name' => 'ConvertIdResponseMessage',
				'required' => false,
				'type' => 'ConvertIdResponseMessageType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfResponseMessagesType