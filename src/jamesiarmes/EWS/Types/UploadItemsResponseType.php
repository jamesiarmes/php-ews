<?php
/**
 * Contains UploadItemsResponseType.
 */

namespace jamesiarmes\EWS\Types;

use jamesiarmes\EWS\EWSType;

/**
 * Represents a response to a single UploadItems request.
 *
 * @package jamesiarmes\EWS\Types
 *
 * @todo Extend BaseResponseMessageType.
 */
class UploadItemsResponseType extends EWSType
{
    /**
     * Contains the response messages for an Exchange Web Services request.
     *
     * @since Exchange 2010 SP1
     *
     * @var ArrayOfResponseMessagesType
     */
    public $ResponseMessages;
}
