<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing UpdateDelegateType
 *
 *
 * XSD Type: UpdateDelegateType
 *
 * @method array getDelegateUsers()
 * @method UpdateDelegateType setDelegateUsers(array $delegateUsers)
 * @method string getDeliverMeetingRequests()
 * @method UpdateDelegateType setDeliverMeetingRequests(string $deliverMeetingRequests)
 */
class UpdateDelegateType extends BaseDelegateType
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
