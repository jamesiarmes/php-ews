<?php
/**
 * Definition of the AddDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the AddDelegateType type
 */
class EWSType_AddDelegateType extends EWSType
{
    /**
     * DelegateUsers property
     *
     * @var EWSType_ArrayOfDelegateUserType
     */
    public $DelegateUsers;

    /**
     * DeliverMeetingRequests property
     *
     * @var EWSType_DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
