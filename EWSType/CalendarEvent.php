<?php
/**
 * Definition of the CalendarEvent type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the CalendarEvent type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_CalendarEvent extends EWSType {
	/**
	 * Start date and time of the event in ISO 8601 format.
	 * 
	 * @var string
	 */
	public $Start;

	/**
	 * End date and time of the event in ISO 8601 format.
	 * 
	 * @var string
	 */
	public $End;

	/**
	 * BusyType property
	 * 
	 * @var EWSType_LegacyFreeBusyType
	 */
	public $BusyType;

	/**
	 * CalendarEventDetails property
	 * 
	 * @var EWSType_CalendarEventDetails
	 */
	public $CalendarEventDetails;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Start',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'End',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'BusyType',
				'required' => false,
				'type' => 'LegacyFreeBusyType',
			),
			array(
				'name' => 'CalendarEventDetails',
				'required' => false,
				'type' => 'CalendarEventDetails',
			),
		); // end $this->schema
	} // end function __construct()
} // end class CalendarEvent