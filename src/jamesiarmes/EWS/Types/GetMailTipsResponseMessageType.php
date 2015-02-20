<?php
/**
 * Contains GetMailTipsResponseMessageType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents the response message for a GetMailTips Operation.
 *
 * @package jamesiarmes\EWS\Types
 */
class GetMailTipsResponseMessageType extends EWSType
{
    /**
     * Represents a list of mail tips response messages.
     *
     * @since Exchange 2010
     *
     * @var ArrayOfMailTipsResponseMessageType
     */
    public $ResponseMessages;
}
