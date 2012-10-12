<?php
/**
 * Definition of the UpdateDelegateType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the UpdateDelegateType type
 */
class EWSType_UpdateDelegateType extends EWSType
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
