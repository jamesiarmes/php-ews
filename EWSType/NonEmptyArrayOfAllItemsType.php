<?php
/**
 * Definition of the NonEmptyArrayOfAllItemsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfAllItemsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfAllItemsType extends EWSType {
	/**
	 * Item property
	 * 
	 * @var EWSType_ItemType
	 */
	public $Item;

	/**
	 * Message property
	 * 
	 * @var EWSType_MessageType
	 */
	public $Message;

	/**
	 * CalendarItem property
	 * 
	 * @var EWSType_CalendarItemType
	 */
	public $CalendarItem;

	/**
	 * Contact property
	 * 
	 * @var EWSType_ContactItemType
	 */
	public $Contact;

	/**
	 * DistributionList property
	 * 
	 * @var EWSType_DistributionListType
	 */
	public $DistributionList;

	/**
	 * MeetingMessage property
	 * 
	 * @var EWSType_MeetingMessageType
	 */
	public $MeetingMessage;

	/**
	 * MeetingRequest property
	 * 
	 * @var EWSType_MeetingRequestMessageType
	 */
	public $MeetingRequest;

	/**
	 * MeetingResponse property
	 * 
	 * @var EWSType_MeetingResponseMessageType
	 */
	public $MeetingResponse;

	/**
	 * MeetingCancellation property
	 * 
	 * @var EWSType_MeetingCancellationMessageType
	 */
	public $MeetingCancellation;

	/**
	 * Task property
	 * 
	 * @var EWSType_TaskType
	 */
	public $Task;

	/**
	 * PostItem property
	 * 
	 * @var EWSType_PostItemType
	 */
	public $PostItem;

	/**
	 * ReplyToItem property
	 * 
	 * @var EWSType_ReplyToItemType
	 */
	public $ReplyToItem;

	/**
	 * ForwardItem property
	 * 
	 * @var EWSType_ForwardItemType
	 */
	public $ForwardItem;

	/**
	 * ReplyAllToItem property
	 * 
	 * @var EWSType_ReplyAllToItemType
	 */
	public $ReplyAllToItem;

	/**
	 * AcceptItem property
	 * 
	 * @var EWSType_AcceptItemType
	 */
	public $AcceptItem;

	/**
	 * TentativelyAcceptItem property
	 * 
	 * @var EWSType_TentativelyAcceptItemType
	 */
	public $TentativelyAcceptItem;

	/**
	 * DeclineItem property
	 * 
	 * @var EWSType_DeclineItemType
	 */
	public $DeclineItem;

	/**
	 * CancelCalendarItem property
	 * 
	 * @var EWSType_CancelCalendarItemType
	 */
	public $CancelCalendarItem;

	/**
	 * RemoveItem property
	 * 
	 * @var EWSType_RemoveItemType
	 */
	public $RemoveItem;

	/**
	 * SuppressReadReceipt property
	 * 
	 * @var EWSType_SuppressReadReceiptType
	 */
	public $SuppressReadReceipt;

	/**
	 * PostReplyItem property
	 * 
	 * @var EWSType_PostReplyItemType
	 */
	public $PostReplyItem;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Item',
				'required' => false,
				'type' => 'ItemType',
			),
			array(
				'name' => 'Message',
				'required' => false,
				'type' => 'MessageType',
			),
			array(
				'name' => 'CalendarItem',
				'required' => false,
				'type' => 'CalendarItemType',
			),
			array(
				'name' => 'Contact',
				'required' => false,
				'type' => 'ContactItemType',
			),
			array(
				'name' => 'DistributionList',
				'required' => false,
				'type' => 'DistributionListType',
			),
			array(
				'name' => 'MeetingMessage',
				'required' => false,
				'type' => 'MeetingMessageType',
			),
			array(
				'name' => 'MeetingRequest',
				'required' => false,
				'type' => 'MeetingRequestMessageType',
			),
			array(
				'name' => 'MeetingResponse',
				'required' => false,
				'type' => 'MeetingResponseMessageType',
			),
			array(
				'name' => 'MeetingCancellation',
				'required' => false,
				'type' => 'MeetingCancellationMessageType',
			),
			array(
				'name' => 'Task',
				'required' => false,
				'type' => 'TaskType',
			),
			array(
				'name' => 'PostItem',
				'required' => false,
				'type' => 'PostItemType',
			),
			array(
				'name' => 'ReplyToItem',
				'required' => false,
				'type' => 'ReplyToItemType',
			),
			array(
				'name' => 'ForwardItem',
				'required' => false,
				'type' => 'ForwardItemType',
			),
			array(
				'name' => 'ReplyAllToItem',
				'required' => false,
				'type' => 'ReplyAllToItemType',
			),
			array(
				'name' => 'AcceptItem',
				'required' => false,
				'type' => 'AcceptItemType',
			),
			array(
				'name' => 'TentativelyAcceptItem',
				'required' => false,
				'type' => 'TentativelyAcceptItemType',
			),
			array(
				'name' => 'DeclineItem',
				'required' => false,
				'type' => 'DeclineItemType',
			),
			array(
				'name' => 'CancelCalendarItem',
				'required' => false,
				'type' => 'CancelCalendarItemType',
			),
			array(
				'name' => 'RemoveItem',
				'required' => false,
				'type' => 'RemoveItemType',
			),
			array(
				'name' => 'SuppressReadReceipt',
				'required' => false,
				'type' => 'SuppressReadReceiptType',
			),
			array(
				'name' => 'PostReplyItem',
				'required' => false,
				'type' => 'PostReplyItemType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfAllItemsType