<?php
/**
 * Definition of the CalendarPermissionSetType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the CalendarPermissionSetType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_CalendarPermissionSetType extends EWSType {
	/**
	 * CalendarPermissions property
	 * 
	 * @var EWSType_ArrayOfCalendarPermissionsType
	 */
	public $CalendarPermissions;

	/**
	 * UnknownEntries property
	 * 
	 * @var EWSType_ArrayOfUnknownEntriesType
	 */
	public $UnknownEntries;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'CalendarPermissions',
				'required' => false,
				'type' => 'ArrayOfCalendarPermissionsType',
			),
			array(
				'name' => 'UnknownEntries',
				'required' => false,
				'type' => 'ArrayOfUnknownEntriesType',
			),
		); // end $this->schema
	} // end function __construct()
} // end class CalendarPermissionSetType