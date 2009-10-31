<?php
/**
 * Definition of the SyncFolderItemsResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SyncFolderItemsResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SyncFolderItemsResponseMessageType extends EWSType {
	/**
	 * SyncState property
	 * 
	 * @var string
	 */
	public $SyncState;

	/**
	 * IncludesLastItemInRange property
	 * 
	 * @var EWSType_boolean
	 */
	public $IncludesLastItemInRange;

	/**
	 * Changes property
	 * 
	 * @var EWSType_SyncFolderItemsChangesType
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
				'name' => 'IncludesLastItemInRange',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'Changes',
				'required' => false,
				'type' => 'SyncFolderItemsChangesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SyncFolderItemsResponseMessageType