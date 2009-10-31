<?php
/**
 * Definition of the Suggestion type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the Suggestion type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_Suggestion extends EWSType {
	/**
	 * MeetingTime property
	 * 
	 * @var EWSType_dateTime
	 */
	public $MeetingTime;

	/**
	 * IsWorkTime property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsWorkTime;

	/**
	 * SuggestionQuality property
	 * 
	 * @var EWSType_SuggestionQuality
	 */
	public $SuggestionQuality;

	/**
	 * AttendeeConflictDataArray property
	 * 
	 * @var EWSType_ArrayOfAttendeeConflictData
	 */
	public $AttendeeConflictDataArray;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'MeetingTime',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'IsWorkTime',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'SuggestionQuality',
				'required' => false,
				'type' => 'SuggestionQuality',
			),
			array(
				'name' => 'AttendeeConflictDataArray',
				'required' => false,
				'type' => 'ArrayOfAttendeeConflictData',
			),
		); // end $this->schema
	} // end function __construct()
} // end class Suggestion