<?php
/**
 * Contains EWSType_DeliverMeetingRequestsType.
 */

/**
 * Defines how meeting requests are handled between the delegate and the
 * principal.
 *
 * @package php-ews\Enumerations
 */
class EWSType_DeliverMeetingRequestsType extends EWSType
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
     * Element value.
     *
     * @var string
     */
    public $_;

    /**
     * Returns the value of this object as a string.
     *
     * @return string
     */
    public function __toString()
    {
        return $this->_;
    }
}
