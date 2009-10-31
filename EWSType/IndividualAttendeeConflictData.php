<?php
/**
 * Definition of the IndividualAttendeeConflictData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the IndividualAttendeeConflictData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_IndividualAttendeeConflictData extends EWSType {
	/**
	 * BusyType property
	 * 
	 * @var EWSType_LegacyFreeBusyType
	 */
	public $BusyType;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'BusyType',
				'required' => false,
				'type' => 'LegacyFreeBusyType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class IndividualAttendeeConflictData