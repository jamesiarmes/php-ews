<?php
/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NonEmptyArrayOfAttendeesType extends EWSType {
	/**
	 * Attendee property
	 * 
	 * @var EWSType_AttendeeType
	 */
	public $Attendee;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Attendee',
				'required' => false,
				'type' => 'AttendeeType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NonEmptyArrayOfAttendeesType