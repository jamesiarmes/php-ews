<?php
/**
 * This example will set the photo for a contact. Replace the contact id below
 * with the id of the contact to set the photo for, and the file path with path
 * to the photo to be set.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\CreateAttachmentType;

use \jamesiarmes\PhpEws\ArrayType\ArrayOfAttachmentsType;

use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\FileAttachmentType;
use \jamesiarmes\PhpEws\Type\ItemIdType;

// Replace with appropriate contact id and photo path.
$contact_id = 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABjon+LAAA=';
$file_path = '../assets/contact.jpg';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Open file handlers.
$file = new SplFileObject($file_path);
$finfo = finfo_open();

// Build the request.
$request = new CreateAttachmentType();
$request->ParentItemId = new ItemIdType();
$request->ParentItemId->Id = $contact_id;
$request->Attachments = new ArrayOfAttachmentsType();

// Build the file attachment for the contact photo.
$attachment = new FileAttachmentType();
$attachment->Content = $file->openFile()->fread($file->getSize());
$attachment->Name = $file->getBasename();
$attachment->ContentType = finfo_file($finfo, $file_path);
$attachment->IsContactPhoto = true;
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
