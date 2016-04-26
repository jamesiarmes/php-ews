<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing DelegateUserResponseMessageType
 *
 *
 * XSD Type: DelegateUserResponseMessageType
 *
 * @method \jamesiarmes\PEWS\API\Type\DelegateUserType getDelegateUser()
 * @method DelegateUserResponseMessageType setDelegateUser(\jamesiarmes\PEWS\API\Type\DelegateUserType $delegateUser)
 */
class DelegateUserResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Type\DelegateUserType
     */
    protected $delegateUser = null;
}
