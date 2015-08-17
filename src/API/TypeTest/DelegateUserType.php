<?php

namespace jamesiarmes\PEWS\API\TypeTest;

use jamesiarmes\PEWS\API\TypeTest;

/**
 * Class representing DelegateUserType
 *
 *
 * XSD Type: DelegateUserType
 *
 * @method DelegateUserType getUserId()
 * @method DelegateUserType setUserId(UserIdType $userId)
 * @method DelegateUserType getDelegatePermissions()
 * @method DelegateUserType setDelegatePermissions(DelegatePermissionsType $delegatePermissions)
 * @method DelegateUserType getReceiveCopiesOfMeetingMessages()
 * @method DelegateUserType setReceiveCopiesOfMeetingMessages(boolean $receiveCopiesOfMeetingMessages)
 * @method DelegateUserType getViewPrivateItems()
 * @method DelegateUserType setViewPrivateItems(boolean $viewPrivateItems)
 */
class DelegateUserType extends TypeTest
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

