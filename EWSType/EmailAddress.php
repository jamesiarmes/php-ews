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
class EWSType_EmailAddress extends EWSType {
	/**
	 * Name property
	 * 
	 * @var string
	 */
	public $Name;

	/**
	 * Address property
	 * 
	 * @var string
	 */
	public $Address;

	/**
	 * RoutingType property
	 * 
	 * @var string
	 */
	public $RoutingType;

	/**
	 * Constructor
	 */
	public function __construct() {
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