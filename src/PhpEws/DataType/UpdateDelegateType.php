<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the UpdateDelegateType type
 */
class UpdateDelegateType extends DataType
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
}
