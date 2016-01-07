<?php
/**
 * Contains EWSType_AttendeeType.
 */

/**
 * Represents attendees and resources for a meeting.
 *
 * @package php-ews\Types
 */
class EWSType_AttendeeType extends EWSType
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
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;

    /**
     * Represents the type of recipient response that is received for a meeting.
     *
     * This property is only relevant to a meeting organizer's calendar item.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ResponseTypeType
     */
    public $ResponseType;
}
