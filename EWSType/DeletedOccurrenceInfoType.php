<?php
/**
 * Definition of the DeletedOccurrenceInfoType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the DeletedOccurrenceInfoType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_DeletedOccurrenceInfoType extends EWSType {
	/**
	 * Start property
	 * 
	 * @var EWSType_dateTime
	 */
	public $Start;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Start',
				'required' => false,
				'type' => 'dateTime',
			),
		); // end $this->schema
	} // end function __construct()
} // end class DeletedOccurrenceInfoType