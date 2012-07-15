<?php
/**
 * Definition of the CalendarEventDetails type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the CalendarEventDetails type
 */
class EWSType_CalendarEventDetails extends EWSType
{
    /**
     * ID property
     *
     * @var string
     */
    public $ID;

    /**
     * Subject property
     *
     * @var string
     */
    public $Subject;

    /**
     * Location property
     *
     * @var string
     */
    public $Location;

    /**
     * IsMeeting property
     *
     * @var boolean
     */
    public $IsMeeting;

    /**
     * IsRecurring property
     *
     * @var boolean
     */
    public $IsRecurring;

    /**
     * IsException property
     *
     * @var boolean
     */
    public $IsException;

    /**
     * IsReminderSet property
     *
     * @var boolean
     */
    public $IsReminderSet;

    /**
     * IsPrivate property
     *
     * @var boolean
     */
    public $IsPrivate;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'ID',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Subject',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'Location',
                'required' => false,
                'type' => 'string',
            ),
            array(
                'name' => 'IsMeeting',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsRecurring',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsException',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsReminderSet',
                'required' => false,
                'type' => 'boolean',
            ),
            array(
                'name' => 'IsPrivate',
                'required' => false,
                'type' => 'boolean',
            ),
        );
    }
}
