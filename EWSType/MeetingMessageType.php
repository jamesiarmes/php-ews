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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'AssociatedCalendarItemId',
                'required' => false,
                'type' => 'ItemIdType',
            ),
            array(
                'name' => 'IsDelegated',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsOutOfDate',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'HasBeenProcessed',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'ResponseType',
                'required' => false,
                'type' => 'ResponseTypeType',
            ),
            array(
                'name' => 'UID',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'RecurrenceId',
                'required' => false,
                'type' => 'dateTime',
            ),
            array(
                'name' => 'DateTimeStamp',
                'required' => false,
                'type' => 'dateTime',
            ),
        );
    }
}
