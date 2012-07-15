<?php
/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 */
class EWSType_NonEmptyArrayOfAttendeesType extends EWSType
{
    /**
     * Attendee property
     *
     * @var EWSType_AttendeeType
     */
    public $Attendee;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'Attendee',
                'required' => false,
                'type' => 'AttendeeType',
            ),
        );
    }
}
