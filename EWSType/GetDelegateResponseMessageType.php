<?php
/**
 * Definition of the GetDelegateResponseMessageType type
 *
 * @package php-ews
 * @subpackage Types
 */

/**
 * Definition of the GetDelegateResponseMessageType type
 */
class EWSType_GetDelegateResponseMessageType extends EWSType
{
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
                'name' => 'DeliverMeetingRequests',
                'required' => false,
                'type' => 'DeliverMeetingRequestsType',
            ),
        );
    }
}
