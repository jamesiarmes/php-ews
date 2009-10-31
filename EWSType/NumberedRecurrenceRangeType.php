<?php
/**
 * Definition of the NumberedRecurrenceRangeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the NumberedRecurrenceRangeType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_NumberedRecurrenceRangeType extends EWSType {
	/**
	 * NumberOfOccurrences property
	 * 
	 * @var EWSType_int
	 */
	public $NumberOfOccurrences;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'NumberOfOccurrences',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class NumberedRecurrenceRangeType