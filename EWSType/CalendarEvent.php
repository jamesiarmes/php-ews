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
	 * StartTime property
	 * 
	 * @var EWSType_dateTime
	 */
	public $StartTime;

	/**
	 * EndTime property
	 * 
	 * @var EWSType_dateTime
	 */
	public $EndTime;

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
				'name' => 'StartTime',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'EndTime',
				'required' => false,
				'type' => 'dateTime',
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