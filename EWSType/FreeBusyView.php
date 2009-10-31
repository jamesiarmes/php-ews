<?php
/**
 * Definition of the FreeBusyView type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the FreeBusyView type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_FreeBusyView extends EWSType {
	/**
	 * FreeBusyViewType property
	 * 
	 * @var EWSType_FreeBusyViewType
	 */
	public $FreeBusyViewType;

	/**
	 * MergedFreeBusy property
	 * 
	 * @var string
	 */
	public $MergedFreeBusy;

	/**
	 * CalendarEventArray property
	 * 
	 * @var EWSType_ArrayOfCalendarEvent
	 */
	public $CalendarEventArray;

	/**
	 * WorkingHours property
	 * 
	 * @var EWSType_WorkingHours
	 */
	public $WorkingHours;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'FreeBusyViewType',
				'required' => false,
				'type' => 'FreeBusyViewType',
			),
			array(
				'name' => 'MergedFreeBusy',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'CalendarEventArray',
				'required' => false,
				'type' => 'ArrayOfCalendarEvent',
			),
			array(
				'name' => 'WorkingHours',
				'required' => false,
				'type' => 'WorkingHours',
			),
		); // end $this->schema
	} // end function __construct()
} // end class FreeBusyView