<?php
/**
 * Definition of the AddDelegateType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the AddDelegateType type
 */
class AddDelegateType extends PhpEws\EWSType
{
    /**
     * DelegateUsers property
     *
     * @var ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * DeliverMeetingRequests property
     *
     * @var DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
