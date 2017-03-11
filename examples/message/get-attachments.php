<?php
/**
 * This example shows how to get and save teh attachments for a message.
 * Ideally, this would be split into multiple classes (remember, single
 * responsibility principle), but for the purposes of this example we'll just
 * include it all in one file. This example can be modified to get attachments
 * for multiple emails by adding additional item ids to the request.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\GetAttachmentType;
use \jamesiarmes\PhpEws\Request\GetItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfBaseItemIdsType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfRequestAttachmentIdsType;

use \jamesiarmes\PhpEws\Enumeration\DefaultShapeNamesType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\ItemIdType;
use \jamesiarmes\PhpEws\Type\ItemResponseShapeType;
use \jamesiarmes\PhpEws\Type\RequestAttachmentIdType;

// Replace with the id of the message to retrieve attachments for and the
// destination for file attachments.
$message_id = 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEMAAAr1MfeoTJdQ7jgaw/bSgljAABlQRSTAAA=';
$file_destination = sys_get_temp_dir() . '/attachments';

// Make sure the destination directory exists and is writeable.
if (!file_exists($file_destination)) {
    mkdir($file_destination, 0777, true);
}

if (!is_writable($file_destination)) {
    throw new Exception("Destination $file_destination is not writable.");
}

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the get item request.
$request = new GetItemType();
$request->ItemShape = new ItemResponseShapeType();
$request->ItemShape->BaseShape = DefaultShapeNamesType::ALL_PROPERTIES;
$request->ItemIds = new NonEmptyArrayOfBaseItemIdsType();

// Add the message id to the request.
$item = new ItemIdType();
$item->Id = $message_id;
$request->ItemIds->ItemId[] = $item;

$response = $client->GetItem($request);

// Iterate over the results, printing any error messages or receiving
// attachments.
$response_messages = $response->ResponseMessages->GetItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Failed to get message with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the messages, getting the attachments for each.
    $attachments = array();
    foreach ($response_message->Items->Message as $item) {
        // If there are no attachments for the item, move on to the next
        // message.
        if (empty($item->Attachments)) {
            continue;
        }

        // Iterate over the attachments for the message.
        foreach ($item->Attachments->FileAttachment as $attachment) {
            $attachments[] = $attachment->AttachmentId->Id;
        }
    }

    // Build the request to get the attachments.
    $request = new GetAttachmentType();
    $request->AttachmentIds = new NonEmptyArrayOfRequestAttachmentIdsType();

    // Iterate over the attachments for the message.
    foreach ($attachments as $attachment_id) {
        $id = new RequestAttachmentIdType();
        $id->Id = $attachment_id;
        $request->AttachmentIds->AttachmentId[] = $id;
    }

    $response = $client->GetAttachment($request);

    // Iterate over the response messages, printing any error messages or
    // saving the attachments.
    $attachment_response_messages = $response->ResponseMessages
        ->GetAttachmentResponseMessage;
    foreach ($attachment_response_messages as $attachment_response_message) {
        // Make sure the request succeeded.
        if ($attachment_response_message->ResponseClass
            != ResponseClassType::SUCCESS) {
            $code = $response_message->ResponseCode;
            $message = $response_message->MessageText;
            fwrite(
                STDERR,
                "Failed to get attachment with \"$code: $message\"\n"
            );
            continue;
        }

        // Iterate over the file attachments, saving each one.
        $attachments = $attachment_response_message->Attachments
            ->FileAttachment;
        foreach ($attachments as $attachment) {
            $path = "$file_destination/" . $attachment->Name;
            file_put_contents($path, $attachment->Content);
            fwrite(STDOUT, "Created attachment $path\n");
        }
    }
}
