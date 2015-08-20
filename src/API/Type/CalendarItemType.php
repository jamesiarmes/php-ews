<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing CalendarItemType
 *
 *
 * XSD Type: CalendarItemType
 *
 * @method CalendarItemType getUID()
 * @method CalendarItemType setUID(string $uID)
 * @method CalendarItemType getRecurrenceId()
 * @method CalendarItemType setRecurrenceId(\DateTime $recurrenceId)
 * @method CalendarItemType getDateTimeStamp()
 * @method CalendarItemType setDateTimeStamp(\DateTime $dateTimeStamp)
 * @method CalendarItemType getStart()
 * @method CalendarItemType setStart(\DateTime $start)
 * @method CalendarItemType getEnd()
 * @method CalendarItemType setEnd(\DateTime $end)
 * @method CalendarItemType getOriginalStart()
 * @method CalendarItemType setOriginalStart(\DateTime $originalStart)
 * @method CalendarItemType getIsAllDayEvent()
 * @method CalendarItemType setIsAllDayEvent(boolean $isAllDayEvent)
 * @method CalendarItemType getLegacyFreeBusyStatus()
 * @method CalendarItemType setLegacyFreeBusyStatus(string $legacyFreeBusyStatus)
 * @method CalendarItemType getLocation()
 * @method CalendarItemType setLocation(string $location)
 * @method CalendarItemType getWhen()
 * @method CalendarItemType setWhen(string $when)
 * @method CalendarItemType getIsMeeting()
 * @method CalendarItemType setIsMeeting(boolean $isMeeting)
 * @method CalendarItemType getIsCancelled()
 * @method CalendarItemType setIsCancelled(boolean $isCancelled)
 * @method CalendarItemType getIsRecurring()
 * @method CalendarItemType setIsRecurring(boolean $isRecurring)
 * @method CalendarItemType getMeetingRequestWasSent()
 * @method CalendarItemType setMeetingRequestWasSent(boolean $meetingRequestWasSent)
 * @method CalendarItemType getIsResponseRequested()
 * @method CalendarItemType setIsResponseRequested(boolean $isResponseRequested)
 * @method CalendarItemType getCalendarItemType()
 * @method CalendarItemType setCalendarItemType(string $calendarItemType)
 * @method CalendarItemType getMyResponseType()
 * @method CalendarItemType setMyResponseType(string $myResponseType)
 * @method CalendarItemType getOrganizer()
 * @method CalendarItemType setOrganizer(SingleRecipientType $organizer)
 * @method CalendarItemType getRequiredAttendees()
 * @method CalendarItemType setRequiredAttendees(array $requiredAttendees)
 * @method CalendarItemType getOptionalAttendees()
 * @method CalendarItemType setOptionalAttendees(array $optionalAttendees)
 * @method CalendarItemType getResources()
 * @method CalendarItemType setResources(array $resources)
 * @method CalendarItemType getConflictingMeetingCount()
 * @method CalendarItemType setConflictingMeetingCount(integer $conflictingMeetingCount)
 * @method CalendarItemType getAdjacentMeetingCount()
 * @method CalendarItemType setAdjacentMeetingCount(integer $adjacentMeetingCount)
 * @method CalendarItemType getConflictingMeetings()
 * @method CalendarItemType setConflictingMeetings(NonEmptyArrayOfAllItemsType $conflictingMeetings)
 * @method CalendarItemType getAdjacentMeetings()
 * @method CalendarItemType setAdjacentMeetings(NonEmptyArrayOfAllItemsType $adjacentMeetings)
 * @method CalendarItemType getDuration()
 * @method CalendarItemType setDuration(string $duration)
 * @method CalendarItemType getTimeZone()
 * @method CalendarItemType setTimeZone(string $timeZone)
 * @method CalendarItemType getAppointmentReplyTime()
 * @method CalendarItemType setAppointmentReplyTime(\DateTime $appointmentReplyTime)
 * @method CalendarItemType getAppointmentSequenceNumber()
 * @method CalendarItemType setAppointmentSequenceNumber(integer $appointmentSequenceNumber)
 * @method CalendarItemType getAppointmentState()
 * @method CalendarItemType setAppointmentState(integer $appointmentState)
 * @method CalendarItemType getRecurrence()
 * @method CalendarItemType setRecurrence(RecurrenceType $recurrence)
 * @method CalendarItemType getFirstOccurrence()
 * @method CalendarItemType setFirstOccurrence(OccurrenceInfoType $firstOccurrence)
 * @method CalendarItemType getLastOccurrence()
 * @method CalendarItemType setLastOccurrence(OccurrenceInfoType $lastOccurrence)
 * @method CalendarItemType getModifiedOccurrences()
 * @method CalendarItemType setModifiedOccurrences(array $modifiedOccurrences)
 * @method CalendarItemType getDeletedOccurrences()
 * @method CalendarItemType setDeletedOccurrences(array $deletedOccurrences)
 * @method CalendarItemType getMeetingTimeZone()
 * @method CalendarItemType setMeetingTimeZone(TimeZoneType $meetingTimeZone)
 * @method CalendarItemType getStartTimeZone()
 * @method CalendarItemType setStartTimeZone(TimeZoneDefinitionType $startTimeZone)
 * @method CalendarItemType getEndTimeZone()
 * @method CalendarItemType setEndTimeZone(TimeZoneDefinitionType $endTimeZone)
 * @method CalendarItemType getConferenceType()
 * @method CalendarItemType setConferenceType(integer $conferenceType)
 * @method CalendarItemType getAllowNewTimeProposal()
 * @method CalendarItemType setAllowNewTimeProposal(boolean $allowNewTimeProposal)
 * @method CalendarItemType getIsOnlineMeeting()
 * @method CalendarItemType setIsOnlineMeeting(boolean $isOnlineMeeting)
 * @method CalendarItemType getMeetingWorkspaceUrl()
 * @method CalendarItemType setMeetingWorkspaceUrl(string $meetingWorkspaceUrl)
 * @method CalendarItemType getNetShowUrl()
 * @method CalendarItemType setNetShowUrl(string $netShowUrl)
 */
class CalendarItemType extends ItemType
{

    /**
     * @property string $uID
     */
    protected $uID = null;

    /**
     * @property \DateTime $recurrenceId
     */
    protected $recurrenceId = null;

    protected $_typeMap = array(
        'recurrenceId' => 'dateTime',
        'dateTimeStamp' => 'dateTime',
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
        'appointmentReplyTime' => 'dateTime',
    );

    /**
     * @property \DateTime $dateTimeStamp
     */
    protected $dateTimeStamp = null;

    /**
     * @property \DateTime $start
     */
    protected $start = null;

    /**
     * @property \DateTime $end
     */
    protected $end = null;

    /**
     * @property \DateTime $originalStart
     */
    protected $originalStart = null;

    /**
     * @property boolean $isAllDayEvent
     */
    protected $isAllDayEvent = null;

    /**
     * @property string $legacyFreeBusyStatus
     */
    protected $legacyFreeBusyStatus = null;

    /**
     * @property string $location
     */
    protected $location = null;

    /**
     * @property string $when
     */
    protected $when = null;

    /**
     * @property boolean $isMeeting
     */
    protected $isMeeting = null;

    /**
     * @property boolean $isCancelled
     */
    protected $isCancelled = null;

    /**
     * @property boolean $isRecurring
     */
    protected $isRecurring = null;

    /**
     * @property boolean $meetingRequestWasSent
     */
    protected $meetingRequestWasSent = null;

    /**
     * @property boolean $isResponseRequested
     */
    protected $isResponseRequested = null;

    /**
     * @property string $calendarItemType
     */
    protected $calendarItemType = null;

    /**
     * @property string $myResponseType
     */
    protected $myResponseType = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\SingleRecipientType $organizer
     */
    protected $organizer = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AttendeeType[] $requiredAttendees
     */
    protected $requiredAttendees = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AttendeeType[] $optionalAttendees
     */
    protected $optionalAttendees = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\AttendeeType[] $resources
     */
    protected $resources = null;

    /**
     * @property integer $conflictingMeetingCount
     */
    protected $conflictingMeetingCount = null;

    /**
     * @property integer $adjacentMeetingCount
     */
    protected $adjacentMeetingCount = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType
     * $conflictingMeetings
     */
    protected $conflictingMeetings = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType
     * $adjacentMeetings
     */
    protected $adjacentMeetings = null;

    /**
     * @property string $duration
     */
    protected $duration = null;

    /**
     * @property string $timeZone
     */
    protected $timeZone = null;

    /**
     * @property \DateTime $appointmentReplyTime
     */
    protected $appointmentReplyTime = null;

    /**
     * @property integer $appointmentSequenceNumber
     */
    protected $appointmentSequenceNumber = null;

    /**
     * @property integer $appointmentState
     */
    protected $appointmentState = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\RecurrenceType $recurrence
     */
    protected $recurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\OccurrenceInfoType $firstOccurrence
     */
    protected $firstOccurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\OccurrenceInfoType $lastOccurrence
     */
    protected $lastOccurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\OccurrenceInfoType[] $modifiedOccurrences
     */
    protected $modifiedOccurrences = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\DeletedOccurrenceInfoType[]
     * $deletedOccurrences
     */
    protected $deletedOccurrences = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TimeZoneType $meetingTimeZone
     */
    protected $meetingTimeZone = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TimeZoneDefinitionType $startTimeZone
     */
    protected $startTimeZone = null;

    /**
     * @property \jamesiarmes\PEWS\API\Type\TimeZoneDefinitionType $endTimeZone
     */
    protected $endTimeZone = null;

    /**
     * @property integer $conferenceType
     */
    protected $conferenceType = null;

    /**
     * @property boolean $allowNewTimeProposal
     */
    protected $allowNewTimeProposal = null;

    /**
     * @property boolean $isOnlineMeeting
     */
    protected $isOnlineMeeting = null;

    /**
     * @property string $meetingWorkspaceUrl
     */
    protected $meetingWorkspaceUrl = null;

    /**
     * @property string $netShowUrl
     */
    protected $netShowUrl = null;
}
