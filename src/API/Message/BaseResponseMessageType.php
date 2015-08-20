<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseResponseMessageType
 *
 *
 * XSD Type: BaseResponseMessageType
 *
 * @method ArrayOfResponseMessagesType getResponseMessages()
 * @method BaseResponseMessageType setResponseMessages(ArrayOfResponseMessagesType $responseMessages)
 */
class BaseResponseMessageType extends Message
{

    /**
     * @var \jamesiarmes\PEWS\API\Message\ArrayOfResponseMessagesType
     */
    protected $responseMessages = null;
}
