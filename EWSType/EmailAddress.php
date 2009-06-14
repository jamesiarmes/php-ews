<?php
/**
 * Definition of the EmailAddress type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the EmailAddress type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_EmailAddress {
	/**
	 * Name property
	 * 
	 * @var EWSType_string
	 */
	public $Name;

	/**
	 * Address property
	 * 
	 * @var EWSType_string
	 */
	public $Address;

	/**
	 * RoutingType property
	 * 
	 * @var EWSType_string
	 */
	public $RoutingType;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'Name',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Address',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'RoutingType',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EmailAddress