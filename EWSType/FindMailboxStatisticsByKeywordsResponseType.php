<?php
/**
 * Contains EWSType_FindMailboxStatisticsByKeywordsResponseType.
 */

/**
 * Defines the response to a FindMailboxStatisticsByKeywords request.
 *
 * @package php-ews\Types
 *
 * @todo Extend EWSType_BaseResponseMessageType.
 */
class EWSType_FindMailboxStatisticsByKeywordsResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2013
     *
     * @var EWSType_ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
