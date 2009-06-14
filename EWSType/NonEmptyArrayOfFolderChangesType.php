<?php
/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfFolderChangesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfFolderChangesType {
	/**
	 * FolderChange property
	 * 
	 * @var EWSType_FolderChangeType
	 */
	public $FolderChange;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderChange',
				'required' => false,
				'type' => 'FolderChangeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfFolderChangesType