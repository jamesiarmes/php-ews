<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\FindItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;

use \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\CalendarViewType;
use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;
use \jamesiarmes\PhpEws\Type\ItemResponseShapeType;

// Replace with the date range you want to search in. As is, this will find all
// events within the current calendar year.
$start_date = new DateTime('January 1 00:00:00');
$end_date = new DateTime('December 31 23:59:59');
$timezone = 'Eastern Standard Time';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);
$client->setTimezone($timezone);

$request = new FindItemType();
$request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();

// Return all event properties.
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = new DefaultShapeNamesType();
$request->ItemShape->BaseShape->_ = DefaultShapeNamesType::ALL_PROPERTIES;

$folder_id = new DistinguishedFolderIdType();
$folder_id->Id = new DistinguishedFolderIdNameType();
$folder_id->Id->_ = DistinguishedFolderIdNameType::CALENDAR;
$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;

$request->CalendarView = new CalendarViewType();
$request->CalendarView->StartDate = $start_date->format('c');
$request->CalendarView->EndDate = $end_date->format('c');

$response = $client->FindItem($request);

// If only one item was found then we won't have an array from the response.
$response_messages = $response->ResponseMessages->FindItemResponseMessage;
if (!is_array($response_messages)) {
    $response_messages = array($response_messages);
}

// Iterate over the results, printing any error messages or event ids.
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Failed to search for events with \"$message\"\n");
        continue;
    }

    // If only one event was found, we won't have an array.
    $items = $response_message->RootFolder->Items->CalendarItem;
    if (!is_array($items)) {
        $items = array($items);
    }

    // Iterate over the events that were found, printing some data for each.
    foreach ($items as $item) {
        $id = $item->ItemId->Id;
        $start = new DateTime($item->Start);
        $end = new DateTime($item->End);
        $output = 'Found event ' . $item->ItemId->Id . "\n"
            . '  Title: ' . $item->Subject . "\n"
            . '  Start: ' . $start->format('l, F jS, Y g:ia') . "\n"
            . '  End:   ' . $end->format('l, F jS, Y g:ia') . "\n\n";

        fwrite(STDOUT, $output);
    }
}
