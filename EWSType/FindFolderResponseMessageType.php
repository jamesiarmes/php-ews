<?php
/**
 * Definition of the FindFolderResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FindFolderResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FindFolderResponseMessageType extends EWSType {
	/**
	 * RootFolder property
	 * 
	 * @var EWSType_FindFolderParentType
	 */
	public $RootFolder;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'RootFolder',
				'required' => false,
				'type' => 'FindFolderParentType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FindFolderResponseMessageType