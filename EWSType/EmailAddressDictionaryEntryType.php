<?php
/**
 * Definition of the EmailAddressDictionaryEntryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the EmailAddressDictionaryEntryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_EmailAddressDictionaryEntryType extends EWSType {
	/**
	 * _ property
	 * 
	 * @var string
	 */
	public $_;

	/**
	 * Key property
	 * 
	 * @var EWSType_EmailAddressKeyType
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
				'type' => 'EmailAddressKeyType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EmailAddressDictionaryEntryType