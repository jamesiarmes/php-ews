<?php
/**
 * Definition of the RecurrenceRangeBaseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the RecurrenceRangeBaseType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_RecurrenceRangeBaseType {
	/**
	 * StartDate property
	 * 
	 * @var EWSType_date
	 */
	public $StartDate;

	/**
	 * Constructor
	 */
	public __construct() {
		$this->schema = array(
			array(
				'name' => 'StartDate',
				'required' => false,
				'type' => 'date',
			),
		); // end $this->schema
	} // end function __construct()
} // end class RecurrenceRangeBaseType