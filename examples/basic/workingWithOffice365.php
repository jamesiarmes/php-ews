<?php

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\ExchangeWebServicesAuth;

//In order to work with Exchange API, there are a couple of things you need. Your Client ID which is the ID of your
//application when you registered it, your Client Secret which is the password you generated for your application,
//a Redirect URI which is what you set in your registration panel specific for this application and an Authorization
// Code or Token which is retrieved as part of your authorization with the user.

$clientId = null;
$clientSecret = null;
$redirectUri = null;

//At this point you should have already gotten your authorization_code. That's something that needs to be managed by
//your applicaiton, not this library. Once you have your authorization_code, the library can help you turn that in to a
//authorization_token which can be used to talk to Office365.

$authorizationCode = 'The Code you already fetched.';

//Your code is a one-time use code, but your token will last for a little bit of time. It won't last forever, but you
//should only need one token per session. Likewise, since the token lasts a while you'll want to store it somewhere,
//you don't get a new token every time.
$token = $storage->getToken();

if (!$token) {
    $token = ExchangeWebServicesAuth::getTokenFromAuthorizationCode(
        $clientId,
        $clientSecret,
        $authorizationCode,
        $redirectUri
    );
}

//Once you have your token you can just create your API as easily as before, but with the token instead of with a
//username and a password

$api = API::withCallbackToken('outlook.office365.com', $token);
