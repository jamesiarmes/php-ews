<?php
/**
 * Definition of the SerializableTimeZone type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the SerializableTimeZone type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_SerializableTimeZone extends EWSType {
	/**
	 * Bias property
	 * 
	 * @var EWSType_int
	 */
	public $Bias;

	/**
	 * StandardTime property
	 * 
	 * @var EWSType_SerializableTimeZoneTime
	 */
	public $StandardTime;

	/**
	 * DaylightTime property
	 * 
	 * @var EWSType_SerializableTimeZoneTime
	 */
	public $DaylightTime;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Bias',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'StandardTime',
				'required' => false,
				'type' => 'SerializableTimeZoneTime',
			),
			array(
				'name' => 'DaylightTime',
				'required' => false,
				'type' => 'SerializableTimeZoneTime',
			),
		); // end $this->schema
	} // end function __construct()
} // end class SerializableTimeZone