<?php
/**
 * Definition of the NonEmptyArrayOfResponseObjectsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfResponseObjectsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfResponseObjectsType extends EWSType {
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
} // end class NonEmptyArrayOfResponseObjectsType