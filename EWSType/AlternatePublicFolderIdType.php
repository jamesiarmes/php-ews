<?php
/**
 * Definition of the AlternatePublicFolderIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AlternatePublicFolderIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AlternatePublicFolderIdType extends EWSType {
	/**
	 * FolderId property
	 * 
	 * @var string
	 */
	public $FolderId;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderId',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AlternatePublicFolderIdType