<?php

namespace jamesiarmes\PEWS\API;

class ExchangeWebServicesAuth
{
    public static function fromUsernameAndPassword($username, $password)
    {
        return array(
            'curl' => array(
                CURLOPT_HTTPAUTH => CURLAUTH_BASIC | CURLAUTH_NTLM,
                CURLOPT_USERPWD => $username . ':' . $password
            )
        );
    }
}
