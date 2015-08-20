<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseDelegateResponseMessageType
 *
 *
 * XSD Type: BaseDelegateResponseMessageType
 *
 * @method BaseDelegateResponseMessageType getResponseMessages()
 * @method BaseDelegateResponseMessageType setResponseMessages(array $responseMessages)
 */
class BaseDelegateResponseMessageType extends ResponseMessageType
{

    /**
     * @property \jamesiarmes\PEWS\API\Message\DelegateUserResponseMessageType[]
     * $responseMessages
     */
    protected $responseMessages = null;
}
