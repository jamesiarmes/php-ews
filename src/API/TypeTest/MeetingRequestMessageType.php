<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MeetingRequestMessageType
 *
 *
 * XSD Type: MeetingRequestMessageType
 *
 * @method MeetingRequestMessageType getMeetingRequestType()
 * @method MeetingRequestMessageType setMeetingRequestType($meetingRequestType)
 * @method MeetingRequestMessageType getIntendedFreeBusyStatus()
 * @method MeetingRequestMessageType
 * setIntendedFreeBusyStatus($intendedFreeBusyStatus)
 * @method MeetingRequestMessageType getStart()
 * @method MeetingRequestMessageType setStart($start)
 * @method MeetingRequestMessageType getEnd()
 * @method MeetingRequestMessageType setEnd($end)
 * @method MeetingRequestMessageType getOriginalStart()
 * @method MeetingRequestMessageType setOriginalStart($originalStart)
 * @method MeetingRequestMessageType getIsAllDayEvent()
 * @method MeetingRequestMessageType setIsAllDayEvent($isAllDayEvent)
 * @method MeetingRequestMessageType getLegacyFreeBusyStatus()
 * @method MeetingRequestMessageType setLegacyFreeBusyStatus($legacyFreeBusyStatus)
 * @method MeetingRequestMessageType getLocation()
 * @method MeetingRequestMessageType setLocation($location)
 * @method MeetingRequestMessageType getWhen()
 * @method MeetingRequestMessageType setWhen($when)
 * @method MeetingRequestMessageType getIsMeeting()
 * @method MeetingRequestMessageType setIsMeeting($isMeeting)
 * @method MeetingRequestMessageType getIsCancelled()
 * @method MeetingRequestMessageType setIsCancelled($isCancelled)
 * @method MeetingRequestMessageType getIsRecurring()
 * @method MeetingRequestMessageType setIsRecurring($isRecurring)
 * @method MeetingRequestMessageType getMeetingRequestWasSent()
 * @method MeetingRequestMessageType
 * setMeetingRequestWasSent($meetingRequestWasSent)
 * @method MeetingRequestMessageType getCalendarItemType()
 * @method MeetingRequestMessageType setCalendarItemType($calendarItemType)
 * @method MeetingRequestMessageType getMyResponseType()
 * @method MeetingRequestMessageType setMyResponseType($myResponseType)
 * @method MeetingRequestMessageType getOrganizer()
 * @method MeetingRequestMessageType setOrganizer($organizer)
 * @method MeetingRequestMessageType getRequiredAttendees()
 * @method MeetingRequestMessageType setRequiredAttendees($requiredAttendees)
 * @method MeetingRequestMessageType getOptionalAttendees()
 * @method MeetingRequestMessageType setOptionalAttendees($optionalAttendees)
 * @method MeetingRequestMessageType getResources()
 * @method MeetingRequestMessageType setResources($resources)
 * @method MeetingRequestMessageType getConflictingMeetingCount()
 * @method MeetingRequestMessageType
 * setConflictingMeetingCount($conflictingMeetingCount)
 * @method MeetingRequestMessageType getAdjacentMeetingCount()
 * @method MeetingRequestMessageType setAdjacentMeetingCount($adjacentMeetingCount)
 * @method MeetingRequestMessageType getConflictingMeetings()
 * @method MeetingRequestMessageType setConflictingMeetings($conflictingMeetings)
 * @method MeetingRequestMessageType getAdjacentMeetings()
 * @method MeetingRequestMessageType setAdjacentMeetings($adjacentMeetings)
 * @method MeetingRequestMessageType getDuration()
 * @method MeetingRequestMessageType setDuration($duration)
 * @method MeetingRequestMessageType getTimeZone()
 * @method MeetingRequestMessageType setTimeZone($timeZone)
 * @method MeetingRequestMessageType getAppointmentReplyTime()
 * @method MeetingRequestMessageType setAppointmentReplyTime($appointmentReplyTime)
 * @method MeetingRequestMessageType getAppointmentSequenceNumber()
 * @method MeetingRequestMessageType
 * setAppointmentSequenceNumber($appointmentSequenceNumber)
 * @method MeetingRequestMessageType getAppointmentState()
 * @method MeetingRequestMessageType setAppointmentState($appointmentState)
 * @method MeetingRequestMessageType getRecurrence()
 * @method MeetingRequestMessageType setRecurrence($recurrence)
 * @method MeetingRequestMessageType getFirstOccurrence()
 * @method MeetingRequestMessageType setFirstOccurrence($firstOccurrence)
 * @method MeetingRequestMessageType getLastOccurrence()
 * @method MeetingRequestMessageType setLastOccurrence($lastOccurrence)
 * @method MeetingRequestMessageType getModifiedOccurrences()
 * @method MeetingRequestMessageType setModifiedOccurrences($modifiedOccurrences)
 * @method MeetingRequestMessageType getDeletedOccurrences()
 * @method MeetingRequestMessageType setDeletedOccurrences($deletedOccurrences)
 * @method MeetingRequestMessageType getMeetingTimeZone()
 * @method MeetingRequestMessageType setMeetingTimeZone($meetingTimeZone)
 * @method MeetingRequestMessageType getStartTimeZone()
 * @method MeetingRequestMessageType setStartTimeZone($startTimeZone)
 * @method MeetingRequestMessageType getEndTimeZone()
 * @method MeetingRequestMessageType setEndTimeZone($endTimeZone)
 * @method MeetingRequestMessageType getConferenceType()
 * @method MeetingRequestMessageType setConferenceType($conferenceType)
 * @method MeetingRequestMessageType getAllowNewTimeProposal()
 * @method MeetingRequestMessageType setAllowNewTimeProposal($allowNewTimeProposal)
 * @method MeetingRequestMessageType getIsOnlineMeeting()
 * @method MeetingRequestMessageType setIsOnlineMeeting($isOnlineMeeting)
 * @method MeetingRequestMessageType getMeetingWorkspaceUrl()
 * @method MeetingRequestMessageType setMeetingWorkspaceUrl($meetingWorkspaceUrl)
 * @method MeetingRequestMessageType getNetShowUrl()
 * @method MeetingRequestMessageType setNetShowUrl($netShowUrl)
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
     * @property \jamesiarmes\PEWS\API\TypeTest\SingleRecipientType $organizer
     */
    protected $organizer = null;

    /**
     * @property array $requiredAttendees
     */
    protected $requiredAttendees = null;

    /**
     * @property array $optionalAttendees
     */
    protected $optionalAttendees = null;

    /**
     * @property array $resources
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
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfAllItemsType
     * $conflictingMeetings
     */
    protected $conflictingMeetings = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\NonEmptyArrayOfAllItemsType
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
     * @property \jamesiarmes\PEWS\API\TypeTest\RecurrenceType $recurrence
     */
    protected $recurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\OccurrenceInfoType $firstOccurrence
     */
    protected $firstOccurrence = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\OccurrenceInfoType $lastOccurrence
     */
    protected $lastOccurrence = null;

    /**
     * @property array $modifiedOccurrences
     */
    protected $modifiedOccurrences = null;

    /**
     * @property array $deletedOccurrences
     */
    protected $deletedOccurrences = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TimeZoneType $meetingTimeZone
     */
    protected $meetingTimeZone = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TimeZoneDefinitionType $startTimeZone
     */
    protected $startTimeZone = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\TimeZoneDefinitionType $endTimeZone
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

