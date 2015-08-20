<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateDelegateType
 *
 *
 * XSD Type: UpdateDelegateType
 *
 * @method UpdateDelegateType getDelegateUsers()
 * @method UpdateDelegateType setDelegateUsers(array $delegateUsers)
 * @method UpdateDelegateType getDeliverMeetingRequests()
 * @method UpdateDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class UpdateDelegateType extends BaseDelegateType
{

    /**
     * @property \jamesiarmes\PEWS\API\Type\DelegateUserType[] $delegateUsers
     */
    protected $delegateUsers = null;

    /**
     * @property string $deliverMeetingRequests
     */
    protected $deliverMeetingRequests = null;


}

