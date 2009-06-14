<?php
/**
 * Definition of the CalendarViewType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the CalendarViewType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_CalendarViewType {
	/**
	 * StartDate property
	 * 
	 * @var EWSType_dateTime
	 */
	public $StartDate;

	/**
	 * EndDate property
	 * 
	 * @var EWSType_dateTime
	 */
	public $EndDate;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'StartDate',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'EndDate',
				'required' => false,
				'type' => 'dateTime',
			),
		); // end $this->schema
	} // end function __construct()
} // end class CalendarViewType