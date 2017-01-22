<?php
/**
 * This example shows how to reply all to a message. You can reply all to
 * multiple messages by adding additional replies to ReplyAllToItem.
 *
 * Note that the change key is required for this operation.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\CreateItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;

use jamesiarmes\PhpEws\Enumeration\BodyTypeType;
use jamesiarmes\PhpEws\Enumeration\MessageDispositionType;
use jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\BodyType;
use \jamesiarmes\PhpEws\Type\ItemIdType;
use \jamesiarmes\PhpEws\Type\ReplyAllToItemType;

// Replace with the id and change key of the message to reply all to.
$id = 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEMAAAr1MfeoTJdQ7jgaw/bSgljAABaFXCUAAA=';
$change_key = 'CQAAABYAAAAr1MfeoTJdQ7jgaw/bSgljAABfUoOP';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new CreateItemType();
$request->Items = new NonEmptyArrayOfAllItemsType();
$request->MessageDisposition = MessageDispositionType::SEND_AND_SAVE_COPY;

// Add the reply to the request.
$reply = new ReplyAllToItemType();
$reply->ReferenceItemId = new ItemIdType();
$reply->ReferenceItemId->Id = $id;
$reply->ReferenceItemId->ChangeKey = $change_key;
$reply->NewBodyContent = new BodyType();
$reply->NewBodyContent->BodyType = BodyTypeType::TEXT;
$reply->NewBodyContent->_ = 'Replying to all!';
$request->Items->ReplyAllToItem[] = $reply;

$response = $client->CreateItem($request);

// Iterate over the results, printing any error messages or reply message ids.
$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Reply failed to create with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the created replies, printing the id for each.
    fwrite(STDOUT, "Successfully created reply.\n");
}
