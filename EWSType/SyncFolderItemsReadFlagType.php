<?php
/**
 * Definition of the SyncFolderItemsReadFlagType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SyncFolderItemsReadFlagType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SyncFolderItemsReadFlagType extends EWSType {
	/**
	 * ItemId property
	 * 
	 * @var EWSType_ItemIdType
	 */
	public $ItemId;

	/**
	 * IsRead property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsRead;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemId',
				'required' => false,
				'type' => 'ItemIdType',
			),
			array(
				'name' => 'IsRead',
				'required' => false,
				'type' => 'boolean',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SyncFolderItemsReadFlagType