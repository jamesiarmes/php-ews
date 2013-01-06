<?php
/**
 * Definition of the DelegateUserType type
 *
 * @package php-ews
 * @subpackage Types
 */

namespace PhpEws\EWSType;

/**
 * Definition of the DelegateUserType type
 */
class DelegateUserType extends EWSType
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
