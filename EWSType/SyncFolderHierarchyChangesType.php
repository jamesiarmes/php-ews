<?php
/**
 * Definition of the SyncFolderHierarchyChangesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SyncFolderHierarchyChangesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SyncFolderHierarchyChangesType extends EWSType {
	/**
	 * Create property
	 * 
	 * @var EWSType_SyncFolderHierarchyCreateOrUpdateType
	 */
	public $Create;

	/**
	 * Update property
	 * 
	 * @var EWSType_SyncFolderHierarchyCreateOrUpdateType
	 */
	public $Update;

	/**
	 * Delete property
	 * 
	 * @var EWSType_SyncFolderHierarchyDeleteType
	 */
	public $Delete;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Create',
				'required' => false,
				'type' => 'SyncFolderHierarchyCreateOrUpdateType',
			),
			array(
				'name' => 'Update',
				'required' => false,
				'type' => 'SyncFolderHierarchyCreateOrUpdateType',
			),
			array(
				'name' => 'Delete',
				'required' => false,
				'type' => 'SyncFolderHierarchyDeleteType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SyncFolderHierarchyChangesType