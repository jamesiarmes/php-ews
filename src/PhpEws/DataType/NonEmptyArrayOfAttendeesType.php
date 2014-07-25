<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the NonEmptyArrayOfAttendeesType type
 */
class NonEmptyArrayOfAttendeesType extends DataType
{
    /**
     * Attendee property
     *
     * @var EWSType_AttendeeType
     */
    public $Attendee;
}
