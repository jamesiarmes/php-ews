<?php
/**
 * Contains EWSType_GetStreamingEventsResponseType.
 */

/**
 * Represents a response to a GetStreamingEvents element request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_GetStreamingEventsResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
