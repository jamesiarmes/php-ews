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
class EWSType_NonEmptyArrayOfFolderNamesType extends EWSType {
	/**
	 * FolderName property
	 * 
	 * @var string
	 */
	public $FolderName;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FolderName',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfFolderNamesType