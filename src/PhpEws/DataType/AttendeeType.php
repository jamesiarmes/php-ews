<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the AttendeeType type
 */
class AttendeeType extends DataType
{
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;

    /**
     * ResponseType property
     *
     * @var ResponseTypeType
     */
    public $ResponseType;

    /**
     * LastResponseTime property
     *
     * @var \DateTime
     */
    public $LastResponseTime;
}
