<?php
/**
 * Definition of the IntervalRecurrencePatternBaseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the IntervalRecurrencePatternBaseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_IntervalRecurrencePatternBaseType extends EWSType {
	/**
	 * Interval property
	 * 
	 * @var EWSType_int
	 */
	public $Interval;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Interval',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class IntervalRecurrencePatternBaseType