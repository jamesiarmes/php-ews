<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing CalendarItemType
 *
 *
 * XSD Type: CalendarItemType
 *
 * @method string getUID()
 * @method CalendarItemType setUID(string $uID)
 * @method \DateTime getRecurrenceId()
 * @method CalendarItemType setRecurrenceId(\DateTime $recurrenceId)
 * @method \DateTime getDateTimeStamp()
 * @method CalendarItemType setDateTimeStamp(\DateTime $dateTimeStamp)
 * @method \DateTime getStart()
 * @method CalendarItemType setStart(\DateTime $start)
 * @method \DateTime getEnd()
 * @method CalendarItemType setEnd(\DateTime $end)
 * @method \DateTime getOriginalStart()
 * @method CalendarItemType setOriginalStart(\DateTime $originalStart)
 * @method boolean isAllDayEvent()
 * @method boolean getIsAllDayEvent()
 * @method CalendarItemType setIsAllDayEvent(boolean $isAllDayEvent)
 * @method string getLegacyFreeBusyStatus()
 * @method CalendarItemType setLegacyFreeBusyStatus(string $legacyFreeBusyStatus)
 * @method string getLocation()
 * @method CalendarItemType setLocation(string $location)
 * @method string getWhen()
 * @method CalendarItemType setWhen(string $when)
 * @method boolean isMeeting()
 * @method boolean getIsMeeting()
 * @method CalendarItemType setIsMeeting(boolean $isMeeting)
 * @method boolean isCancelled()
 * @method boolean getIsCancelled()
 * @method CalendarItemType setIsCancelled(boolean $isCancelled)
 * @method boolean isRecurring()
 * @method boolean getIsRecurring()
 * @method CalendarItemType setIsRecurring(boolean $isRecurring)
 * @method boolean isMeetingRequestWasSent()
 * @method boolean getMeetingRequestWasSent()
 * @method CalendarItemType setMeetingRequestWasSent(boolean $meetingRequestWasSent)
 * @method boolean isResponseRequested()
 * @method boolean getIsResponseRequested()
 * @method CalendarItemType setIsResponseRequested(boolean $isResponseRequested)
 * @method string getCalendarItemType()
 * @method CalendarItemType setCalendarItemType(string $calendarItemType)
 * @method string getMyResponseType()
 * @method CalendarItemType setMyResponseType(string $myResponseType)
 * @method SingleRecipientType getOrganizer()
 * @method CalendarItemType setOrganizer(SingleRecipientType $organizer)
 * @method CalendarItemType addRequiredAttendees(AttendeeType $requiredAttendees)
 * @method AttendeeType[] getRequiredAttendees()
 * @method CalendarItemType setRequiredAttendees(array $requiredAttendees)
 * @method CalendarItemType addOptionalAttendees(AttendeeType $optionalAttendees)
 * @method AttendeeType[] getOptionalAttendees()
 * @method CalendarItemType setOptionalAttendees(array $optionalAttendees)
 * @method CalendarItemType addResources(AttendeeType $resources)
 * @method AttendeeType[] getResources()
 * @method CalendarItemType setResources(array $resources)
 * @method integer getConflictingMeetingCount()
 * @method CalendarItemType setConflictingMeetingCount(integer $conflictingMeetingCount)
 * @method integer getAdjacentMeetingCount()
 * @method CalendarItemType setAdjacentMeetingCount(integer $adjacentMeetingCount)
 * @method NonEmptyArrayOfAllItemsType getConflictingMeetings()
 * @method CalendarItemType setConflictingMeetings(NonEmptyArrayOfAllItemsType $conflictingMeetings)
 * @method NonEmptyArrayOfAllItemsType getAdjacentMeetings()
 * @method CalendarItemType setAdjacentMeetings(NonEmptyArrayOfAllItemsType $adjacentMeetings)
 * @method string getDuration()
 * @method CalendarItemType setDuration(string $duration)
 * @method string getTimeZone()
 * @method CalendarItemType setTimeZone(string $timeZone)
 * @method \DateTime getAppointmentReplyTime()
 * @method CalendarItemType setAppointmentReplyTime(\DateTime $appointmentReplyTime)
 * @method integer getAppointmentSequenceNumber()
 * @method CalendarItemType setAppointmentSequenceNumber(integer $appointmentSequenceNumber)
 * @method integer getAppointmentState()
 * @method CalendarItemType setAppointmentState(integer $appointmentState)
 * @method RecurrenceType getRecurrence()
 * @method CalendarItemType setRecurrence(RecurrenceType $recurrence)
 * @method OccurrenceInfoType getFirstOccurrence()
 * @method CalendarItemType setFirstOccurrence(OccurrenceInfoType $firstOccurrence)
 * @method OccurrenceInfoType getLastOccurrence()
 * @method CalendarItemType setLastOccurrence(OccurrenceInfoType $lastOccurrence)
 * @method CalendarItemType addModifiedOccurrences(OccurrenceInfoType $modifiedOccurrences)
 * @method OccurrenceInfoType[] getModifiedOccurrences()
 * @method CalendarItemType setModifiedOccurrences(array $modifiedOccurrences)
 * @method CalendarItemType addDeletedOccurrences(DeletedOccurrenceInfoType $deletedOccurrences)
 * @method DeletedOccurrenceInfoType[] getDeletedOccurrences()
 * @method CalendarItemType setDeletedOccurrences(array $deletedOccurrences)
 * @method TimeZoneType getMeetingTimeZone()
 * @method CalendarItemType setMeetingTimeZone(TimeZoneType $meetingTimeZone)
 * @method TimeZoneDefinitionType getStartTimeZone()
 * @method CalendarItemType setStartTimeZone(TimeZoneDefinitionType $startTimeZone)
 * @method TimeZoneDefinitionType getEndTimeZone()
 * @method CalendarItemType setEndTimeZone(TimeZoneDefinitionType $endTimeZone)
 * @method integer getConferenceType()
 * @method CalendarItemType setConferenceType(integer $conferenceType)
 * @method boolean isAllowNewTimeProposal()
 * @method boolean getAllowNewTimeProposal()
 * @method CalendarItemType setAllowNewTimeProposal(boolean $allowNewTimeProposal)
 * @method boolean isOnlineMeeting()
 * @method boolean getIsOnlineMeeting()
 * @method CalendarItemType setIsOnlineMeeting(boolean $isOnlineMeeting)
 * @method string getMeetingWorkspaceUrl()
 * @method CalendarItemType setMeetingWorkspaceUrl(string $meetingWorkspaceUrl)
 * @method string getNetShowUrl()
 * @method CalendarItemType setNetShowUrl(string $netShowUrl)
 */
class CalendarItemType extends ItemType
{

    /**
     * @var string
     */
    protected $uID = null;

    /**
     * @var \DateTime
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
     * @var \DateTime
     */
    protected $dateTimeStamp = null;

    /**
     * @var \DateTime
     */
    protected $start = null;

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
     * @var boolean
     */
    protected $isResponseRequested = null;

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
