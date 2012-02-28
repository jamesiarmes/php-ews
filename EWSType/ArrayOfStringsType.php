<?php
/**
 * Definition of the ArrayOfStringsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfStringsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfStringsType extends EWSType {
	/**
	 * String property
	 * 
	 * @var string
	 */
	public $String;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'String',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
	
	/**
	 * Properly converts the value of this type to a string.
	 * 
	 * @return string
	 */
	public function __toString() {
		return $this->String;
	} // end function __toString()
} // end class ArrayOfStringsType
