<?php
/**
 * Definition of the GroupAttendeeConflictData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the GroupAttendeeConflictData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_GroupAttendeeConflictData extends EWSType {
	/**
	 * NumberOfMembers property
	 * 
	 * @var EWSType_int
	 */
	public $NumberOfMembers;

	/**
	 * NumberOfMembersAvailable property
	 * 
	 * @var EWSType_int
	 */
	public $NumberOfMembersAvailable;

	/**
	 * NumberOfMembersWithConflict property
	 * 
	 * @var EWSType_int
	 */
	public $NumberOfMembersWithConflict;

	/**
	 * NumberOfMembersWithNoData property
	 * 
	 * @var EWSType_int
	 */
	public $NumberOfMembersWithNoData;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'NumberOfMembers',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'NumberOfMembersAvailable',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'NumberOfMembersWithConflict',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'NumberOfMembersWithNoData',
				'required' => false,
				'type' => 'int',
			),
		); // end $this->schema
	} // end function __construct()
} // end class GroupAttendeeConflictData