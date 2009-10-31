<?php
/**
 * Definition of the ArrayOfWorkingPeriod type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfWorkingPeriod type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfWorkingPeriod extends EWSType {
	/**
	 * WorkingPeriod property
	 * 
	 * @var EWSType_WorkingPeriod
	 */
	public $WorkingPeriod;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'WorkingPeriod',
				'required' => false,
				'type' => 'WorkingPeriod',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfWorkingPeriod