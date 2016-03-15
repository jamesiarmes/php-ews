<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the AddDelegateType type
 */
class AddDelegateType extends DataType
{
    /**
     * DelegateUsers property
     *
     * @var ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * DeliverMeetingRequests property
     *
     * @var DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
    
    /**
     * Mailbox property
     *
     * @var EmailAddressType
     */
    public $Mailbox;
}
