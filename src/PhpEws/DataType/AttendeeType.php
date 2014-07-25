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
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * ResponseType property
     *
     * @var EWSType_ResponseTypeType
     */
    public $ResponseType;

    /**
     * LastResponseTime property
     *
     * @var EWSType_dateTime
     */
    public $LastResponseTime;
}
