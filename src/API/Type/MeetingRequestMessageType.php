<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MeetingRequestMessageType
 *
 *
 * XSD Type: MeetingRequestMessageType
 *
 * @method MeetingRequestMessageType getMeetingRequestType()
 * @method MeetingRequestMessageType setMeetingRequestType(string $meetingRequestType)
 * @method MeetingRequestMessageType getIntendedFreeBusyStatus()
 * @method MeetingRequestMessageType setIntendedFreeBusyStatus(string $intendedFreeBusyStatus)
 * @method MeetingRequestMessageType getStart()
 * @method MeetingRequestMessageType setStart(\DateTime $start)
 * @method MeetingRequestMessageType getEnd()
 * @method MeetingRequestMessageType setEnd(\DateTime $end)
 * @method MeetingRequestMessageType getOriginalStart()
 * @method MeetingRequestMessageType setOriginalStart(\DateTime $originalStart)
 * @method MeetingRequestMessageType getIsAllDayEvent()
 * @method MeetingRequestMessageType setIsAllDayEvent(boolean $isAllDayEvent)
 * @method MeetingRequestMessageType getLegacyFreeBusyStatus()
 * @method MeetingRequestMessageType setLegacyFreeBusyStatus(string $legacyFreeBusyStatus)
 * @method MeetingRequestMessageType getLocation()
 * @method MeetingRequestMessageType setLocation(string $location)
 * @method MeetingRequestMessageType getWhen()
 * @method MeetingRequestMessageType setWhen(string $when)
 * @method MeetingRequestMessageType getIsMeeting()
 * @method MeetingRequestMessageType setIsMeeting(boolean $isMeeting)
 * @method MeetingRequestMessageType getIsCancelled()
 * @method MeetingRequestMessageType setIsCancelled(boolean $isCancelled)
 * @method MeetingRequestMessageType getIsRecurring()
 * @method MeetingRequestMessageType setIsRecurring(boolean $isRecurring)
 * @method MeetingRequestMessageType getMeetingRequestWasSent()
 * @method MeetingRequestMessageType setMeetingRequestWasSent(boolean $meetingRequestWasSent)
 * @method MeetingRequestMessageType getCalendarItemType()
 * @method MeetingRequestMessageType setCalendarItemType(string $calendarItemType)
 * @method MeetingRequestMessageType getMyResponseType()
 * @method MeetingRequestMessageType setMyResponseType(string $myResponseType)
 * @method MeetingRequestMessageType getOrganizer()
 * @method MeetingRequestMessageType setOrganizer(SingleRecipientType $organizer)
 * @method MeetingRequestMessageType getRequiredAttendees()
 * @method MeetingRequestMessageType setRequiredAttendees(array $requiredAttendees)
 * @method MeetingRequestMessageType getOptionalAttendees()
 * @method MeetingRequestMessageType setOptionalAttendees(array $optionalAttendees)
 * @method MeetingRequestMessageType getResources()
 * @method MeetingRequestMessageType setResources(array $resources)
 * @method MeetingRequestMessageType getConflictingMeetingCount()
 * @method MeetingRequestMessageType setConflictingMeetingCount(integer $conflictingMeetingCount)
 * @method MeetingRequestMessageType getAdjacentMeetingCount()
 * @method MeetingRequestMessageType setAdjacentMeetingCount(integer $adjacentMeetingCount)
 * @method MeetingRequestMessageType getConflictingMeetings()
 * @method MeetingRequestMessageType setConflictingMeetings(NonEmptyArrayOfAllItemsType $conflictingMeetings)
 * @method MeetingRequestMessageType getAdjacentMeetings()
 * @method MeetingRequestMessageType setAdjacentMeetings(NonEmptyArrayOfAllItemsType $adjacentMeetings)
 * @method MeetingRequestMessageType getDuration()
 * @method MeetingRequestMessageType setDuration(string $duration)
 * @method MeetingRequestMessageType getTimeZone()
 * @method MeetingRequestMessageType setTimeZone(string $timeZone)
 * @method MeetingRequestMessageType getAppointmentReplyTime()
 * @method MeetingRequestMessageType setAppointmentReplyTime(\DateTime $appointmentReplyTime)
 * @method MeetingRequestMessageType getAppointmentSequenceNumber()
 * @method MeetingRequestMessageType setAppointmentSequenceNumber(integer $appointmentSequenceNumber)
 * @method MeetingRequestMessageType getAppointmentState()
 * @method MeetingRequestMessageType setAppointmentState(integer $appointmentState)
 * @method MeetingRequestMessageType getRecurrence()
 * @method MeetingRequestMessageType setRecurrence(RecurrenceType $recurrence)
 * @method MeetingRequestMessageType getFirstOccurrence()
 * @method MeetingRequestMessageType setFirstOccurrence(OccurrenceInfoType $firstOccurrence)
 * @method MeetingRequestMessageType getLastOccurrence()
 * @method MeetingRequestMessageType setLastOccurrence(OccurrenceInfoType $lastOccurrence)
 * @method MeetingRequestMessageType getModifiedOccurrences()
 * @method MeetingRequestMessageType setModifiedOccurrences(array $modifiedOccurrences)
 * @method MeetingRequestMessageType getDeletedOccurrences()
 * @method MeetingRequestMessageType setDeletedOccurrences(array $deletedOccurrences)
 * @method MeetingRequestMessageType getMeetingTimeZone()
 * @method MeetingRequestMessageType setMeetingTimeZone(TimeZoneType $meetingTimeZone)
 * @method MeetingRequestMessageType getStartTimeZone()
 * @method MeetingRequestMessageType setStartTimeZone(TimeZoneDefinitionType $startTimeZone)
 * @method MeetingRequestMessageType getEndTimeZone()
 * @method MeetingRequestMessageType setEndTimeZone(TimeZoneDefinitionType $endTimeZone)
 * @method MeetingRequestMessageType getConferenceType()
 * @method MeetingRequestMessageType setConferenceType(integer $conferenceType)
 * @method MeetingRequestMessageType getAllowNewTimeProposal()
 * @method MeetingRequestMessageType setAllowNewTimeProposal(boolean $allowNewTimeProposal)
 * @method MeetingRequestMessageType getIsOnlineMeeting()
 * @method MeetingRequestMessageType setIsOnlineMeeting(boolean $isOnlineMeeting)
 * @method MeetingRequestMessageType getMeetingWorkspaceUrl()
 * @method MeetingRequestMessageType setMeetingWorkspaceUrl(string $meetingWorkspaceUrl)
 * @method MeetingRequestMessageType getNetShowUrl()
 * @method MeetingRequestMessageType setNetShowUrl(string $netShowUrl)
 */
class MeetingRequestMessageType extends MeetingMessageType
{

    /**
     * @property string $meetingRequestType
     */
    protected $meetingRequestType = null;

    /**
     * @property string $intendedFreeBusyStatus
     */
    protected $intendedFreeBusyStatus = null;

    /**
     * @property \DateTime $start
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
        'appointmentReplyTime' => 'dateTime',
    );

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

