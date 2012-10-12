<?php
/**
 * Definition of the MeetingMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the MeetingMessageType type
 */
class EWSType_MeetingMessageType extends EWSType
{
    /**
     * AssociatedCalendarItemId property
     *
     * @var EWSType_ItemIdType
     */
    public $AssociatedCalendarItemId;

    /**
     * IsDelegated property
     *
     * @var boolean
     */
    public $IsDelegated;

    /**
     * IsOutOfDate property
     *
     * @var boolean
     */
    public $IsOutOfDate;

    /**
     * HasBeenProcessed property
     *
     * @var boolean
     */
    public $HasBeenProcessed;

    /**
     * ResponseType property
     *
     * @var EWSType_ResponseTypeType
     */
    public $ResponseType;

    /**
     * UID property
     *
     * @var string
     */
    public $UID;

    /**
     * RecurrenceId property
     *
     * @var EWSType_dateTime
     */
    public $RecurrenceId;

    /**
     * DateTimeStamp property
     *
     * @var EWSType_dateTime
     */
    public $DateTimeStamp;
}
