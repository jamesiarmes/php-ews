<?php
/**
 * Definition of the AbsoluteMonthlyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the AbsoluteMonthlyRecurrencePatternType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_AbsoluteMonthlyRecurrencePatternType extends EWSType {
	/**
	 * DayOfMonth property
	 * 
	 * @var EWSType_int
	 */
	public $DayOfMonth;

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
		); // end $this->schema
	} // end function __construct()
} // end class AbsoluteMonthlyRecurrencePatternType