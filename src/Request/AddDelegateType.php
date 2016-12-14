<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\AddDelegateType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Defines a request to add delegates to a mailbox.
 *
 * @package php-ews\Request
 */
class AddDelegateType extends BaseDelegateType
{
    /**
     * Contains the identities of delegates to add to or update in a mailbox.
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
