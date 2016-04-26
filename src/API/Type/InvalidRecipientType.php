<?php

namespace jamesiarmes\PEWS\API\Type;

use jamesiarmes\PEWS\API\Type;

/**
 * Class representing InvalidRecipientType
 *
 *
 * XSD Type: InvalidRecipientType
 *
 * @method string getSmtpAddress()
 * @method InvalidRecipientType setSmtpAddress(string $smtpAddress)
 * @method string getResponseCode()
 * @method InvalidRecipientType setResponseCode(string $responseCode)
 * @method string getMessageText()
 * @method InvalidRecipientType setMessageText(string $messageText)
 */
class InvalidRecipientType extends Type
{

    /**
     * @var string
     */
    protected $smtpAddress = null;

    /**
     * @var string
     */
    protected $responseCode = null;

    /**
     * @var string
     */
    protected $messageText = null;
}
