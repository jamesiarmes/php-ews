<?php
/**
 * Definition of the FolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FolderType extends EWSType {
	/**
	 * PermissionSet property
	 * 
	 * @var EWSType_PermissionSetType
	 */
	public $PermissionSet;

	/**
	 * UnreadCount property
	 * 
	 * @var EWSType_int
	 */
	public $UnreadCount;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'PermissionSet',
				'required' => false,
				'type' => 'PermissionSetType',
			),
			array(
				'name' => 'UnreadCount',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FolderType