<?php
/**
 * Contains EWSType_CreateUserConfigurationResponseType.
 */

/**
 * Defines a response to a single CreateUserConfiguration request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_CreateUserConfigurationResponseType extends EWSType
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
