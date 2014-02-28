<?php
/**
 * Definition of the DelegateUserType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the DelegateUserType type
 */
class DelegateUserType extends PhpEws\EWSType
{
    /**
     * UserId property
     *
     * @var UserIdType
     */
    public $UserId;

    /**
     * DelegatePermissions property
     *
     * @var DelegatePermissionsType
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
