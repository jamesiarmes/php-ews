<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the MeetingMessageType type
 */
class MeetingMessageType extends DataType
{
    /**
     * AssociatedCalendarItemId property
     *
     * @var ItemIdType
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
     * @var ResponseTypeType
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
     * @var \DateTime
     */
    public $RecurrenceId;

    /**
     * DateTimeStamp property
     *
     * @var \DateTime
     */
    public $DateTimeStamp;
}
