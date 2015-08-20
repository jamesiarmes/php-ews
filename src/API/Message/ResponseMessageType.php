<?php

namespace jamesiarmes\PEWS\API\Message;

use jamesiarmes\PEWS\API\Message;

/**
 * Class representing ResponseMessageType
 *
 *
 * XSD Type: ResponseMessageType
 *
 * @method ResponseMessageType getResponseClass()
 * @method ResponseMessageType setResponseClass(string $responseClass)
 * @method ResponseMessageType getMessageText()
 * @method ResponseMessageType setMessageText(string $messageText)
 * @method ResponseMessageType getResponseCode()
 * @method ResponseMessageType setResponseCode(string $responseCode)
 * @method ResponseMessageType getDescriptiveLinkKey()
 * @method ResponseMessageType setDescriptiveLinkKey(integer $descriptiveLinkKey)
 * @method ResponseMessageType getMessageXml()
 * @method ResponseMessageType setMessageXml(\jamesiarmes\PEWS\API\Message\ResponseMessageType\MessageXmlAType $messageXml)
 */
class ResponseMessageType extends Message
{

    /**
     * @property string $responseClass
     */
    protected $responseClass = null;

    /**
     * @property string $messageText
     */
    protected $messageText = null;

    /**
     * @property string $responseCode
     */
    protected $responseCode = null;

    /**
     * @property integer $descriptiveLinkKey
     */
    protected $descriptiveLinkKey = null;

    /**
     * @property \jamesiarmes\PEWS\API\Message\ResponseMessageType\MessageXmlAType
     * $messageXml
     */
    protected $messageXml = null;
}
