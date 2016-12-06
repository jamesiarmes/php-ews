<?php
/**
 * Contains \jamesiarmes\PhpEws\Enumeration\DeliverMeetingRequestsType.
 */

namespace jamesiarmes\PhpEws\Enumeration;

use \jamesiarmes\PhpEws\Enumeration;

/**
 * Defines how meeting requests are handled between the delegate and the
 * principal.
 *
 * @package php-ews\Enumeration
 */
class DeliverMeetingRequestsType extends Enumeration
{
    /**
     * Meeting requests are forwarded to the delegate and remain in the Inbox
     * folder in the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DELEGATES_AND_ME = 'DelegatesAndMe';

    /**
     * Meeting requests are forwarded to the delegate and remain in the Inbox
     * folder in the principal's mailbox, but the Accept, Tentative, and Decline
     * buttons do not appear in the Microsoft Office Outlook reading pane.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DELEGATES_AND_SEND_INFO_TO_ME = 'DelegatesAndSendInformationToMe';

    /**
     * Meeting requests are forwarded to the delegate and moved to the Deleted
     * Items folder in the principal's mailbox.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     */
    const DELEGATES_ONLY = 'DelegatesOnly';

    /**
     * Meeting requests are not forwarded to the delegate.
     *
     * @since Exchange 2010
     *
     * @var string
     */
    const NO_FORWARD = 'NoForward';
}
