<?php

namespace jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing MeetingMessageType
 *
 *
 * XSD Type: MeetingMessageType
 *
 * @method MeetingMessageType getAssociatedCalendarItemId()
 * @method MeetingMessageType
 * setAssociatedCalendarItemId($associatedCalendarItemId)
 * @method MeetingMessageType getIsDelegated()
 * @method MeetingMessageType setIsDelegated($isDelegated)
 * @method MeetingMessageType getIsOutOfDate()
 * @method MeetingMessageType setIsOutOfDate($isOutOfDate)
 * @method MeetingMessageType getHasBeenProcessed()
 * @method MeetingMessageType setHasBeenProcessed($hasBeenProcessed)
 * @method MeetingMessageType getResponseType()
 * @method MeetingMessageType setResponseType($responseType)
 * @method MeetingMessageType getUID()
 * @method MeetingMessageType setUID($uID)
 * @method MeetingMessageType getRecurrenceId()
 * @method MeetingMessageType setRecurrenceId($recurrenceId)
 * @method MeetingMessageType getDateTimeStamp()
 * @method MeetingMessageType setDateTimeStamp($dateTimeStamp)
 */
class MeetingMessageType extends MessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\ItemIdType $associatedCalendarItemId
     */
    protected $associatedCalendarItemId = null;

    /**
     * @property boolean $isDelegated
     */
    protected $isDelegated = null;

    /**
     * @property boolean $isOutOfDate
     */
    protected $isOutOfDate = null;

    /**
     * @property boolean $hasBeenProcessed
     */
    protected $hasBeenProcessed = null;

    /**
     * @property string $responseType
     */
    protected $responseType = null;

    /**
     * @property string $uID
     */
    protected $uID = null;

    /**
     * @property \DateTime $recurrenceId
     */
    protected $recurrenceId = null;

    /**
     * @property \DateTime $dateTimeStamp
     */
    protected $dateTimeStamp = null;


}

