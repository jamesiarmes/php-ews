<?php
/**
 * Definition of the PhoneNumberDictionaryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PhoneNumberDictionaryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PhoneNumberDictionaryType extends EWSType {
	/**
	 * Entry property
	 * 
	 * @var EWSType_PhoneNumberDictionaryEntryType
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
				'type' => 'PhoneNumberDictionaryEntryType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PhoneNumberDictionaryType