<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Messages;

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
 * @method ResponseMessageType setMessageXml(\jamesiarmes\PEWS\API\Messages\ResponseMessageType\MessageXmlAType $messageXml)
 */
class ResponseMessageType extends Messages
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
     * @property \jamesiarmes\PEWS\API\Messages\ResponseMessageType\MessageXmlAType
     * $messageXml
     */
    protected $messageXml = null;


}

