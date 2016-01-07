<?php
/**
 * Contains EWSType_SendNotificationResponseType.
 */

/**
 * Represents the push notifications that are sent by the computer that is
 * running Microsoft Exchange Server 2007 to the client application.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_SendNotificationResponseType extends EWSType
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
