<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing CalendarItemType
 *
 *
 * XSD Type: CalendarItemType
 *
 * @method CalendarItemType getUID()
 * @method CalendarItemType setUID($uID)
 * @method CalendarItemType getRecurrenceId()
 * @method CalendarItemType setRecurrenceId($recurrenceId)
 * @method CalendarItemType getDateTimeStamp()
 * @method CalendarItemType setDateTimeStamp($dateTimeStamp)
 * @method CalendarItemType getStart()
 * @method CalendarItemType setStart($start)
 * @method CalendarItemType getEnd()
 * @method CalendarItemType setEnd($end)
 * @method CalendarItemType getOriginalStart()
 * @method CalendarItemType setOriginalStart($originalStart)
 * @method CalendarItemType getIsAllDayEvent()
 * @method CalendarItemType setIsAllDayEvent($isAllDayEvent)
 * @method CalendarItemType getLegacyFreeBusyStatus()
 * @method CalendarItemType setLegacyFreeBusyStatus($legacyFreeBusyStatus)
 * @method CalendarItemType getLocation()
 * @method CalendarItemType setLocation($location)
 * @method CalendarItemType getWhen()
 * @method CalendarItemType setWhen($when)
 * @method CalendarItemType getIsMeeting()
 * @method CalendarItemType setIsMeeting($isMeeting)
 * @method CalendarItemType getIsCancelled()
 * @method CalendarItemType setIsCancelled($isCancelled)
 * @method CalendarItemType getIsRecurring()
 * @method CalendarItemType setIsRecurring($isRecurring)
 * @method CalendarItemType getMeetingRequestWasSent()
 * @method CalendarItemType setMeetingRequestWasSent($meetingRequestWasSent)
 * @method CalendarItemType getIsResponseRequested()
 * @method CalendarItemType setIsResponseRequested($isResponseRequested)
 * @method CalendarItemType getCalendarItemType()
 * @method CalendarItemType setCalendarItemType($calendarItemType)
 * @method CalendarItemType getMyResponseType()
 * @method CalendarItemType setMyResponseType($myResponseType)
 * @method CalendarItemType getOrganizer()
 * @method CalendarItemType setOrganizer($organizer)
 * @method CalendarItemType getRequiredAttendees()
 * @method CalendarItemType setRequiredAttendees($requiredAttendees)
 * @method CalendarItemType getOptionalAttendees()
 * @method CalendarItemType setOptionalAttendees($optionalAttendees)
 * @method CalendarItemType getResources()
 * @method CalendarItemType setResources($resources)
 * @method CalendarItemType getConflictingMeetingCount()
 * @method CalendarItemType setConflictingMeetingCount($conflictingMeetingCount)
 * @method CalendarItemType getAdjacentMeetingCount()
 * @method CalendarItemType setAdjacentMeetingCount($adjacentMeetingCount)
 * @method CalendarItemType getConflictingMeetings()
 * @method CalendarItemType setConflictingMeetings($conflictingMeetings)
 * @method CalendarItemType getAdjacentMeetings()
 * @method CalendarItemType setAdjacentMeetings($adjacentMeetings)
 * @method CalendarItemType getDuration()
 * @method CalendarItemType setDuration($duration)
 * @method CalendarItemType getTimeZone()
 * @method CalendarItemType setTimeZone($timeZone)
 * @method CalendarItemType getAppointmentReplyTime()
 * @method CalendarItemType setAppointmentReplyTime($appointmentReplyTime)
 * @method CalendarItemType getAppointmentSequenceNumber()
 * @method CalendarItemType
 * setAppointmentSequenceNumber($appointmentSequenceNumber)
 * @method CalendarItemType getAppointmentState()
 * @method CalendarItemType setAppointmentState($appointmentState)
 * @method CalendarItemType getRecurrence()
 * @method CalendarItemType setRecurrence($recurrence)
 * @method CalendarItemType getFirstOccurrence()
 * @method CalendarItemType setFirstOccurrence($firstOccurrence)
 * @method CalendarItemType getLastOccurrence()
 * @method CalendarItemType setLastOccurrence($lastOccurrence)
 * @method CalendarItemType getModifiedOccurrences()
 * @method CalendarItemType setModifiedOccurrences($modifiedOccurrences)
 * @method CalendarItemType getDeletedOccurrences()
 * @method CalendarItemType setDeletedOccurrences($deletedOccurrences)
 * @method CalendarItemType getMeetingTimeZone()
 * @method CalendarItemType setMeetingTimeZone($meetingTimeZone)
 * @method CalendarItemType getStartTimeZone()
 * @method CalendarItemType setStartTimeZone($startTimeZone)
 * @method CalendarItemType getEndTimeZone()
 * @method CalendarItemType setEndTimeZone($endTimeZone)
 * @method CalendarItemType getConferenceType()
 * @method CalendarItemType setConferenceType($conferenceType)
 * @method CalendarItemType getAllowNewTimeProposal()
 * @method CalendarItemType setAllowNewTimeProposal($allowNewTimeProposal)
 * @method CalendarItemType getIsOnlineMeeting()
 * @method CalendarItemType setIsOnlineMeeting($isOnlineMeeting)
 * @method CalendarItemType getMeetingWorkspaceUrl()
 * @method CalendarItemType setMeetingWorkspaceUrl($meetingWorkspaceUrl)
 * @method CalendarItemType getNetShowUrl()
 * @method CalendarItemType setNetShowUrl($netShowUrl)
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

