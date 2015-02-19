<?php
/**
 * Contains \jamesiarmes\PhpEws\Type\UpdateDelegateType.
 */

namespace jamesiarmes\PhpEws\Type;

/**
 * Defines a request to update delegates in a mailbox.
 *
 * @package php-ews\Types
 */
class UpdateDelegateType extends BaseDelegateType
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
     * @var \jamesiarmes\PhpEws\Enumeration\DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
