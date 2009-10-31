<?php
/**
 * Definition of the PhysicalAddressDictionaryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the PhysicalAddressDictionaryType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_PhysicalAddressDictionaryType extends EWSType {
	/**
	 * Entry property
	 * 
	 * @var EWSType_PhysicalAddressDictionaryEntryType
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
				'type' => 'PhysicalAddressDictionaryEntryType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class PhysicalAddressDictionaryType