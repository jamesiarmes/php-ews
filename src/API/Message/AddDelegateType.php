<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing AddDelegateType
 *
 *
 * XSD Type: AddDelegateType
 *
 * @method array getDelegateUsers()
 * @method AddDelegateType setDelegateUsers(array $delegateUsers)
 * @method string getDeliverMeetingRequests()
 * @method AddDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class AddDelegateType extends BaseDelegateType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\DelegateUserType[]
     */
    protected $delegateUsers = null;

    /**
     * @var string
     */
    protected $deliverMeetingRequests = null;
}
