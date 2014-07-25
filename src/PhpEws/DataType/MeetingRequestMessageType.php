<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MeetingRequestMessageType type
 */
class MeetingRequestMessageType extends DataType
{
    /**
     * MeetingRequestType property
     *
     * @var MeetingRequestTypeType
     */
    public $MeetingRequestType;

    /**
     * IntendedFreeBusyStatus property
     *
     * @var LegacyFreeBusyType
     */
    public $IntendedFreeBusyStatus;

    /**
     * Start property
     *
     * @var \DateTime
     */
    public $Start;

    /**
     * End property
     *
     * @var \DateTime
     */
    public $End;

    /**
     * OriginalStart property
     *
     * @var \DateTime
     */
    public $OriginalStart;

    /**
     * IsAllDayEvent property
     *
     * @var boolean
     */
    public $IsAllDayEvent;

    /**
     * LegacyFreeBusyStatus property
     *
     * @var LegacyFreeBusyType
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
     * @var boolean
     */
    public $IsMeeting;

    /**
     * IsCancelled property
     *
     * @var boolean
     */
    public $IsCancelled;

    /**
     * IsRecurring property
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * MeetingRequestWasSent property
     *
     * @var boolean
     */
    public $MeetingRequestWasSent;

    /**
     * CalendarItemType property
     *
     * @var CalendarItemTypeType
     */
    public $CalendarItemType;

    /**
     * MyResponseType property
     *
     * @var ResponseTypeType
     */
    public $MyResponseType;

    /**
     * Organizer property
     *
     * @var SingleRecipientType
     */
    public $Organizer;

    /**
     * RequiredAttendees property
     *
     * @var NonEmptyArrayOfAttendeesType
     */
    public $RequiredAttendees;

    /**
     * OptionalAttendees property
     *
     * @var NonEmptyArrayOfAttendeesType
     */
    public $OptionalAttendees;

    /**
     * Resources property
     *
     * @var NonEmptyArrayOfAttendeesType
     */
    public $Resources;

    /**
     * ConflictingMeetingCount property
     *
     * @var integer
     */
    public $ConflictingMeetingCount;

    /**
     * AdjacentMeetingCount property
     *
     * @var integer
     */
    public $AdjacentMeetingCount;

    /**
     * ConflictingMeetings property
     *
     * @var NonEmptyArrayOfAllItemsType
     */
    public $ConflictingMeetings;

    /**
     * AdjacentMeetings property
     *
     * @var NonEmptyArrayOfAllItemsType
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
     * @var \DateTime
     */
    public $AppointmentReplyTime;

    /**
     * AppointmentSequenceNumber property
     *
     * @var integer
     */
    public $AppointmentSequenceNumber;

    /**
     * AppointmentState property
     *
     * @var integer
     */
    public $AppointmentState;

    /**
     * Recurrence property
     *
     * @var RecurrenceType
     */
    public $Recurrence;

    /**
     * FirstOccurrence property
     *
     * @var OccurrenceInfoType
     */
    public $FirstOccurrence;

    /**
     * LastOccurrence property
     *
     * @var OccurrenceInfoType
     */
    public $LastOccurrence;

    /**
     * ModifiedOccurrences property
     *
     * @var NonEmptyArrayOfOccurrenceInfoType
     */
    public $ModifiedOccurrences;

    /**
     * DeletedOccurrences property
     *
     * @var NonEmptyArrayOfDeletedOccurrencesType
     */
    public $DeletedOccurrences;

    /**
     * MeetingTimeZone property
     *
     * @var TimeZoneType
     */
    public $MeetingTimeZone;

    /**
     * ConferenceType property
     *
     * @var integer
     */
    public $ConferenceType;

    /**
     * AllowNewTimeProposal property
     *
     * @var boolean
     */
    public $AllowNewTimeProposal;

    /**
     * IsOnlineMeeting property
     *
     * @var boolean
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
}
