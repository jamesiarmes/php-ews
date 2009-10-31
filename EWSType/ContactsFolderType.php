<?php
/**
 * Definition of the ContactsFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ContactsFolderType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ContactsFolderType extends EWSType {
	/**
	 * PermissionSet property
	 * 
	 * @var EWSType_PermissionSetType
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
				'type' => 'PermissionSetType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ContactsFolderType