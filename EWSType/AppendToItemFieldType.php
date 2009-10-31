<?php
/**
 * Definition of the AppendToItemFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AppendToItemFieldType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AppendToItemFieldType extends EWSType {
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
		); // end $this->schema
	} // end function __construct()
} // end class AppendToItemFieldType