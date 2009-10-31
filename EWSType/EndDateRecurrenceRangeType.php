<?php
/**
 * Definition of the EndDateRecurrenceRangeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the EndDateRecurrenceRangeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_EndDateRecurrenceRangeType extends EWSType {
	/**
	 * EndDate property
	 * 
	 * @var EWSType_date
	 */
	public $EndDate;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'EndDate',
				'required' => false,
				'type' => 'date',
			),
		); // end $this->schema
	} // end function __construct()
} // end class EndDateRecurrenceRangeType