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

    public static function getTokenFromAuthorizationCode(
        $clientId,
        $clientSecret,
        $authorizationCode,
        $redirectUri,
        $tokenEndPoint = 'https://login.microsoftonline.com/common/oauth2/token'
    ) {
        $postOptions = array(
            'http_errors' => false,
            'form_params' => array(
                'client_id' => $clientId,
                'resource' => 'https://outlook.office365.com',
                'client_secret' => $clientSecret,
                'code' => $authorizationCode,
                'redirect_uri' => $redirectUri,
                'grant_type' => 'authorization_code'
            )
        );

        $client = new Client();
        $response = $client->request('POST', $tokenEndPoint, $postOptions);
        $response = $response->getBody()->__toString();

        $response = json_decode($response);

        return $response->access_token;
    }
}
