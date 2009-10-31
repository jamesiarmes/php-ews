<?php
/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AbsoluteYearlyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AbsoluteYearlyRecurrencePatternType extends EWSType {
	/**
	 * DayOfMonth property
	 * 
	 * @var EWSType_int
	 */
	public $DayOfMonth;

	/**
	 * Month property
	 * 
	 * @var EWSType_MonthNamesType
	 */
	public $Month;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'DayOfMonth',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'Month',
				'required' => false,
				'type' => 'MonthNamesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class AbsoluteYearlyRecurrencePatternType