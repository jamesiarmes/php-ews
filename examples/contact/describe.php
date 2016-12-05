<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\GetItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;

use \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\ItemIdType;
use \jamesiarmes\PhpEws\Type\ItemResponseShapeType;

// Replace this with the ids of actual contacts.
$contacts_ids = array(
    'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABVAqj7AAA=',
    'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABVAqjwAAA=',
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
$request->ItemShape->BaseShape = new DefaultShapeNamesType();
$request->ItemShape->BaseShape->_ = DefaultShapeNamesType::ALL_PROPERTIES;
$request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

// Iterate over the contact ids, setting each one on the request.
foreach ($contacts_ids as $contact_id) {
    $item = new ItemIdType();
    $item->Id = $contact_id;
    $request->ItemIds->ItemId[] = $item;
}

$response = $client->GetItem($request);

// If we only retrieved one item then we won't have an array from the response.
$response_messages = $response->ResponseMessages->GetItemResponseMessage;
if (!is_array($response_messages)) {
    $response_messages = array($response_messages);
}

// Iterate over the results, printing any error messages or contact names.
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Failed to get contact with \"$message\"\n");
        continue;
    }

    $name = $response_message->Items->Contact->DisplayName;
    fwrite(STDOUT, "Retrieved contact $name\n");
}
