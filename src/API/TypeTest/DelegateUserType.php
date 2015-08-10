<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing DelegateUserType
 *
 *
 * XSD Type: DelegateUserType
 *
 * @method DelegateUserType getUserId()
 * @method DelegateUserType setUserId($userId)
 * @method DelegateUserType getDelegatePermissions()
 * @method DelegateUserType setDelegatePermissions($delegatePermissions)
 * @method DelegateUserType getReceiveCopiesOfMeetingMessages()
 * @method DelegateUserType
 * setReceiveCopiesOfMeetingMessages($receiveCopiesOfMeetingMessages)
 * @method DelegateUserType getViewPrivateItems()
 * @method DelegateUserType setViewPrivateItems($viewPrivateItems)
 */
class DelegateUserType extends Type
{

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\UserIdType $userId
     */
    protected $userId = null;

    /**
     * @property \jamesiarmes\PEWS\API\TypeTest\DelegatePermissionsType
     * $delegatePermissions
     */
    protected $delegatePermissions = null;

    /**
     * @property boolean $receiveCopiesOfMeetingMessages
     */
    protected $receiveCopiesOfMeetingMessages = null;

    /**
     * @property boolean $viewPrivateItems
     */
    protected $viewPrivateItems = null;


}

