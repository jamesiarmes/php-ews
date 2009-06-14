<?php
/**
 * Definition of the FindItemResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FindItemResponseMessageType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FindItemResponseMessageType {
	/**
	 * RootFolder property
	 * 
	 * @var EWSType_FindItemParentType
	 */
	public $RootFolder;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'RootFolder',
				'required' => false,
				'type' => 'FindItemParentType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FindItemResponseMessageType