<?php
/**
 * Contains EWSType_GetServerTimeZonesResponseType.
 */

/**
 * Defines a response to a GetServerTimeZones operation request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_GetServerTimeZonesResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
