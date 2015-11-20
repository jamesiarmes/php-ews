<?php

namespace jamesiarmes\PEWS\API;

use GuzzleHttp\Client;

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

    public static function fromCallbackToken($token)
    {
        return array(
            'headers' => array(
                'Authorization' => 'Bearer ' . $token
            )
        );
    }

    public static function getTokenFromAuthorizationCode($clientId, $clientSecret, $authorizationCode, $redirectUri)
    {
        $postOptions = array(
            'http_errors' => false,
            'form_params' => array(
                'client_id' => $clientId,
                'client_secret' => $clientSecret,
                'code' => $authorizationCode,
                'redirect_uri' => $redirectUri,
                'grant_type' => 'authorization_code'
            )
        );

        $url = 'https://login.microsoftonline.com/common/oauth2/v2.0/token';

        $client = new Client();
        $response = $client->request('POST', $url, $postOptions);
        $response = $response->getBody()->__toString();

        $response = json_decode($response);
        return $response->access_token;
    }
}
