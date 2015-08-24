<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MeetingRequestMessageType
 *
 *
 * XSD Type: MeetingRequestMessageType
 *
 * @method string getMeetingRequestType()
 * @method MeetingRequestMessageType setMeetingRequestType(string $meetingRequestType)
 * @method string getIntendedFreeBusyStatus()
 * @method MeetingRequestMessageType setIntendedFreeBusyStatus(string $intendedFreeBusyStatus)
 * @method \DateTime getStart()
 * @method MeetingRequestMessageType setStart(\DateTime $start)
 * @method \DateTime getEnd()
 * @method MeetingRequestMessageType setEnd(\DateTime $end)
 * @method \DateTime getOriginalStart()
 * @method MeetingRequestMessageType setOriginalStart(\DateTime $originalStart)
 * @method boolean isAllDayEvent()
 * @method boolean getIsAllDayEvent()
 * @method MeetingRequestMessageType setIsAllDayEvent(boolean $isAllDayEvent)
 * @method string getLegacyFreeBusyStatus()
 * @method MeetingRequestMessageType setLegacyFreeBusyStatus(string $legacyFreeBusyStatus)
 * @method string getLocation()
 * @method MeetingRequestMessageType setLocation(string $location)
 * @method string getWhen()
 * @method MeetingRequestMessageType setWhen(string $when)
 * @method boolean isMeeting()
 * @method boolean getIsMeeting()
 * @method MeetingRequestMessageType setIsMeeting(boolean $isMeeting)
 * @method boolean isCancelled()
 * @method boolean getIsCancelled()
 * @method MeetingRequestMessageType setIsCancelled(boolean $isCancelled)
 * @method boolean isRecurring()
 * @method boolean getIsRecurring()
 * @method MeetingRequestMessageType setIsRecurring(boolean $isRecurring)
 * @method boolean isMeetingRequestWasSent()
 * @method boolean getMeetingRequestWasSent()
 * @method MeetingRequestMessageType setMeetingRequestWasSent(boolean $meetingRequestWasSent)
 * @method string getCalendarItemType()
 * @method MeetingRequestMessageType setCalendarItemType(string $calendarItemType)
 * @method string getMyResponseType()
 * @method MeetingRequestMessageType setMyResponseType(string $myResponseType)
 * @method SingleRecipientType getOrganizer()
 * @method MeetingRequestMessageType setOrganizer(SingleRecipientType $organizer)
 * @method MeetingRequestMessageType addRequiredAttendees(AttendeeType $requiredAttendees)
 * @method AttendeeType[] getRequiredAttendees()
 * @method MeetingRequestMessageType setRequiredAttendees(array $requiredAttendees)
 * @method MeetingRequestMessageType addOptionalAttendees(AttendeeType $optionalAttendees)
 * @method AttendeeType[] getOptionalAttendees()
 * @method MeetingRequestMessageType setOptionalAttendees(array $optionalAttendees)
 * @method MeetingRequestMessageType addResources(AttendeeType $resources)
 * @method AttendeeType[] getResources()
 * @method MeetingRequestMessageType setResources(array $resources)
 * @method integer getConflictingMeetingCount()
 * @method MeetingRequestMessageType setConflictingMeetingCount(integer $conflictingMeetingCount)
 * @method integer getAdjacentMeetingCount()
 * @method MeetingRequestMessageType setAdjacentMeetingCount(integer $adjacentMeetingCount)
 * @method NonEmptyArrayOfAllItemsType getConflictingMeetings()
 * @method MeetingRequestMessageType setConflictingMeetings(NonEmptyArrayOfAllItemsType $conflictingMeetings)
 * @method NonEmptyArrayOfAllItemsType getAdjacentMeetings()
 * @method MeetingRequestMessageType setAdjacentMeetings(NonEmptyArrayOfAllItemsType $adjacentMeetings)
 * @method string getDuration()
 * @method MeetingRequestMessageType setDuration(string $duration)
 * @method string getTimeZone()
 * @method MeetingRequestMessageType setTimeZone(string $timeZone)
 * @method \DateTime getAppointmentReplyTime()
 * @method MeetingRequestMessageType setAppointmentReplyTime(\DateTime $appointmentReplyTime)
 * @method integer getAppointmentSequenceNumber()
 * @method MeetingRequestMessageType setAppointmentSequenceNumber(integer $appointmentSequenceNumber)
 * @method integer getAppointmentState()
 * @method MeetingRequestMessageType setAppointmentState(integer $appointmentState)
 * @method RecurrenceType getRecurrence()
 * @method MeetingRequestMessageType setRecurrence(RecurrenceType $recurrence)
 * @method OccurrenceInfoType getFirstOccurrence()
 * @method MeetingRequestMessageType setFirstOccurrence(OccurrenceInfoType $firstOccurrence)
 * @method OccurrenceInfoType getLastOccurrence()
 * @method MeetingRequestMessageType setLastOccurrence(OccurrenceInfoType $lastOccurrence)
 * @method MeetingRequestMessageType addModifiedOccurrences(OccurrenceInfoType $modifiedOccurrences)
 * @method OccurrenceInfoType[] getModifiedOccurrences()
 * @method MeetingRequestMessageType setModifiedOccurrences(array $modifiedOccurrences)
 * @method MeetingRequestMessageType addDeletedOccurrences(DeletedOccurrenceInfoType $deletedOccurrences)
 * @method DeletedOccurrenceInfoType[] getDeletedOccurrences()
 * @method MeetingRequestMessageType setDeletedOccurrences(array $deletedOccurrences)
 * @method TimeZoneType getMeetingTimeZone()
 * @method MeetingRequestMessageType setMeetingTimeZone(TimeZoneType $meetingTimeZone)
 * @method TimeZoneDefinitionType getStartTimeZone()
 * @method MeetingRequestMessageType setStartTimeZone(TimeZoneDefinitionType $startTimeZone)
 * @method TimeZoneDefinitionType getEndTimeZone()
 * @method MeetingRequestMessageType setEndTimeZone(TimeZoneDefinitionType $endTimeZone)
 * @method integer getConferenceType()
 * @method MeetingRequestMessageType setConferenceType(integer $conferenceType)
 * @method boolean isAllowNewTimeProposal()
 * @method boolean getAllowNewTimeProposal()
 * @method MeetingRequestMessageType setAllowNewTimeProposal(boolean $allowNewTimeProposal)
 * @method boolean isOnlineMeeting()
 * @method boolean getIsOnlineMeeting()
 * @method MeetingRequestMessageType setIsOnlineMeeting(boolean $isOnlineMeeting)
 * @method string getMeetingWorkspaceUrl()
 * @method MeetingRequestMessageType setMeetingWorkspaceUrl(string $meetingWorkspaceUrl)
 * @method string getNetShowUrl()
 * @method MeetingRequestMessageType setNetShowUrl(string $netShowUrl)
 */
class MeetingRequestMessageType extends MeetingMessageType
{

    /**
     * @var string
     */
    protected $meetingRequestType = null;

    /**
     * @var string
     */
    protected $intendedFreeBusyStatus = null;

    /**
     * @var \DateTime
     */
    protected $start = null;

    protected $_typeMap = array(
        'start' => 'dateTime',
        'end' => 'dateTime',
        'originalStart' => 'dateTime',
        'appointmentReplyTime' => 'dateTime',
    );

    /**
     * @var \DateTime
     */
    protected $end = null;

    /**
     * @var \DateTime
     */
    protected $originalStart = null;

    /**
     * @var boolean
     */
    protected $isAllDayEvent = null;

    /**
     * @var string
     */
    protected $legacyFreeBusyStatus = null;

    /**
     * @var string
     */
    protected $location = null;

    /**
     * @var string
     */
    protected $when = null;

    /**
     * @var boolean
     */
    protected $isMeeting = null;

    /**
     * @var boolean
     */
    protected $isCancelled = null;

    /**
     * @var boolean
     */
    protected $isRecurring = null;

    /**
     * @var boolean
     */
    protected $meetingRequestWasSent = null;

    /**
     * @var string
     */
    protected $calendarItemType = null;

    /**
     * @var string
     */
    protected $myResponseType = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\SingleRecipientType
     */
    protected $organizer = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AttendeeType[]
     */
    protected $requiredAttendees = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AttendeeType[]
     */
    protected $optionalAttendees = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\AttendeeType[]
     */
    protected $resources = null;

    /**
     * @var integer
     */
    protected $conflictingMeetingCount = null;

    /**
     * @var integer
     */
    protected $adjacentMeetingCount = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType
     */
    protected $conflictingMeetings = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\NonEmptyArrayOfAllItemsType
     */
    protected $adjacentMeetings = null;

    /**
     * @var string
     */
    protected $duration = null;

    /**
     * @var string
     */
    protected $timeZone = null;

    /**
     * @var \DateTime
     */
    protected $appointmentReplyTime = null;

    /**
     * @var integer
     */
    protected $appointmentSequenceNumber = null;

    /**
     * @var integer
     */
    protected $appointmentState = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\RecurrenceType
     */
    protected $recurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\OccurrenceInfoType
     */
    protected $firstOccurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\OccurrenceInfoType
     */
    protected $lastOccurrence = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\OccurrenceInfoType[]
     */
    protected $modifiedOccurrences = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\DeletedOccurrenceInfoType[]
     */
    protected $deletedOccurrences = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TimeZoneType
     */
    protected $meetingTimeZone = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TimeZoneDefinitionType
     */
    protected $startTimeZone = null;

    /**
     * @var \jamesiarmes\PEWS\API\Type\TimeZoneDefinitionType
     */
    protected $endTimeZone = null;

    /**
     * @var integer
     */
    protected $conferenceType = null;

    /**
     * @var boolean
     */
    protected $allowNewTimeProposal = null;

    /**
     * @var boolean
     */
    protected $isOnlineMeeting = null;

    /**
     * @var string
     */
    protected $meetingWorkspaceUrl = null;

    /**
     * @var string
     */
    protected $netShowUrl = null;
}
