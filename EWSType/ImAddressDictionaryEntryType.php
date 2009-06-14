<?php
/**
 * Definition of the ImAddressDictionaryEntryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ImAddressDictionaryEntryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ImAddressDictionaryEntryType {
	/**
	 * _ property
	 * 
	 * @var EWSType_string
	 */
	public $_;

	/**
	 * Key property
	 * 
	 * @var EWSType_ImAddressKeyType
	 */
	public $Key;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => '_',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Key',
				'required' => false,
				'type' => 'ImAddressKeyType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ImAddressDictionaryEntryType