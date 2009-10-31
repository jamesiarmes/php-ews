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
class EWSType_EmailAddressDictionaryType extends EWSType {
	/**
	 * Entry property
	 * 
	 * @var EWSType_EmailAddressDictionaryEntryType
	 */
	public $Entry;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Entry',
				'required' => false,
				'type' => 'EmailAddressDictionaryEntryType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EmailAddressDictionaryType