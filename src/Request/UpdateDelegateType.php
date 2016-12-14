<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\UpdateDelegateType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to update delegates in a mailbox.
 *
 * @package php-ews\Request
 */
class UpdateDelegateType extends BaseDelegateType
{
    /**
     * Contains an array of DelegateUser elements that identify the delegates
     * and the updates to apply to the delegates.
     *
     * @since Exchange 2007 SP1
     *
     * @var \jamesiarmes\PhpEws\ArrayType\ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * Defines how meeting requests are handled between the delegate and the
     * principal.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
