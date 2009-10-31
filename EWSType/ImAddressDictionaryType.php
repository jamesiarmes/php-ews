<?php
/**
 * Definition of the ImAddressDictionaryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ImAddressDictionaryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ImAddressDictionaryType extends EWSType {
	/**
	 * Entry property
	 * 
	 * @var EWSType_ImAddressDictionaryEntryType
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
				'type' => 'ImAddressDictionaryEntryType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ImAddressDictionaryType