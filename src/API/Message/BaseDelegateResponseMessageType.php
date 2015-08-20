<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing BaseDelegateResponseMessageType
 *
 *
 * XSD Type: BaseDelegateResponseMessageType
 *
 * @method array getResponseMessages()
 * @method BaseDelegateResponseMessageType setResponseMessages(array $responseMessages)
 */
class BaseDelegateResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Message\DelegateUserResponseMessageType[]
     */
    protected $responseMessages = null;
}
