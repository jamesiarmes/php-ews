<?php

namespace PhpEws\DataType;

use PhpEws\DataType;

/**
 * Definition of the DelegateUserType type
 */
class DelegateUserType extends DataType
{
    /**
     * UserId property
     *
     * @var EWSType_UserIdType
     */
    public $UserId;

    /**
     * DelegatePermissions property
     *
     * @var EWSType_DelegatePermissionsType
     */
    public $DelegatePermissions;

    /**
     * ReceiveCopiesOfMeetingMessages property
     *
     * @var boolean
     */
    public $ReceiveCopiesOfMeetingMessages;

    /**
     * ViewPrivateItems property
     *
     * @var boolean
     */
    public $ViewPrivateItems;
}
