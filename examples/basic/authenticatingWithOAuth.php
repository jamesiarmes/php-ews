<?php

use jamesiarmes\PEWS\API;
use jamesiarmes\PEWS\API\ExchangeWebServicesAuth;

//In order to authenticate your application with Office 365 using OAuth 2.0 instead of usernames and passwords, you
//need to do some extra work to handle the actual authentication. The first is to register your application in Azure AD
//which can be done by following this: https://msdn.microsoft.com/en-us/office/office365/howto/add-common-consent-manually

//Once you've done that, you should have the following: A Redirect URI, a token and authorization endpoint (can be found
//by clicking on the "View Endpoints" button when managing your application, a Client ID and a Client Secret. You should
//also have added "Office 365 Exchange Online" as an application that you have permission to use, with the Delegate
//Permission of "Access mailboxes as the signed-in user via Exchange Web Services" ticked.

$tokenEndpoint = null;
$authorizationEndpoint = null;
$clientId = null;
$clientSecret = null;
$redirectUri = null;
$resource = 'https://outlook.office365.com';

//The first step is to get your authorization code. It's a one time use code that needs to be granted by the user. You
//should have your own way to get it, but just for the sake of example I'm going to show you a way to do that

if (!$_SESSION['token'] && !isset($_GET)) {
    $redirect = $authorizationEndpoint .
        '?response_type=code' .
        '&client_id=' . urlencode($clientId) .
        '&redirect_uri=' . urlencode($redirectUri) .
        '&resource=' . urlencode($resource) .
        '&scope=' . urlencode('full_access_as_user');
    header("Location: {$redirect}");
    exit();
}
//Once you have your code, you can exchange it for a token. The code can only be used once, so you don't store the code.
//The token is what we'll be using for the duration of the session, so you should store between pages.
elseif (isset($_GET['code'])) {
    $code = $_GET['code'];

    $token = ExchangeWebServicesAuth::getTokenFromAuthorizationCode(
        $clientId,
        $clientSecret,
        $code,
        $redirectUri,
        $tokenEndpoint
    );

    $_SESSION['token'] = $token;
}

//Once you have your token you can just create your API as easily as before, but with the token instead of with a
//username and a password
$token = $_SESSION['token'];

$api = API::withCallbackToken('outlook.office365.com', $token);
