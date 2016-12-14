<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\GetItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;

use \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\ItemIdType;
use \jamesiarmes\PhpEws\Type\ItemResponseShapeType;

$email_ids = array(
    'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEMAAAr1MfeoTJdQ7jgaw/bSgljAABaFXCUAAA=',
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new GetItemType();
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
$request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

// Iterate over the event ids, setting each one on the request.
foreach ($email_ids as $event_id) {
    $item = new ItemIdType();
    $item->Id = $event_id;
    $request->ItemIds->ItemId[] = $item;
}

$response = $client->GetItem($request);

// Iterate over the results, printing any error messages or message subjects.
$response_messages = $response->ResponseMessages->GetItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Failed to get event with \"$message\"\n");
        continue;
    }

    // Iterate over the messages, printing the subject for each.
    foreach ($response_message->Items->Message as $item) {
        $subject = $item->Subject;
        fwrite(STDOUT, "Retrieved message $subject\n");
    }
}
