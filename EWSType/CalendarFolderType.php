<?php
/**
 * Definition of the CalendarFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the CalendarFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_CalendarFolderType extends EWSType {
	/**
	 * PermissionSet property
	 * 
	 * @var EWSType_CalendarPermissionSetType
	 */
	public $PermissionSet;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'PermissionSet',
				'required' => false,
				'type' => 'CalendarPermissionSetType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class CalendarFolderType