<?php

namespace jamesiarmes\PEWS\API\Messages;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing ResponseMessageType
 *
 *
 * XSD Type: ResponseMessageType
 *
 * @method ResponseMessageType getResponseClass()
 * @method ResponseMessageType setResponseClass($responseClass)
 * @method ResponseMessageType getMessageText()
 * @method ResponseMessageType setMessageText($messageText)
 * @method ResponseMessageType getResponseCode()
 * @method ResponseMessageType setResponseCode($responseCode)
 * @method ResponseMessageType getDescriptiveLinkKey()
 * @method ResponseMessageType setDescriptiveLinkKey($descriptiveLinkKey)
 * @method ResponseMessageType getMessageXml()
 * @method ResponseMessageType setMessageXml($messageXml)
 */
class ResponseMessageType extends Type
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

