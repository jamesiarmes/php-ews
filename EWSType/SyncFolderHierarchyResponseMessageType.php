<?php
/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SyncFolderHierarchyResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SyncFolderHierarchyResponseMessageType extends EWSType {
	/**
	 * SyncState property
	 * 
	 * @var string
	 */
	public $SyncState;

	/**
	 * IncludesLastFolderInRange property
	 * 
	 * @var EWSType_boolean
	 */
	public $IncludesLastFolderInRange;

	/**
	 * Changes property
	 * 
	 * @var EWSType_SyncFolderHierarchyChangesType
	 */
	public $Changes;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'SyncState',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'IncludesLastFolderInRange',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'Changes',
				'required' => false,
				'type' => 'SyncFolderHierarchyChangesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SyncFolderHierarchyResponseMessageType