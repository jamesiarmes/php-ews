<?php
/**
 * Definition of the NonEmptyArrayOfFolderNamesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfFolderNamesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfFolderNamesType {
	/**
	 * FolderName property
	 * 
	 * @var EWSType_string
	 */
	public $FolderName;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfFolderNamesType