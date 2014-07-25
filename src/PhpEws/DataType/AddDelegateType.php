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
     * @var EWSType_ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * DeliverMeetingRequests property
     *
     * @var EWSType_DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
