<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\AttendeeType.
 */

namespace jamesiarmes\PhpEws\Type;

use \jamesiarmes\PhpEws\Type;

/**
 * Represents attendees and resources for a meeting.
 *
 * @package php-ews\Type
 */
class AttendeeType extends Type
{
    /**
     * Represents the date and time of the latest response that is received.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Make a DateTime object.
     */
    public $LastResponseTime;

    /**
     * Identifies a fully resolved e-mail address.
     *
     * @since Exchange 2007
     *
     * @var \jamesiarmes\PhpEws\Type\EmailAddressType
     */
    public $Mailbox;

    /**
     * Represents the type of recipient response that is received for a meeting.
     *
     * This property is only relevant to a meeting organizer's calendar item.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\ResponseTypeType
     */
    public $ResponseType;
}
