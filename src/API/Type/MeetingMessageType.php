<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MeetingMessageType
 *
 *
 * XSD Type: MeetingMessageType
 *
 * @method MeetingMessageType getAssociatedCalendarItemId()
 * @method MeetingMessageType setAssociatedCalendarItemId(ItemIdType $associatedCalendarItemId)
 * @method MeetingMessageType getIsDelegated()
 * @method MeetingMessageType setIsDelegated(boolean $isDelegated)
 * @method MeetingMessageType getIsOutOfDate()
 * @method MeetingMessageType setIsOutOfDate(boolean $isOutOfDate)
 * @method MeetingMessageType getHasBeenProcessed()
 * @method MeetingMessageType setHasBeenProcessed(boolean $hasBeenProcessed)
 * @method MeetingMessageType getResponseType()
 * @method MeetingMessageType setResponseType(string $responseType)
 * @method MeetingMessageType getUID()
 * @method MeetingMessageType setUID(string $uID)
 * @method MeetingMessageType getRecurrenceId()
 * @method MeetingMessageType setRecurrenceId(\DateTime $recurrenceId)
 * @method MeetingMessageType getDateTimeStamp()
 * @method MeetingMessageType setDateTimeStamp(\DateTime $dateTimeStamp)
 */
class MeetingMessageType extends MessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\ItemIdType $associatedCalendarItemId
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

    protected $_typeMap = array(
        'recurrenceId' => 'dateTime',
        'dateTimeStamp' => 'dateTime',
    );

    /**
     * @property \DateTime $dateTimeStamp
     */
    protected $dateTimeStamp = null;


}

