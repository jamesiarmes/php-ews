<?php
/**
 * Contains \jamesiarmes\PhpEws\Request\GetStreamingEventsType.
 */

namespace jamesiarmes\PhpEws\Request;

/**
 * Represents the operation that is used by clients to request streaming
 * notifications from the server.
 *
 * @package php-ews\Request
 */
class GetStreamingEventsType extends BaseRequestType
{
    /**
     * Represents the number of minutes to keep a connection open.
     *
     * @since Exchange 2010 SP1
     *
     * @var integer
     */
    public $ConnectionTimeout;

    /**
     * Represents the identifier for a subscription that is queried for events.
     *
     * @since Exchange 2010 SP1
     *
     * @var string
     */
    public $SubscriptionId;
}
