<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\FindItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;

use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\ContactsViewType;
use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new FindItemType();
$request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();
$request->ContactsView = new ContactsViewType();

// Find contacts in the contacts folder.
$folder_id = new DistinguishedFolderIdType();
$folder_id->Id = new DistinguishedFolderIdNameType();
$folder_id->Id->_ = DistinguishedFolderIdNameType::CONTACTS;
$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;

$response = $client->FindItem($request);

// If only one item was found then we won't have an array from the response.
$response_messages = $response->ResponseMessages->FindItemResponseMessage;
if (!is_array($response_messages)) {
    $response_messages = array($response_messages);
}

// Iterate over the results, printing any error messages or contact ids.
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Failed to search for contacts with \"$message\"\n");
        continue;
    }

    // If only one contact was found, we won't have an array.
    $items = $response_message->RootFolder->Items->Contact;
    if (!is_array($items)) {
        $items = array($items);
    }

    // Iterate over the contacts that were found, printing the id of each.
    foreach ($items as $item) {
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "Found contact $id\n");
    }
}
