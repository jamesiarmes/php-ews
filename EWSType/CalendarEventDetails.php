<?php
/**
 * Definition of the CalendarEventDetails type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the CalendarEventDetails type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_CalendarEventDetails extends EWSType {
	/**
	 * ID property
	 * 
	 * @var string
	 */
	public $ID;

	/**
	 * Subject property
	 * 
	 * @var string
	 */
	public $Subject;

	/**
	 * Location property
	 * 
	 * @var string
	 */
	public $Location;

	/**
	 * IsMeeting property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsMeeting;

	/**
	 * IsRecurring property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsRecurring;

	/**
	 * IsException property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsException;

	/**
	 * IsReminderSet property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsReminderSet;

	/**
	 * IsPrivate property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsPrivate;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'ID',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Subject',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'Location',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'IsMeeting',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsRecurring',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsException',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsReminderSet',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsPrivate',
				'required' => false,
				'type' => 'boolean',
			),
		); // end $this->schema
	} // end function __construct()
} // end class CalendarEventDetails