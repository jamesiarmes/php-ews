<?php
/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the RelativeYearlyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_RelativeYearlyRecurrencePatternType {
	/**
	 * DaysOfWeek property
	 * 
	 * @var EWSType_DayOfWeekType
	 */
	public $DaysOfWeek;

	/**
	 * DayOfWeekIndex property
	 * 
	 * @var EWSType_DayOfWeekIndexType
	 */
	public $DayOfWeekIndex;

	/**
	 * Month property
	 * 
	 * @var EWSType_MonthNamesType
	 */
	public $Month;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'DaysOfWeek',
				'required' => false,
				'type' => 'DayOfWeekType',
			),
			array(
				'name' => 'DayOfWeekIndex',
				'required' => false,
				'type' => 'DayOfWeekIndexType',
			),
			array(
				'name' => 'Month',
				'required' => false,
				'type' => 'MonthNamesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class RelativeYearlyRecurrencePatternType