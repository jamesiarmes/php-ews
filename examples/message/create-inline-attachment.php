<?php
/**
 * This example shows how to create and send a message with an inline image
 * attachment.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\CreateItemType;

use \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttachmentsType;

use \jamesiarmes\PhpEws\Enumeration\BodyTypeType;
use \jamesiarmes\PhpEws\Enumeration\MessageDispositionType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\BodyType;
use \jamesiarmes\PhpEws\Type\EmailAddressType;
use \jamesiarmes\PhpEws\Type\FileAttachmentType;
use \jamesiarmes\PhpEws\Type\MessageType;
use \jamesiarmes\PhpEws\Type\SingleRecipientType;

// Replace with the path to the image file to be attached and the recipient
// information.
$file_path = '../assets/exchange.png';
$recipient_email = '';
$recpient_name = '';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Open file handlers.
$file = new SplFileObject($file_path);
$finfo = finfo_open();
$filename = $file->getBasename();

// Build the request.
$request = new CreateItemType();
$request->Items = new NonEmptyArrayOfAllItemsType();

// Save the message, but do not send it.
$request->MessageDisposition = MessageDispositionType::SEND_AND_SAVE_COPY;

// Create the message.
$message = new MessageType();
$message->Subject = 'EWS Inline Image';
$message->ToRecipients = new ArrayOfRecipientsType();
$message->Attachments = new NonEmptyArrayOfAttachmentsType();

// Set the sender.
$message->From = new SingleRecipientType();
$message->From->Mailbox = new EmailAddressType();
$message->From->Mailbox->EmailAddress = $username;

// Set the recipient.
$recipient = new EmailAddressType();
$recipient->Name = $recpient_name;
$recipient->EmailAddress = $recipient_email;
$message->ToRecipients->Mailbox[] = $recipient;

// Set the message body.
$message->Body = new BodyType();
$message->Body->BodyType = BodyTypeType::HTML;
$message->Body->_ = <<<BODY
<html>
  <head></head>
  <body>
    <p>This is the Exchange logo:</p>
    <img width="256" height="256" id="0" src="cid:$filename">
  </body>
</html>
BODY;

// Build the file attachment.
$attachment = new FileAttachmentType();
$attachment->IsInline = true;
$attachment->Content = $file->openFile()->fread($file->getSize());
$attachment->Name = $filename;
$attachment->IsInline = true;
$attachment->ContentType = finfo_file($finfo, $file_path);
$attachment->ContentId = $filename;
$message->Attachments->FileAttachment[] = $attachment;

// Add the message to the request.
$request->Items->Message[] = $message;

$response = $client->CreateItem($request);

// Iterate over the results, printing any error messages.
$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Message failed to create with \"$code: $message\"\n");
        continue;
    }

    fwrite(STDOUT, "Message sent successfully.\n");
}
