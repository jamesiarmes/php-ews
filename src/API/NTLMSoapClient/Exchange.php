<?php

namespace jamesiarmes\PEWS\API\NTLMSoapClient;

use jamesiarmes\PEWS\API\NTLMSoapClient;
use jamesiarmes\PEWS\API\Type;

/**
 * Contains NTLMSoapClient_Exchange.
 */

/**
 * Handles Soap communication with the Exchange server using NTLM
 * authentication
 *
 * @package php-ews\Auth
 */
class Exchange extends NTLMSoapClient
{
    public function __call($name, $args)
    {
        //If the request passed in is our custom type, let's use the toXmlObject function, since that's what it's built
        //for
        if (isset($args[0]) && $args[0] instanceof Type) {
            $args[0] = $args[0]->toXmlObject();
        }

        return parent::__call($name, $args);
    }
}
