<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing UpdateDelegateType
 *
 *
 * XSD Type: UpdateDelegateType
 *
 * @method UpdateDelegateType getDelegateUsers()
 * @method UpdateDelegateType setDelegateUsers($delegateUsers)
 * @method UpdateDelegateType getDeliverMeetingRequests()
 * @method UpdateDelegateType setDeliverMeetingRequests($deliverMeetingRequests)
 */
class UpdateDelegateType extends BaseDelegateType
{

    /**
     * @property array $delegateUsers
     */
    protected $delegateUsers = null;

    /**
     * @property string $deliverMeetingRequests
     */
    protected $deliverMeetingRequests = null;


}

