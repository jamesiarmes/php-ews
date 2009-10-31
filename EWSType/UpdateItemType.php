<?php
/**
 * Definition of the UpdateItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the UpdateItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_UpdateItemType extends EWSType {
	/**
	 * SavedItemFolderId property
	 * 
	 * @var EWSType_TargetFolderIdType
	 */
	public $SavedItemFolderId;

	/**
	 * ItemChanges property
	 * 
	 * @var EWSType_NonEmptyArrayOfItemChangesType
	 */
	public $ItemChanges;

	/**
	 * ConflictResolution property
	 * 
	 * @var EWSType_ConflictResolutionType
	 */
	public $ConflictResolution;

	/**
	 * MessageDisposition property
	 * 
	 * @var EWSType_MessageDispositionType
	 */
	public $MessageDisposition;

	/**
	 * SendMeetingInvitationsOrCancellations property
	 * 
	 * @var EWSType_CalendarItemUpdateOperationType
	 */
	public $SendMeetingInvitationsOrCancellations;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SavedItemFolderId',
				'required' => false,
				'type' => 'TargetFolderIdType',
			),
			array(
				'name' => 'ItemChanges',
				'required' => false,
				'type' => 'NonEmptyArrayOfItemChangesType',
			),
			array(
				'name' => 'ConflictResolution',
				'required' => false,
				'type' => 'ConflictResolutionType',
			),
			array(
				'name' => 'MessageDisposition',
				'required' => false,
				'type' => 'MessageDispositionType',
			),
			array(
				'name' => 'SendMeetingInvitationsOrCancellations',
				'required' => false,
				'type' => 'CalendarItemUpdateOperationType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class UpdateItemType