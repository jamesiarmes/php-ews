<?php
/**
 * Definition of the PermissionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PermissionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PermissionType extends EWSType {
	/**
	 * ReadItems property
	 * 
	 * @var EWSType_PermissionReadAccessType
	 */
	public $ReadItems;

	/**
	 * PermissionLevel property
	 * 
	 * @var EWSType_PermissionLevelType
	 */
	public $PermissionLevel;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ReadItems',
				'required' => false,
				'type' => 'PermissionReadAccessType',
			),
			array(
				'name' => 'PermissionLevel',
				'required' => false,
				'type' => 'PermissionLevelType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PermissionType