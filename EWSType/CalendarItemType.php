<?php
/**
 * Definition of the CalendarItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */

/**
 * Definition of the CalendarItemType type
 * 
 * @author James I. Armes <http://www.jamesarmes.net>
 */
class EWSType_CalendarItemType extends EWSType {
	/**
	 * UID property
	 * 
	 * @var string
	 */
	public $UID;

	/**
	 * RecurrenceId property
	 * 
	 * @var EWSType_dateTime
	 */
	public $RecurrenceId;

	/**
	 * DateTimeStamp property
	 * 
	 * @var EWSType_dateTime
	 */
	public $DateTimeStamp;

	/**
	 * Start property
	 * 
	 * @var EWSType_dateTime
	 */
	public $Start;

	/**
	 * End property
	 * 
	 * @var EWSType_dateTime
	 */
	public $End;

	/**
	 * OriginalStart property
	 * 
	 * @var EWSType_dateTime
	 */
	public $OriginalStart;

	/**
	 * IsAllDayEvent property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsAllDayEvent;

	/**
	 * LegacyFreeBusyStatus property
	 * 
	 * @var EWSType_LegacyFreeBusyType
	 */
	public $LegacyFreeBusyStatus;

	/**
	 * Location property
	 * 
	 * @var string
	 */
	public $Location;

	/**
	 * When property
	 * 
	 * @var string
	 */
	public $When;

	/**
	 * IsMeeting property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsMeeting;

	/**
	 * IsCancelled property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsCancelled;

	/**
	 * IsRecurring property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsRecurring;

	/**
	 * MeetingRequestWasSent property
	 * 
	 * @var EWSType_boolean
	 */
	public $MeetingRequestWasSent;

	/**
	 * IsResponseRequested property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsResponseRequested;

	/**
	 * CalendarItemType property
	 * 
	 * @var EWSType_CalendarItemTypeType
	 */
	public $CalendarItemType;

	/**
	 * MyResponseType property
	 * 
	 * @var EWSType_ResponseTypeType
	 */
	public $MyResponseType;

	/**
	 * Organizer property
	 * 
	 * @var EWSType_SingleRecipientType
	 */
	public $Organizer;

	/**
	 * RequiredAttendees property
	 * 
	 * @var EWSType_NonEmptyArrayOfAttendeesType
	 */
	public $RequiredAttendees;

	/**
	 * OptionalAttendees property
	 * 
	 * @var EWSType_NonEmptyArrayOfAttendeesType
	 */
	public $OptionalAttendees;

	/**
	 * Resources property
	 * 
	 * @var EWSType_NonEmptyArrayOfAttendeesType
	 */
	public $Resources;

	/**
	 * ConflictingMeetingCount property
	 * 
	 * @var EWSType_int
	 */
	public $ConflictingMeetingCount;

	/**
	 * AdjacentMeetingCount property
	 * 
	 * @var EWSType_int
	 */
	public $AdjacentMeetingCount;

	/**
	 * ConflictingMeetings property
	 * 
	 * @var EWSType_NonEmptyArrayOfAllItemsType
	 */
	public $ConflictingMeetings;

	/**
	 * AdjacentMeetings property
	 * 
	 * @var EWSType_NonEmptyArrayOfAllItemsType
	 */
	public $AdjacentMeetings;

	/**
	 * Duration property
	 * 
	 * @var string
	 */
	public $Duration;

	/**
	 * TimeZone property
	 * 
	 * @var string
	 */
	public $TimeZone;

	/**
	 * AppointmentReplyTime property
	 * 
	 * @var EWSType_dateTime
	 */
	public $AppointmentReplyTime;

	/**
	 * AppointmentSequenceNumber property
	 * 
	 * @var EWSType_int
	 */
	public $AppointmentSequenceNumber;

	/**
	 * AppointmentState property
	 * 
	 * @var EWSType_int
	 */
	public $AppointmentState;

	/**
	 * Recurrence property
	 * 
	 * @var EWSType_RecurrenceType
	 */
	public $Recurrence;

	/**
	 * FirstOccurrence property
	 * 
	 * @var EWSType_OccurrenceInfoType
	 */
	public $FirstOccurrence;

	/**
	 * LastOccurrence property
	 * 
	 * @var EWSType_OccurrenceInfoType
	 */
	public $LastOccurrence;

	/**
	 * ModifiedOccurrences property
	 * 
	 * @var EWSType_NonEmptyArrayOfOccurrenceInfoType
	 */
	public $ModifiedOccurrences;

	/**
	 * DeletedOccurrences property
	 * 
	 * @var EWSType_NonEmptyArrayOfDeletedOccurrencesType
	 */
	public $DeletedOccurrences;

	/**
	 * MeetingTimeZone property
	 * 
	 * @var EWSType_TimeZoneType
	 */
	public $MeetingTimeZone;

	/**
	 * ConferenceType property
	 * 
	 * @var EWSType_int
	 */
	public $ConferenceType;

	/**
	 * AllowNewTimeProposal property
	 * 
	 * @var EWSType_boolean
	 */
	public $AllowNewTimeProposal;

	/**
	 * IsOnlineMeeting property
	 * 
	 * @var EWSType_boolean
	 */
	public $IsOnlineMeeting;

	/**
	 * MeetingWorkspaceUrl property
	 * 
	 * @var string
	 */
	public $MeetingWorkspaceUrl;

	/**
	 * NetShowUrl property
	 * 
	 * @var string
	 */
	public $NetShowUrl;

	/**
	 * Constructor
	 */
	public function __construct() {
		$this->schema = array(
			array(
				'name' => 'UID',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'RecurrenceId',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'DateTimeStamp',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'Start',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'End',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'OriginalStart',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'IsAllDayEvent',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'LegacyFreeBusyStatus',
				'required' => false,
				'type' => 'LegacyFreeBusyType',
			),
			array(
				'name' => 'Location',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'When',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'IsMeeting',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsCancelled',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsRecurring',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'MeetingRequestWasSent',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsResponseRequested',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'CalendarItemType',
				'required' => false,
				'type' => 'CalendarItemTypeType',
			),
			array(
				'name' => 'MyResponseType',
				'required' => false,
				'type' => 'ResponseTypeType',
			),
			array(
				'name' => 'Organizer',
				'required' => false,
				'type' => 'SingleRecipientType',
			),
			array(
				'name' => 'RequiredAttendees',
				'required' => false,
				'type' => 'NonEmptyArrayOfAttendeesType',
			),
			array(
				'name' => 'OptionalAttendees',
				'required' => false,
				'type' => 'NonEmptyArrayOfAttendeesType',
			),
			array(
				'name' => 'Resources',
				'required' => false,
				'type' => 'NonEmptyArrayOfAttendeesType',
			),
			array(
				'name' => 'ConflictingMeetingCount',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'AdjacentMeetingCount',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'ConflictingMeetings',
				'required' => false,
				'type' => 'NonEmptyArrayOfAllItemsType',
			),
			array(
				'name' => 'AdjacentMeetings',
				'required' => false,
				'type' => 'NonEmptyArrayOfAllItemsType',
			),
			array(
				'name' => 'Duration',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'TimeZone',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'AppointmentReplyTime',
				'required' => false,
				'type' => 'dateTime',
			),
			array(
				'name' => 'AppointmentSequenceNumber',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'AppointmentState',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'Recurrence',
				'required' => false,
				'type' => 'RecurrenceType',
			),
			array(
				'name' => 'FirstOccurrence',
				'required' => false,
				'type' => 'OccurrenceInfoType',
			),
			array(
				'name' => 'LastOccurrence',
				'required' => false,
				'type' => 'OccurrenceInfoType',
			),
			array(
				'name' => 'ModifiedOccurrences',
				'required' => false,
				'type' => 'NonEmptyArrayOfOccurrenceInfoType',
			),
			array(
				'name' => 'DeletedOccurrences',
				'required' => false,
				'type' => 'NonEmptyArrayOfDeletedOccurrencesType',
			),
			array(
				'name' => 'MeetingTimeZone',
				'required' => false,
				'type' => 'TimeZoneType',
			),
			array(
				'name' => 'ConferenceType',
				'required' => false,
				'type' => 'int',
			),
			array(
				'name' => 'AllowNewTimeProposal',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'IsOnlineMeeting',
				'required' => false,
				'type' => 'boolean',
			),
			array(
				'name' => 'MeetingWorkspaceUrl',
				'required' => false,
				'type' => 'string',
			),
			array(
				'name' => 'NetShowUrl',
				'required' => false,
				'type' => 'string',
			),
		); // end $this->schema
	} // end function __construct()
} // end class CalendarItemType