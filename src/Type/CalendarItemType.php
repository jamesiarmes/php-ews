<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\CalendarItemType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Represents an Exchange calendar item.
 *
 * @package php-ews\Type
 */
class CalendarItemType extends ItemType
{
    /**
     * Represents the total number of calendar items that are adjacent to a
     * meeting time.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AdjacentMeetingCount;

    /**
     * Describes all calendar items that are adjacent to a meeting time.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType
     */
    public $AdjacentMeetings;

    /**
     * Indicates whether a new meeting time can be proposed for a meeting by an
     * attendee.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $AllowNewTimeProposal;

    /**
     * Represents the date and time when an attendee replied to a meeting
     * request.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $AppointmentReplyTime;

    /**
     * Specifies the sequence number of a version of an appointment.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $AppointmentSequenceNumber;

    /**
     * Specifies the status of the appointment.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\AppointmentState
     */
    public $AppointmentState;

    /**
     * Represents the occurrence type of a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\CalendarItemTypeType
     */
    public $CalendarItemType;

    /**
     * Describes the type of conferencing that is performed with a calendar
     * item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ConferenceType
     */
    public $ConferenceType;

    /**
     * Represents the number of meetings that conflict with the calendar item.
     *
     * @since Exchange 2007
     *
     * @var integer
     */
    public $ConflictingMeetingCount;

    /**
     * Identifies all items that conflict with a meeting time.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType
     */
    public $ConflictingMeetings;

    /**
     * Indicates the date and time that an instance of a iCalendar object was
     * created.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $DateTimeStamp;

    /**
     * Contains an array of deleted occurrences of a recurring calendar item.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfDeletedOccurrencesType
     */
    public $DeletedOccurrences;

    /**
     * Represents the duration of a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Duration;

    /**
     * Represents the end of a duration.
     *
     * This element only applies to a single occurrence of a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $End;

    /**
     * Represents the end time zone of the calendar item.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\TimeZoneDefinitionType
     */
    public $EndTimeZone;

    /**
     * Represents the first occurrence of a recurring calendar item.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TimeZoneDefinitionType
     */
    public $FirstOccurrence;

    /**
     * Indicates whether a calendar item or meeting request represents an
     * all-day event.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsAllDayEvent;

    /**
     * Indicates whether an appointment or meeting has been canceled.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsCancelled;

    /**
     * Indicates whether the calendar item is a meeting or appointment.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsMeeting;

    /**
     * Indicates whether the meeting is online.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsOnlineMeeting;

    /**
     * Indicates whether a calendar item is part of a recurring item.
     *
     * This element is read-only.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * Indicates whether a response to an item is required.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $IsResponseRequested;

    /**
     * Represents the last occurrence of a recurring calendar item.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\OccurrenceInfoType
     */
    public $LastOccurrence;

    /**
     * Represents the free/busy status of the calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\LegacyFreeBusyType
     */
    public $LegacyFreeBusyStatus;

    /**
     * Represents the location of a meeting or appointment.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $Location;

    /**
     * Indicates whether a meeting request has been sent to requested attendees.
     *
     * @since Exchange 2007
     *
     * @var boolean
     */
    public $MeetingRequestWasSent;

    /**
     * Represents the time zone of the location where the meeting is hosted.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\TimeZoneType
     */
    public $MeetingTimeZone;

    /**
     * Contains the URL for the meeting workspace that is linked to by the
     * calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $MeetingWorkspaceUrl;

    /**
     * Contains an array of recurring calendar item occurrences that have been
     * modified so that they differ from the recurrence master item.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfOccurrenceInfoType
     */
    public $ModifiedOccurrences;

    /**
     * Contains the status of or response to a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ResponseTypeType
     */
    public $MyResponseType;

    /**
     * Specifies the URL for a Microsoft NetShow online meeting.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $NetShowUrl;

    /**
     * Represents attendees that are not required to attend a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType
     */
    public $OptionalAttendees;

    /**
     * Represents the organizer of a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\SingleRecipientType
     */
    public $Organizer;

    /**
     * Represents the original start time of a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $OriginalStart;

    /**
     * Contains the recurrence pattern for calendar items and meeting requests.
     *
     * This element is valid if CalendarItemType has the RecurringMaster value.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\RecurrenceType
     */
    public $Recurrence;

    /**
     * Used to identify a specific instance of a recurring calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $RecurrenceId;

    /**
     * Represents attendees that are required to attend a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType
     */
    public $RequiredAttendees;

    /**
     * Represents a scheduled resource for a meeting.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType
     */
    public $Resources;

    /**
     * Represents the start of a calendar item.
     *
     * This element only applies to a single occurrence of a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $Start;

    /**
     * Represents the start time zone of the calendar item.
     *
     * @since Exchange 2010
     *
     * @var \jamesiarmes\PhpEws\Type\TimeZoneDefinitionType
     */
    public $StartTimeZone;

    /**
     * Provides a text description of a time zone.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $TimeZone;

    /**
     * Identifies a calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $UID;

    /**
     * Provides information about when a calendar item occurs.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $When;
}
