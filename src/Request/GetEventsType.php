<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetEventsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents the operation used by pull clients to request notifications from
 * the server.
 *
 * @package php-ews\Request
 */
class GetEventsType extends BaseRequestType
{
    /**
     * Represents the identifier for a subscription that is queried for events.
     *
     * @since Exchange 2007
     *
     * @var string
     */
    public $SubscriptionId;

    /**
     * Represents the last watermark returned to the client.
     *
     * If GetEvents has not been called for this subscription, the client uses
     * the watermark returned from the Subscribe request. Otherwise, the
     * watermark from the last event in the last GetEvents response is used.
     *
     * @since Exchange 2007
     *
     * @var string
     *
     * @todo Determine if we need a WatermarkType.
     */
    public $Watermark;
}
