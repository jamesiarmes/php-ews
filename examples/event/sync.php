<?php
/**
 * This example shows how to sync items in the user's calendar folder. If this
 * is the first sync, leave the sync state empty to retrieve all items in the
 * folder. If this is a subsequent sync, replace $sync_state with the sync state
 * from the previous request.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\SyncFolderItemsType;

use \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;
use \jamesiarmes\PhpEws\Type\ItemResponseShapeType;
use \jamesiarmes\PhpEws\Type\TargetFolderIdType;

// Replace this with the previous sync state, unless this your first sync.
$sync_state = null;

// Replace with the timezone you would like the user's availability displayed
// in.
$timezone = 'Eastern Standard Time';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);
$client->setTimezone($timezone);

// Build the request.
$request = new SyncFolderItemsType();
$request->SyncState = $sync_state;
$request->MaxChangesReturned = 512;
$request->ItemShape = new ItemResponseShapeType;
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
$request->SyncFolderId = new TargetFolderIdType;

// Set the folder to sync events from.
$folder = new DistinguishedFolderIdType;
$folder->Id = DistinguishedFolderIdNameType::CALENDAR;
$request->SyncFolderId->DistinguishedFolderId = $folder;

$response = $client->SyncFolderItems($request);

// Iterate over the results, printing any error messages or items to sync.
$response_messages = $response->ResponseMessages
    ->SyncFolderItemsResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Failed to sync folder with \"$code: $message\"\n");
        continue;
    }

    // Make sure to store this for the next sync.
    $new_sync_state = $response_message->SyncState;
    fwrite(STDOUT, "New sync state: $new_sync_state\n\n");

    // Iterate over all events that have been added.
    fwrite(STDOUT, "The following events have been added:\n");
    foreach ($response_message->Changes->Create as $change) {
        $id = $change->CalendarItem->ItemId->Id;
        $title = $change->CalendarItem->Subject;
        fwrite(STDOUT, "- $title: $id\n");
    }

    // Iterate over all events that have been read.
    fwrite(STDOUT, "\nThe following events have been read:\n");
    foreach ($response_message->Changes->ReadFlagChange as $change) {
        $id = $change->CalendarItem->ItemId->Id;
        $title = $change->CalendarItem->Subject;
        fwrite(STDOUT, "- $title: $id\n");
    }

    // Iterate over all events that have been updated.
    fwrite(STDOUT, "\nThe following events have been updated:\n");
    foreach ($response_message->Changes->Update as $change) {
        $id = $change->CalendarItem->ItemId->Id;
        $title = $change->CalendarItem->Subject;
        fwrite(STDOUT, "- $title: $id\n");
    }

    // Iterate over all events that have been deleted.
    fwrite(STDOUT, "\nThe following events have been deleted:\n");
    foreach ($response_message->Changes->Delete as $change) {
        $id = $change->CalendarItem->ItemId->Id;
        $title = $change->CalendarItem->Subject;
        fwrite(STDOUT, "- $title: $id\n");
    }
}
