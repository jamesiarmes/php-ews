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
class EWSType_AlternatePublicFolderIdType {
	/**
	 * FolderId property
	 * 
	 * @var EWSType_string
	 */
	public $FolderId;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderId',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AlternatePublicFolderIdType