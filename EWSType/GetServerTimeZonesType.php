<?php
/**
 * Definition of the GetServerTimeZonesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GetServerTimeZonesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GetServerTimeZonesType extends EWSType {
	/**
	 * Collection of timezone identifiers to get the definition for. Omit to get
	 * the definition of all timezones supported by the server.
	 * 
	 * @var EWSType_NonEmptyArrayOfTimeZoneIdType
	 */
	public $Ids;
	
	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Ids',
				'required' => false,
				'type' => 'NonEmptyArrayOfTimeZoneIdType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EWSType_GetServerTimeZonesType
