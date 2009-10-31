<?php
/**
 * Definition of the Duration type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the Duration type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_Duration extends EWSType {
	/**
	 * StartTime property
	 * 
	 * @var EWSType_dateTime
	 */
	public $StartTime;

	/**
	 * EndTime property
	 * 
	 * @var EWSType_dateTime
	 */
	public $EndTime;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'StartTime',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'EndTime',
				'required' => false,
				'type' => 'dateTime',
			),
		); // end $this->schema
	} // end function __construct()
} // end class Duration