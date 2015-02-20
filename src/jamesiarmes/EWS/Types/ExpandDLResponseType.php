<?php
/**
 * Contains ExpandDLResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines a response to a request to expand a distribution list.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class ExpandDLResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2007
     *
     * @var ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
