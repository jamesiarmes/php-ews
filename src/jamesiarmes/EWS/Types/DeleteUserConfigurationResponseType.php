<?php
/**
 * Contains DeleteUserConfigurationResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a response to a single DeleteUserConfiguration request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class DeleteUserConfigurationResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
