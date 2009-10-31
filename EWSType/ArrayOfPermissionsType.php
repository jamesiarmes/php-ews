<?php
/**
 * Definition of the ArrayOfPermissionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfPermissionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfPermissionsType extends EWSType {
	/**
	 * Permission property
	 * 
	 * @var EWSType_PermissionType
	 */
	public $Permission;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Permission',
				'required' => false,
				'type' => 'PermissionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfPermissionsType