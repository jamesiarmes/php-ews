<?php
/**
 * Definition of the ConflictResultsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ConflictResultsType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ConflictResultsType extends EWSType {
	/**
	 * Count property
	 * 
	 * @var EWSType_int
	 */
	public $Count;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Count',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ConflictResultsType