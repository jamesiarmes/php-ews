<?php
/**
 * Contains CreateUserConfigurationResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a response to a single CreateUserConfiguration request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class CreateUserConfigurationResponseType extends EWSType
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
