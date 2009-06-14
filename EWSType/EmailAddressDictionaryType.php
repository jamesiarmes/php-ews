<?php
/**
 * Definition of the EmailAddressDictionaryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the EmailAddressDictionaryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_EmailAddressDictionaryType {
	/**
	 * Entry property
	 * 
	 * @var EWSType_EmailAddressDictionaryEntryType
	 */
	public $Entry;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'Entry',
				'required' => false,
				'type' => 'EmailAddressDictionaryEntryType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EmailAddressDictionaryType