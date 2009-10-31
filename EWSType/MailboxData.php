<?php
/**
 * Definition of the MailboxData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the MailboxData type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_MailboxData extends EWSType {
	/**
	 * Email property
	 * 
	 * @var EWSType_EmailAddress
	 */
	public $Email;

	/**
	 * AttendeeType property
	 * 
	 * @var EWSType_MeetingAttendeeType
	 */
	public $AttendeeType;

	/**
	 * ExcludeConflicts property
	 * 
	 * @var EWSType_boolean
	 */
	public $ExcludeConflicts;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'Email',
				'required' => false,
				'type' => 'EmailAddress',
			),
			array(
				'name' => 'AttendeeType',
				'required' => false,
				'type' => 'MeetingAttendeeType',
			),
			array(
				'name' => 'ExcludeConflicts',
				'required' => false,
				'type' => 'boolean',
			),
		); // end $this->schema
	} // end function __construct()
} // end class MailboxData