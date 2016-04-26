<?php

namespace jamesiarmes\PEWS\API\Message;

/**
 * Class representing GetServiceConfigurationResponseMessageType
 *
 *
 * XSD Type: GetServiceConfigurationResponseMessageType
 *
 * @method GetServiceConfigurationResponseMessageType addResponseMessages(ServiceConfigurationResponseMessageType $responseMessages)
 * @method ServiceConfigurationResponseMessageType[] getResponseMessages()
 * @method GetServiceConfigurationResponseMessageType setResponseMessages(array $responseMessages)
 */
class GetServiceConfigurationResponseMessageType extends ResponseMessageType
{

    /**
     * @var \jamesiarmes\PEWS\API\Message\ServiceConfigurationResponseMessageType[]
     */
    protected $responseMessages = null;
}
