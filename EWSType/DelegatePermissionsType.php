<?php
/**
 * Definition of the DelegatePermissionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DelegatePermissionsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DelegatePermissionsType extends EWSType {
	/**
	 * CalendarFolderPermissionLevel property
	 * 
	 * @var EWSType_DelegateFolderPermissionLevelType
	 */
	public $CalendarFolderPermissionLevel;

	/**
	 * TasksFolderPermissionLevel property
	 * 
	 * @var EWSType_DelegateFolderPermissionLevelType
	 */
	public $TasksFolderPermissionLevel;

	/**
	 * InboxFolderPermissionLevel property
	 * 
	 * @var EWSType_DelegateFolderPermissionLevelType
	 */
	public $InboxFolderPermissionLevel;

	/**
	 * ContactsFolderPermissionLevel property
	 * 
	 * @var EWSType_DelegateFolderPermissionLevelType
	 */
	public $ContactsFolderPermissionLevel;

	/**
	 * NotesFolderPermissionLevel property
	 * 
	 * @var EWSType_DelegateFolderPermissionLevelType
	 */
	public $NotesFolderPermissionLevel;

	/**
	 * JournalFolderPermissionLevel property
	 * 
	 * @var EWSType_DelegateFolderPermissionLevelType
	 */
	public $JournalFolderPermissionLevel;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'CalendarFolderPermissionLevel',
				'required' => false,
				'type' => 'DelegateFolderPermissionLevelType',
			),
			array(
				'name' => 'TasksFolderPermissionLevel',
				'required' => false,
				'type' => 'DelegateFolderPermissionLevelType',
			),
			array(
				'name' => 'InboxFolderPermissionLevel',
				'required' => false,
				'type' => 'DelegateFolderPermissionLevelType',
			),
			array(
				'name' => 'ContactsFolderPermissionLevel',
				'required' => false,
				'type' => 'DelegateFolderPermissionLevelType',
			),
			array(
				'name' => 'NotesFolderPermissionLevel',
				'required' => false,
				'type' => 'DelegateFolderPermissionLevelType',
			),
			array(
				'name' => 'JournalFolderPermissionLevel',
				'required' => false,
				'type' => 'DelegateFolderPermissionLevelType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DelegatePermissionsType