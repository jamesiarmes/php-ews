<?php
/**
 * Contains EWSType_GetStreamingEventsType.
 */

/**
 * Represents the operation that is used by clients to request streaming
 * notifications from the server.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseRequestType.
 */
class EWSType_GetStreamingEventsType extends EWSType
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
