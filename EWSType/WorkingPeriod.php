<?php
/**
 * Definition of the WorkingPeriod type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the WorkingPeriod type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_WorkingPeriod extends EWSType {
	/**
	 * DayOfWeek property
	 * 
	 * @var EWSType_DaysOfWeekType
	 */
	public $DayOfWeek;

	/**
	 * StartTimeInMinutes property
	 * 
	 * @var EWSType_int
	 */
	public $StartTimeInMinutes;

	/**
	 * EndTimeInMinutes property
	 * 
	 * @var EWSType_int
	 */
	public $EndTimeInMinutes;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'DayOfWeek',
				'required' => false,
				'type' => 'DaysOfWeekType',
			),
			array(
				'name' => 'StartTimeInMinutes',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'EndTimeInMinutes',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class WorkingPeriod