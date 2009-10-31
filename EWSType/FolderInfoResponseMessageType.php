<?php
/**
 * Definition of the FolderInfoResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FolderInfoResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FolderInfoResponseMessageType extends EWSType {
	/**
	 * Folders property
	 * 
	 * @var EWSType_ArrayOfFoldersType
	 */
	public $Folders;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Folders',
				'required' => false,
				'type' => 'ArrayOfFoldersType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FolderInfoResponseMessageType