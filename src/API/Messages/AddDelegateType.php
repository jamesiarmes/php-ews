<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing AddDelegateType
 *
 *
 * XSD Type: AddDelegateType
 *
 * @method AddDelegateType getDelegateUsers()
 * @method AddDelegateType setDelegateUsers(array $delegateUsers)
 * @method AddDelegateType getDeliverMeetingRequests()
 * @method AddDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class AddDelegateType extends BaseDelegateType
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DelegateUserType[] $delegateUsers
     */
    protected $delegateUsers = null;

    /**
     * @property string $deliverMeetingRequests
     */
    protected $deliverMeetingRequests = null;


}

