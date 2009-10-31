<?php
/**
 * Definition of the ArrayOfUnknownEntriesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfUnknownEntriesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfUnknownEntriesType extends EWSType {
	/**
	 * UnknownEntry property
	 * 
	 * @var string
	 */
	public $UnknownEntry;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'UnknownEntry',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfUnknownEntriesType