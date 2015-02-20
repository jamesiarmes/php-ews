<?php
/**
 * Contains UpdateDelegateType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a request to update delegates in a mailbox.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseDelegateType.
 */
class UpdateDelegateType extends EWSType
{
    /**
     * Contains an array of DelegateUser elements that identify the delegates
     * and the updates to apply to the delegates.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * Defines how meeting requests are handled between the delegate and the
     * principal.
     *
     * @since Exchange 2007 SP1
     *
     * @var DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007 SP1
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
