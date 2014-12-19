<?php
/**
 * Contains EWSType_UpdateDelegateType.
 */

/**
 * Defines a request to update delegates in a mailbox.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseDelegateType.
 */
class EWSType_UpdateDelegateType extends EWSType
{
    /**
     * Contains an array of DelegateUser elements that identify the delegates
     * and the updates to apply to the delegates.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * Defines how meeting requests are handled between the delegate and the
     * principal.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;

    /**
     * Identifies a mail-enabled Active Directory directory service object.
     *
     * @since Exchange 2007 SP1
     *
     * @var EWSType_EmailAddressType
     */
    public $Mailbox;
}
