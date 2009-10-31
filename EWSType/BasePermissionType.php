<?php
/**
 * Definition of the BasePermissionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the BasePermissionType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_BasePermissionType extends EWSType {
	/**
	 * UserId property
	 * 
	 * @var EWSType_UserIdType
	 */
	public $UserId;

	/**
	 * CanCreateItems property
	 * 
	 * @var EWSType_boolean
	 */
	public $CanCreateItems;

	/**
	 * CanCreateSubFolders property
	 * 
	 * @var EWSType_boolean
	 */
	public $CanCreateSubFolders;

	/**
	 * IsFolderOwner property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsFolderOwner;

	/**
	 * IsFolderVisible property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsFolderVisible;

	/**
	 * IsFolderContact property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsFolderContact;

	/**
	 * EditItems property
	 * 
	 * @var EWSType_PermissionActionType
	 */
	public $EditItems;

	/**
	 * DeleteItems property
	 * 
	 * @var EWSType_PermissionActionType
	 */
	public $DeleteItems;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'UserId',
				'required' => false,
				'type' => 'UserIdType',
			),
			array(
				'name' => 'CanCreateItems',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'CanCreateSubFolders',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsFolderOwner',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsFolderVisible',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsFolderContact',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'EditItems',
				'required' => false,
				'type' => 'PermissionActionType',
			),
			array(
				'name' => 'DeleteItems',
				'required' => false,
				'type' => 'PermissionActionType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class BasePermissionType