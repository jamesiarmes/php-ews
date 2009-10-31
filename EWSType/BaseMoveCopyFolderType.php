<?php
/**
 * Definition of the BaseMoveCopyFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BaseMoveCopyFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BaseMoveCopyFolderType extends EWSType {
	/**
	 * ToFolderId property
	 * 
	 * @var EWSType_TargetFolderIdType
	 */
	public $ToFolderId;

	/**
	 * FolderIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
	 */
	public $FolderIds;

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
				'name' => 'FolderIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseFolderIdsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BaseMoveCopyFolderType