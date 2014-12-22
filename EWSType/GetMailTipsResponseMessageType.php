<?php
/**
 * Contains EWSType_GetMailTipsResponseMessageType.
 */

/**
 * Represents the response message for a GetMailTips Operation.
 *
 * @package php-ews\Types
 */
class EWSType_GetMailTipsResponseMessageType extends EWSType
{
    /**
     * Represents a list of mail tips response messages.
     *
     * @since Exchange 2010
     *
     * @var EWSType_ArrayOfMailTipsResponseMessageType
     */
    public $ResponseMessages;
}
