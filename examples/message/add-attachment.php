<?php
/**
 * This example shows how to add an attachment to an existing message. See
 * the message/create example for creating a new message and the message/send
 * example for sending a message that was created as a draft.
 */

require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\CreateAttachmentType;

use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttachmentsType;

use \jamesiarmes\PhpEws\Type\FileAttachmentType;
use \jamesiarmes\PhpEws\Type\ItemIdType;

// Replace with the id of the created message and path to the file to be attach.
$message_id = 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEPAAAr1MfeoTJdQ7jgaw/bSgljAABueQnrAAA=';
$file_path = '../assets/exchange.png';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Open file handlers.
$file = new SplFileObject($file_path);
$finfo = finfo_open();

// Build the request,
$request = new CreateAttachmentType();
$request->ParentItemId = new ItemIdType();
$request->ParentItemId->Id = $message_id;
$request->Attachments = new NonEmptyArrayOfAttachmentsType();

// Build the file attachment.
$attachment = new FileAttachmentType();
$attachment->Content = $file->openFile()->fread($file->getSize());
$attachment->Name = $file->getBasename();
$attachment->ContentType = finfo_file($finfo, $file_path);
$request->Attachments->FileAttachment[] = $attachment;

$response = $client->CreateAttachment($request);

// Iterate over the results, printing any error messages or the id of the new
// attachment.
$response_messages = $response->ResponseMessages
    ->CreateAttachmentResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "Failed to create attachment with \"$code: $message\"\n"
        );
        continue;
    }

    // Iterate over the created attachments, printing the id of each.
    foreach ($response_message->Attachments->FileAttachment as $attachment) {
        $id = $attachment->AttachmentId->Id;
        fwrite(STDOUT, "Created attachment $id\n");
    }
}
