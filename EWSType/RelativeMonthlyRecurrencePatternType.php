<?php
/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the RelativeMonthlyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_RelativeMonthlyRecurrencePatternType extends EWSType {
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
	 * Constructor
	 */
	public function __construct() {
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
		); // end $this->schema
	} // end function __construct()
} // end class RelativeMonthlyRecurrencePatternType