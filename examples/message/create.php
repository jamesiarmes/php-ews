<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\CreateItemType;

use \jamesiarmes\PhpEws\ArrayType\ArrayOfRecipientsType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;

use \jamesiarmes\PhpEws\Enumeration\BodyTypeType;
use \jamesiarmes\PhpEws\Enumeration\MessageDispositionType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\BodyType;
use \jamesiarmes\PhpEws\Type\EmailAddressType;
use \jamesiarmes\PhpEws\Type\MessageType;
use \jamesiarmes\PhpEws\Type\SingleRecipientType;

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request,
$request = new CreateItemType();
$request->Items = new NonEmptyArrayOfAllItemsType();

// Save the message, but do not send it.
$request->MessageDisposition= new MessageDispositionType();
$request->MessageDisposition->_ = MessageDispositionType::SAVE_ONLY;

// Create the message.
$message = new MessageType();
$message->Subject = 'EWS Test Message';
$message->ToRecipients = new ArrayOfRecipientsType();

// Set the sender.
$message->From = new SingleRecipientType();
$message->From->Mailbox = new EmailAddressType();
$message->From->Mailbox->EmailAddress = $username;

// Set the recipient.
$recipient = new EmailAddressType();
$recipient->Name = 'Homer Simpson';
$recipient->EmailAddress = 'hsimpson@example.com';
$message->ToRecipients->Mailbox[] = $recipient;

// Set the message body.
$message->Body = new BodyType();
$message->Body->BodyType = new BodyTypeType();
$message->Body->BodyType->_ = BodyTypeType::TEXT;
$message->Body->_ = <<<BODY
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris posuere ante mauris, ultrices suscipit metus sollicitudin luctus. Donec quis orci mi. Donec molestie lobortis ligula, sed blandit nibh varius ut. Donec semper, risus id mollis eleifend, ante justo tristique arcu, eu ornare justo ex ut tellus. Aenean condimentum orci blandit, dapibus nulla nec, condimentum massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis non nunc id lectus tempor condimentum. Nulla eu pretium urna. Sed sed nunc sapien. Donec ornare orci interdum, fermentum augue sit amet, pharetra dui. Vivamus varius justo mi, ut maximus augue fermentum sed. Vestibulum ac lorem condimentum leo pharetra porttitor. Suspendisse eu mauris ultrices, mollis diam vel, fringilla lorem.

Etiam elit sem, consequat nec scelerisque id, ornare sed eros. Aliquam sit amet varius mauris. Nulla a arcu massa. Aenean malesuada massa auctor vulputate pellentesque. Vestibulum porta aliquet tempus. Nulla ultrices mattis enim. Pellentesque facilisis sodales ligula vitae iaculis. Donec vulputate vel ex id euismod. Cras magna turpis, commodo id congue sed, consectetur vitae est. Suspendisse non fermentum sapien, a pharetra risus. Nullam non imperdiet tellus. Nullam ac elementum ligula, pulvinar dictum dolor.

Sed vehicula elit at neque sollicitudin, quis blandit massa feugiat. Nulla turpis ligula, gravida non risus ac, interdum elementum tellus. Mauris elementum nibh vel scelerisque maximus. Vestibulum nisl dui, volutpat vitae lacus eu, pellentesque fringilla ipsum. Etiam et diam vestibulum, mollis odio lobortis, lacinia lectus. Nullam odio est, molestie vel elementum vitae, sodales in mi. Nunc aliquet nibh eu dolor vulputate tincidunt. Sed nec fringilla ex. Praesent fermentum, erat eget rhoncus varius, erat eros lacinia turpis, id aliquam ex velit a purus.

Aliquam tempor lorem at mattis sodales. Curabitur venenatis dolor est, molestie ornare sapien tempor vel. Sed porttitor ex ac lacus feugiat tristique. Cras vulputate felis sed arcu tempus porta. Quisque ut orci at leo posuere scelerisque. Mauris massa mi, accumsan eget ligula nec, tristique tristique elit. Donec sit amet velit et lorem viverra euismod non id felis. Nulla et nunc nisi. Ut vitae purus varius, aliquam quam id, pharetra ante. Nulla quis mi fermentum, interdum eros a, porta justo. Morbi at ex quis dui pretium pharetra. Aenean vulputate nibh ex, non ullamcorper eros pretium a. Nulla quis leo ultrices, finibus est sit amet, auctor elit. Pellentesque tempus velit id varius tempor. Nulla blandit et justo nec bibendum.

In pulvinar faucibus lectus, at tristique elit posuere non. Praesent bibendum, massa id sagittis aliquet, sapien nulla volutpat quam, vel fermentum risus odio a ipsum. Integer sem ex, sagittis eu elementum in, congue sit amet lorem. Proin a mi quis tellus tempus porta sit amet non ligula. Sed odio leo, vehicula sit amet purus id, pretium imperdiet massa. In lorem purus, mollis at iaculis scelerisque, ultricies et lorem. Suspendisse eu elit ornare, feugiat metus nec, pretium metus. Vestibulum bibendum ut dui sodales semper. Sed finibus posuere lacus a imperdiet. Donec semper euismod massa quis gravida. Integer congue libero in metus tempus congue.
BODY;

// Add the message to the request.
$request->Items->Message[] = $message;

$response = $client->CreateItem($request);

// If we only created one item then we won't have an array from the response.
$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
if (!is_array($response_messages)) {
    $response_messages = array($response_messages);
}

// Iterate over the results, printing any error messages or message ids.
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Message failed to create with \"$message\"\n");
        continue;
    }

    $id = $response_message->Items->Message->ItemId->Id;
    fwrite(STDOUT, "Created message $id\n");
}

