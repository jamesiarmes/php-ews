<?php
/**
 * Contains ConvertIdResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a response to a ConvertId request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class ConvertIdResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007 SP1
     *
     * @var ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
