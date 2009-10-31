<?php
/**
 * Definition of the UpdateFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the UpdateFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_UpdateFolderType extends EWSType {
	/**
	 * FolderChanges property
	 * 
	 * @var EWSType_NonEmptyArrayOfFolderChangesType
	 */
	public $FolderChanges;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderChanges',
				'required' => false,
				'type' => 'NonEmptyArrayOfFolderChangesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class UpdateFolderType