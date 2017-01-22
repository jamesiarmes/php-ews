<?php
/**
 * This example shows how to work with a paged list of messages. By default, we
 * set the page size to 10 so that we can show off the behavior, but you can
 * adjust this as necessary.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\FindItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;

use \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\IndexBasePointType;
use \jamesiarmes\PhpEws\Enumeration\ItemQueryTraversalType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;
use \jamesiarmes\PhpEws\Type\IndexedPageViewType;
use \jamesiarmes\PhpEws\Type\ItemResponseShapeType;

// Replace this with the number of items you would like reurned for each page.
$page_size = 10;

// Replace with the timezone you would like the message times displayed in or
// clear for UTC.
$timezone = 'Eastern Standard Time';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);
$client->setTimezone($timezone);

// Build the request.
$request = new FindItemType();
$request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();
$request->Traversal = ItemQueryTraversalType::SHALLOW;

// Return all message properties.
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;

// Search in the user's inbox.
$folder_id = new DistinguishedFolderIdType();
$folder_id->Id = DistinguishedFolderIdNameType::INBOX;
$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;

// Limits the number of items retrieved
$request->IndexedPageItemView = new IndexedPageViewType();
$request->IndexedPageItemView->BasePoint = IndexBasePointType::BEGINNING;
$request->IndexedPageItemView->Offset = 0;
$request->IndexedPageItemView->MaxEntriesReturned = $page_size;

$response = $client->FindItem($request);

// Iterate over the results, printing any error messages or message subjects.
$response_messages = $response->ResponseMessages->FindItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "Failed to search for messages with \"$code: $message\"\n"
        );
        continue;
    }

    // Set the base values from the first page of results.
    $messages = $response_message->RootFolder->Items->Message;
    $last_page = $response_message->RootFolder->IncludesLastItemInRange;

    // Until we have the last page, keep requesting the next page of messages.
    for ($page_number = 1; !$last_page; ++$page_number) {
        // Request the next page.
        $request->IndexedPageItemView->Offset = $page_size * $page_number;
        $response = $client->FindItem($request);

        // Add the messages to the list of messages retrieved. If the total
        // number of messages is large, you could easily run out of memory here.
        // It is advised that you perform you operations on messages when you
        // retrieve them rather than keeping a list of them in memory.
        $response_message = $response->ResponseMessages
            ->FindItemResponseMessage[0];
        $messages = array_merge(
            $messages,
            $response_message->RootFolder->Items->Message
        );

        // Store the updated last page value.
        $last_page = $response_message->RootFolder->IncludesLastItemInRange;
    }

    // Iterate over the messages that were found, printing the subject for each.
    foreach ($messages as $message) {
        $subject = $message->Subject;
        fwrite(STDOUT, "$subject\n");
    }
}
