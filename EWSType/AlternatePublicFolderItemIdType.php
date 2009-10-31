<?php
/**
 * Definition of the AlternatePublicFolderItemIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AlternatePublicFolderItemIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AlternatePublicFolderItemIdType extends EWSType {
	/**
	 * ItemId property
	 * 
	 * @var string
	 */
	public $ItemId;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ItemId',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AlternatePublicFolderItemIdType