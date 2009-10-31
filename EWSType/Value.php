<?php
/**
 * Definition of the Value type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the Value type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_Value extends EWSType {
	/**
	 * _ property
	 * 
	 * @var string
	 */
	public $_;

	/**
	 * Name property
	 * 
	 * @var string
	 */
	public $Name;

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
				'name' => 'Name',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class Value