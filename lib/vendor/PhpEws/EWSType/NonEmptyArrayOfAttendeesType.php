<?php
/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 */
class NonEmptyArrayOfAttendeesType extends EWSType
{
    /**
     * Attendee property
     *
     * @var EWSType_AttendeeType
     */
    public $Attendee;
}
