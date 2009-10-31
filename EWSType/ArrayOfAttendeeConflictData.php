<?php
/**
 * Definition of the ArrayOfAttendeeConflictData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the ArrayOfAttendeeConflictData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_ArrayOfAttendeeConflictData extends EWSType {
	/**
	 * UnknownAttendeeConflictData property
	 * 
	 * @var EWSType_UnknownAttendeeConflictData
	 */
	public $UnknownAttendeeConflictData;

	/**
	 * IndividualAttendeeConflictData property
	 * 
	 * @var EWSType_IndividualAttendeeConflictData
	 */
	public $IndividualAttendeeConflictData;

	/**
	 * TooBigGroupAttendeeConflictData property
	 * 
	 * @var EWSType_TooBigGroupAttendeeConflictData
	 */
	public $TooBigGroupAttendeeConflictData;

	/**
	 * GroupAttendeeConflictData property
	 * 
	 * @var EWSType_GroupAttendeeConflictData
	 */
	public $GroupAttendeeConflictData;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'UnknownAttendeeConflictData',
				'required' => false,
				'type' => 'UnknownAttendeeConflictData',
			),
			array(
				'name' => 'IndividualAttendeeConflictData',
				'required' => false,
				'type' => 'IndividualAttendeeConflictData',
			),
			array(
				'name' => 'TooBigGroupAttendeeConflictData',
				'required' => false,
				'type' => 'TooBigGroupAttendeeConflictData',
			),
			array(
				'name' => 'GroupAttendeeConflictData',
				'required' => false,
				'type' => 'GroupAttendeeConflictData',
			),
		); // end $this->schema
	} // end function __construct()
} // end class ArrayOfAttendeeConflictData