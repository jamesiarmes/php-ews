<?php
/**
 * Definition of the AttendeeType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace \PhpEws\EWSType;

/**
 * Definition of the AttendeeType type
 */
class AttendeeType extends EWSType
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
