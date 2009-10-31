<?php
/**
 * Definition of the PermissionSetType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PermissionSetType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PermissionSetType extends EWSType {
	/**
	 * Permissions property
	 * 
	 * @var EWSType_ArrayOfPermissionsType
	 */
	public $Permissions;

	/**
	 * UnknownEntries property
	 * 
	 * @var EWSType_ArrayOfUnknownEntriesType
	 */
	public $UnknownEntries;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Permissions',
				'required' => false,
				'type' => 'ArrayOfPermissionsType',
			),
			array(
				'name' => 'UnknownEntries',
				'required' => false,
				'type' => 'ArrayOfUnknownEntriesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PermissionSetType