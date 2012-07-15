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

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->schema = array(
            array(
                'name' => 'DelegateUsers',
                'required' => false,
                'type' => 'ArrayOfDelegateUserType',
            ),
            array(
                'name' => 'DeliverMeetingRequests',
                'required' => false,
                'type' => 'DeliverMeetingRequestsType',
            ),
        );
    }
}
