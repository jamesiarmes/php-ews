<?php

namespace jamesiarmes\PEWS\API\Messages;

/**
 * Class representing AddDelegateType
 *
 *
 * XSD Type: AddDelegateType
 *
 * @method AddDelegateType getDelegateUsers()
 * @method AddDelegateType setDelegateUsers($delegateUsers)
 * @method AddDelegateType getDeliverMeetingRequests()
 * @method AddDelegateType setDeliverMeetingRequests($deliverMeetingRequests)
 */
class AddDelegateType extends BaseDelegateType
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

