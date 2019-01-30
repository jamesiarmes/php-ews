<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\FindItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseFolderIdsType;

use \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use \jamesiarmes\PhpEws\Enumeration\DistinguishedFolderIdNameType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\DistinguishedFolderIdType;
use \jamesiarmes\PhpEws\Type\ItemResponseShapeType;

use \jamesiarmes\PhpEws\Type\EmailAddressType;

// Replace with the date range you want to search in. As is, this will find all
// messages within the current calendar year.
$start_date = new DateTime('January 1 00:00:00');
$end_date = new DateTime('December 31 23:59:59');
$timezone = 'Eastern Standard Time';
$other_email = 'shared_email_inbox@example.com';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);
$client->setTimezone($timezone);

$request = new FindItemType();
$request->ParentFolderIds = new NonEmptyArrayOfBaseFolderIdsType();


// Return all message properties.
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;

// Search in the inbox.
$folder_id = new DistinguishedFolderIdType();
$folder_id->Id = DistinguishedFolderIdNameType::INBOX;

// Set the shared email address where to search for the Inbox
$folder_id->Mailbox = new EmailAddressType();
$folder_id->Mailbox->EmailAddress = $other_email;

$request->ParentFolderIds->DistinguishedFolderId[] = $folder_id;

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

    // Iterate over the messages that were found, printing the subject for each.
    $items = $response_message->RootFolder->Items->Message;
    foreach ($items as $item) {
        $subject = $item->Subject;
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "$subject: $id\n");
    }
}
