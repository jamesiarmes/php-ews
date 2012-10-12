<?php
/**
 * Definition of the CalendarItemType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CalendarItemType type
 */
class EWSType_CalendarItemType extends EWSType_ItemType
{
    /**
     * Identifies a calendar item.
     *
     * @var string
     */
    public $UID;

    /**
     * Used to identify a specific instance of a recurring calendar item.
     *
     * @var EWSType_dateTime
     */
    public $RecurrenceId;

    /**
     * Indicates the date and time that an instance of a iCalendar object was
     * created.
     *
     * @var EWSType_dateTime
     */
    public $DateTimeStamp;

    /**
     * Represents the start of a calendar item. This element only applies to a
     * single occurrence of a calendar item.
     *
     * @var EWSType_dateTime
     */
    public $Start;

    /**
     * Represents the end of a duration. This element only applies to a single
     * occurrence of a calendar item.
     *
     * @var EWSType_dateTime
     */
    public $End;

    /**
     * Represents the original start time of a calendar item.
     *
     * @var EWSType_dateTime
     */
    public $OriginalStart;

    /**
     * Indicates whether a calendar item or meeting request represents an
     * all-day event.
     *
     * @var boolean
     */
    public $IsAllDayEvent;

    /**
     * Represents the free/busy status of the calendar item.
     *
     * @var EWSType_LegacyFreeBusyType
     */
    public $LegacyFreeBusyStatus;

    /**
     * Represents the location of a meeting or appointment.
     *
     * @var string
     */
    public $Location;

    /**
     * Provides information about when a calendar item occurs.
     *
     * @var string
     */
    public $When;

    /**
     * Indicates whether the calendar item is a meeting or appointment.
     *
     * @var boolean
     */
    public $IsMeeting;

    /**
     * Indicates whether an appointment or meeting has been canceled.
     *
     * @var boolean
     */
    public $IsCancelled;

    /**
     * Indicates whether a calendar item is part of a recurring item. This
     * element is read-only.
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * Indicates whether a meeting request has been sent to requested attendees.
     *
     * @var boolean
     */
    public $MeetingRequestWasSent;

    /**
     * Indicates whether a response to an item is required.
     *
     * @var boolean
     */
    public $IsResponseRequested;

    /**
     * Represents the occurrence type of a calendar item.
     *
     * @var EWSType_CalendarItemTypeType
     */
    public $CalendarItemType;

    /**
     * Contains the status of or response to a calendar item.
     *
     * @var EWSType_ResponseTypeType
     */
    public $MyResponseType;

    /**
     * Represents the organizer of a meeting.
     *
     * @var EWSType_SingleRecipientType
     */
    public $Organizer;

    /**
     * Represents attendees that are required to attend a meeting.
     *
     * @var EWSType_NonEmptyArrayOfAttendeesType
     */
    public $RequiredAttendees;

    /**
     * Represents attendees that are not required to attend a meeting.
     *
     * @var EWSType_NonEmptyArrayOfAttendeesType
     */
    public $OptionalAttendees;

    /**
     * Represents a scheduled resource for a meeting.
     *
     * @var EWSType_NonEmptyArrayOfAttendeesType
     */
    public $Resources;

    /**
     * Represents the number of meetings that conflict with the calendar item.
     *
     * @var integer
     */
    public $ConflictingMeetingCount;

    /**
     * Represents the total number of calendar items that are adjacent to a
     * meeting time.
     *
     * @var integer
     */
    public $AdjacentMeetingCount;

    /**
     * Identifies all items that conflict with a meeting time.
     *
     * @var EWSType_NonEmptyArrayOfAllItemsType
     */
    public $ConflictingMeetings;

    /**
     * Describes all calendar items that are adjacent to a meeting time.
     *
     * @var EWSType_NonEmptyArrayOfAllItemsType
     */
    public $AdjacentMeetings;

    /**
     * Represents the duration of a calendar item.
     *
     * @var string
     */
    public $Duration;

    /**
     * Provides a text description of a time zone.
     *
     * @var string
     */
    public $TimeZone;

    /**
     * Represents the date and time when an attendee replied to a meeting
     * request.
     *
     * @var EWSType_dateTime
     */
    public $AppointmentReplyTime;

    /**
     * Specifies the sequence number of a version of an appointment.
     *
     * @var integer
     */
    public $AppointmentSequenceNumber;

    /**
     * Specifies the status of the appointment.
     *
     * @var integer
     */
    public $AppointmentState;

    /**
     * Contains the recurrence pattern for calendar items and meeting requests.
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @var EWSType_RecurrenceType
     */
    public $Recurrence;

    /**
     * Represents the first occurrence of a recurring calendar item. This
     * element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @var EWSType_OccurrenceInfoType
     */
    public $FirstOccurrence;

    /**
     * Represents the last occurrence of a recurring calendar item. This element
     * is valid if CalendarItemType has the RecurringMaster value.
     *
     * @var EWSType_OccurrenceInfoType
     */
    public $LastOccurrence;

    /**
     * Contains an array of recurring calendar item occurrences that have been
     * modified so that they differ from the recurrence master item. This
     * element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @var EWSType_NonEmptyArrayOfOccurrenceInfoType
     */
    public $ModifiedOccurrences;

    /**
     * Contains an array of deleted occurrences of a recurring calendar item.
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @var EWSType_NonEmptyArrayOfDeletedOccurrencesType
     */
    public $DeletedOccurrences;

    /**
     * Represents the time zone of the location where the meeting is hosted.
     *
     * @var EWSType_TimeZoneType
     */
    public $MeetingTimeZone;

    /**
     * Represents the start time zone of the calendar item.
     *
     * @var EWSType_TimeZoneDefinitionType
     */
    public $StartTimeZone;

    /**
     * Represents the end time zone of the calendar item.
     *
     * @var EWSType_TimeZoneDefinitionType
     */
    public $EndTimeZone;

    /**
     * Describes the type of conferencing that is performed with a calendar
     * item.
     *
     * @var integer
     */
    public $ConferenceType;

    /**
     * Indicates whether a new meeting time can be proposed for a meeting by an
     * attendee.
     *
     * @var boolean
     */
    public $AllowNewTimeProposal;

    /**
     * Indicates whether the meeting is online.
     *
     * @var boolean
     */
    public $IsOnlineMeeting;

    /**
     * Contains the URL for the meeting workspace that is linked to by the
     * calendar item.
     *
     * @var string
     */
    public $MeetingWorkspaceUrl;

    /**
     * Specifies the URL for a Microsoft NetShow online meeting.
     *
     * @var string
     */
    public $NetShowUrl;
}
