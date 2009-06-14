<?php
/**
 * Definition of the GetFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetFolderType {
	/**
	 * FolderShape property
	 * 
	 * @var EWSType_FolderResponseShapeType
	 */
	public $FolderShape;

	/**
	 * FolderIds property
	 * 
	 * @var EWSType_NonEmptyArrayOfBaseFolderIdsType
	 */
	public $FolderIds;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderShape',
				'required' => false,
				'type' => 'FolderResponseShapeType',
			),
			array(
				'name' => 'FolderIds',
				'required' => false,
				'type' => 'NonEmptyArrayOfBaseFolderIdsType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GetFolderType