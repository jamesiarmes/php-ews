<?php
/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfTimeZoneIdType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfTimeZoneIdType extends EWSType {
	/**
	 * Array of string timezone identifiers (ex. "Eastern Standard Time").
	 * 
	 * @var array
	 */
	public $Id;
	
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Id',
				'required' => true,
				'type' => 'array',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EWSType_NonEmptyArrayOfTimeZoneIdType
