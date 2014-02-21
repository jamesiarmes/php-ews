<?php
/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 */
class NonEmptyArrayOfAttendeesType extends PhpEws\EWSType
{
    /**
     * Attendee property
     *
     * @var AttendeeType
     */
    public $Attendee;
}
