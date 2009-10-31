<?php
/**
 * Definition of the PhoneNumberDictionaryEntryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PhoneNumberDictionaryEntryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PhoneNumberDictionaryEntryType extends EWSType {
	/**
	 * _ property
	 * 
	 * @var string
	 */
	public $_;

	/**
	 * Key property
	 * 
	 * @var EWSType_PhoneNumberKeyType
	 */
	public $Key;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Key',
				'required' => false,
				'type' => 'PhoneNumberKeyType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PhoneNumberDictionaryEntryType