<?php
/**
 * Definition of the ConstantValueType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ConstantValueType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ConstantValueType {
	/**
	 * Value property
	 * 
	 * @var EWSType_string
	 */
	public $Value;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Value',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ConstantValueType