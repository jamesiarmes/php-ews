<?php
/**
 * Contains \jamesiarmes\PhpEws\Response\GetDelegateResponseMessageType.
 */

namespace jamesiarmes\PhpEws\Response;

/**
 * Represents the status and result of a GetDelegate operation request.
 *
 * @package php-ews\Response
 */
class GetDelegateResponseMessageType extends BaseDelegateResponseMessageType
{
    /**
     * Defines how meeting requests are handled between the delegate and the
     * principal.
     *
     * @since Exchange 2007 SP1
     *
     * @var string
     *
     * @see \jamesiarmes\PhpEws\Enumeration\DeliverMeetingRequestsType
     */
    public $DeliverMeetingRequests;
}
