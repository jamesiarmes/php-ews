<?php
/**
 * Definition of the GetDelegateResponseMessageType type
 *
 * @package php-ews
* @subpackage Types
 */

namespace EWSType;

use PhpEws;
/**
 * Definition of the GetDelegateResponseMessageType type
 */
class GetDelegateResponseMessageType extends PhpEws\EWSType
{
    /**
     * DeliverMeetingRequests property
     *
     * @var DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
