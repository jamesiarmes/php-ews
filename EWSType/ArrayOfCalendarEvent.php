<?php
/**
 * Definition of the ArrayOfCalendarEvent type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfCalendarEvent type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfCalendarEvent extends EWSType {
	/**
	 * CalendarEvent property
	 * 
	 * @var EWSType_CalendarEvent
	 */
	public $CalendarEvent;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'CalendarEvent',
				'required' => false,
				'type' => 'CalendarEvent',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfCalendarEvent