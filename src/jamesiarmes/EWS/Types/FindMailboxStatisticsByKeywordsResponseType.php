<?php
/**
 * Contains FindMailboxStatisticsByKeywordsResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Defines the response to a FindMailboxStatisticsByKeywords request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class FindMailboxStatisticsByKeywordsResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2013
     *
     * @var ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
