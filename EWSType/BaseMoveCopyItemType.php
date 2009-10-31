<?php
/**
 * Definition of the BaseMoveCopyItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseMoveCopyItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseMoveCopyItemType extends EWSType {
	/**
	 * ToFolderId property
	 * 
	 * @var EWSType_TargetFolderIdType
	 */
	public $ToFolderId;

	/**
	 * ItemIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseItemIdsType
	 */
	public $ItemIds;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ToFolderId',
				'required' => false,
				'type' => 'TargetFolderIdType',
			),
			array(
				'name' => 'ItemIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseItemIdsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseMoveCopyItemType