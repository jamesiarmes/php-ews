<?php
/**
 * Definition of the SendItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SendItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SendItemType extends EWSType {
	/**
	 * ItemIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseItemIdsType
	 */
	public $ItemIds;

	/**
	 * SavedItemFolderId property
	 * 
	 * @var EWSType_TargetFolderIdType
	 */
	public $SavedItemFolderId;

	/**
	 * SaveItemToFolder property
	 * 
	 * @var EWSType_boolean
	 */
	public $SaveItemToFolder;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseItemIdsType',
			),
			array(
				'name' => 'SavedItemFolderId',
				'required' => false,
				'type' => 'TargetFolderIdType',
			),
			array(
				'name' => 'SaveItemToFolder',
				'required' => false,
				'type' => 'boolean',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SendItemType