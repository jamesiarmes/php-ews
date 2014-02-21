<?php
/**
 * Definition of the MeetingMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the MeetingMessageType type
 */
class MeetingMessageType extends PhpEws\EWSType
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
     * @var dateTime
     */
    public $RecurrenceId;

    /**
     * DateTimeStamp property
     *
     * @var dateTime
     */
    public $DateTimeStamp;
}
