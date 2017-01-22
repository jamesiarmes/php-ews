<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\GetServerTimeZonesType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfTimeZoneIdType;

use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

// Replace with timezone ids to get the definition for. An empty array will
// result in all timezones being returned.
$timezones = array(
    'Eastern Standard Time',
    'Pacific Standard Time',
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new GetServerTimeZonesType();

// If any timezones were specified, add them to the request.
if (!empty($timezones)) {
    $request->Ids = new NonEmptyArrayOfTimeZoneIdType();
    $request->Ids->Id = $timezones;
}

$response = $client->GetServerTimeZones($request);

// Iterate over the results, printing any error messages.
$response_messages = $response->ResponseMessages
    ->GetServerTimeZonesResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Failed to get timezones with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the returned timezone definitions.
    $definitions = $response_message->TimeZoneDefinitions->TimeZoneDefinition;
    foreach ($definitions as $timezone) {
        $output = $timezone->Name . "\n";
        $output .= '- Id: ' . $timezone->Id . "\n\n";
        fwrite(STDOUT, $output);
    }
}
