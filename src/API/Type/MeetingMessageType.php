<?php

namespace jamesiarmes\PEWS\API\Type;

/**
 * Class representing MeetingMessageType
 *
 *
 * XSD Type: MeetingMessageType
 *
 * @method ItemIdType getAssociatedCalendarItemId()
 * @method MeetingMessageType setAssociatedCalendarItemId(ItemIdType $associatedCalendarItemId)
 * @method boolean isDelegated()
 * @method boolean getIsDelegated()
 * @method MeetingMessageType setIsDelegated(boolean $isDelegated)
 * @method boolean isOutOfDate()
 * @method boolean getIsOutOfDate()
 * @method MeetingMessageType setIsOutOfDate(boolean $isOutOfDate)
 * @method boolean isHasBeenProcessed()
 * @method boolean getHasBeenProcessed()
 * @method MeetingMessageType setHasBeenProcessed(boolean $hasBeenProcessed)
 * @method string getResponseType()
 * @method MeetingMessageType setResponseType(string $responseType)
 * @method string getUID()
 * @method MeetingMessageType setUID(string $uID)
 * @method \DateTime getRecurrenceId()
 * @method MeetingMessageType setRecurrenceId(\DateTime $recurrenceId)
 * @method \DateTime getDateTimeStamp()
 * @method MeetingMessageType setDateTimeStamp(\DateTime $dateTimeStamp)
 */
class MeetingMessageType extends MessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\ItemIdType
     */
    protected $associatedCalendarItemId = null;

    /**
     * @var boolean
     */
    protected $isDelegated = null;

    /**
     * @var boolean
     */
    protected $isOutOfDate = null;

    /**
     * @var boolean
     */
    protected $hasBeenProcessed = null;

    /**
     * @var string
     */
    protected $responseType = null;

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
    );

    /**
     * @var \DateTime
     */
    protected $dateTimeStamp = null;
}
