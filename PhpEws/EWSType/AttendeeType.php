<?php
/**
 * Definition of the AttendeeType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the AttendeeType type
 */
class AttendeeType extends PhpEws\EWSType
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
     * @var dateTime
     */
    public $LastResponseTime;
}
