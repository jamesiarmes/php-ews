<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing InvalidRecipientType
 *
 *
 * XSD Type: InvalidRecipientType
 *
 * @method InvalidRecipientType getSmtpAddress()
 * @method InvalidRecipientType setSmtpAddress(string $smtpAddress)
 * @method InvalidRecipientType getResponseCode()
 * @method InvalidRecipientType setResponseCode(string $responseCode)
 * @method InvalidRecipientType getMessageText()
 * @method InvalidRecipientType setMessageText(string $messageText)
 */
class InvalidRecipientType extends Type
{

    /**
     * @property string $smtpAddress
     */
    protected $smtpAddress = null;

    /**
     * @property string $responseCode
     */
    protected $responseCode = null;

    /**
     * @property string $messageText
     */
    protected $messageText = null;
}
