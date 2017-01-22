<?php
/**
 * This example shows how to configure the user's email signature settings for
 * OWA. It is a simplified example. You should make a GetUserConfiguration
 * request to get the existing OWA.UserOptions configuration and update the
 * necessary indexes in order to avoid erasing other options that have already
 * been set.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\UpdateUserConfigurationType;

use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use \jamesiarmes\PhpEws\Enumeration\UserConfigurationDictionaryObjectTypesType;

use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;
use \jamesiarmes\PhpEws\Type\UserConfigurationDictionaryEntryType;
use \jamesiarmes\PhpEws\Type\UserConfigurationDictionaryObjectType;
use \jamesiarmes\PhpEws\Type\UserConfigurationDictionaryType;
use \jamesiarmes\PhpEws\Type\UserConfigurationNameType;
use \jamesiarmes\PhpEws\Type\UserConfigurationType;

// Update these values with those you would like to set. Although an options
// type may be boolean, the value should still be a string 'true' or 'false'.
$options = array(
    array(
        'name' => 'autoaddsignature',
        'type' => UserConfigurationDictionaryObjectTypesType::BOOLEAN,
        'value' => 'true',
    ),
    array(
        'name' => 'autoaddsignatureonreply',
        'type' => UserConfigurationDictionaryObjectTypesType::BOOLEAN,
        'value' => 'false',
    ),
    array(
        'name' => 'signaturetext',
        'type' => UserConfigurationDictionaryObjectTypesType::STRING,
        'value' => '~ Homer J. Simpson',
    ),
    array(
        'name' => 'signaturehtml',
        'type' => UserConfigurationDictionaryObjectTypesType::STRING,
        'value' => '<html>
<head>
<style type="text/css" style="display:none">
<!--
p
	{margin-top:0;
	margin-bottom:0}
-->
</style>
</head>
<body dir="ltr">
<div id="divtagdefaultwrapper" dir="ltr" style="font-size:12pt; color:#000000; font-family:Calibri,Arial,Helvetica,sans-serif">
<p>~ Homer J. Simpson</p>
</div>
</body>
</html>',
    ),
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

$request = new UpdateUserConfigurationType();
$request->UserConfiguration = new UserConfigurationType();
$request->UserConfiguration->Dictionary = new UserConfigurationDictionaryType();

// Set the name of the configuration to update.
$name = new UserConfigurationNameType();
$name->Name = 'OWA.UserOptions';
$name->DistinguishedFolderId = new DistinguishedFolderIdType();
$name->DistinguishedFolderId->Id = DistinguishedFolderIdNameType::ROOT;
$request->UserConfiguration->UserConfigurationName = $name;

// Iterate over the options, creating a dictionary entry for each.
foreach ($options as $option) {
    $entry =  new UserConfigurationDictionaryEntryType();
    $entry->DictionaryKey = new UserConfigurationDictionaryObjectType();
    $entry->DictionaryKey->Type = UserConfigurationDictionaryObjectTypesType::STRING;
    $entry->DictionaryKey->Value = $option['name'];
    $entry->DictionaryValue = new UserConfigurationDictionaryObjectType();
    $entry->DictionaryValue->Type = $option['type'];
    $entry->DictionaryValue->Value = $option['value'];
    $request->UserConfiguration->Dictionary->DictionaryEntry[] = $entry;
}

$response = $client->UpdateUserConfiguration($request);

// Iterate over the results, printing any error messages or a success message.
$response_messages = $response->ResponseMessages
    ->UpdateUserConfigurationResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "User Configuration failed to update with \"$code: $message\"\n"
        );
        continue;
    }

    fwrite(STDOUT, "User Configuration updated.\n");
}
