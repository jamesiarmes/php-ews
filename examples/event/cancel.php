<?php
/**
 * This example cancels a calendar event, sends a message to all attendees and
 * saves a copy of the message to the user's sent folder. Make sure to update
 * the event id and change key below to match those of the event you wish to
 * cancel. For this request, the change key is required.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\CreateItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;

use \jamesiarmes\PhpEws\Enumeration\MessageDispositionType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\CancelCalendarItemType;
use \jamesiarmes\PhpEws\Type\ItemIdType;

// Replace these values with those of the event you wish to cancel.
$event_id = 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAENAAAr1MfeoTJdQ7jgaw/bSgljAABaFXhjAAA=';
$change_key = 'DwAAABYAAAAr1MfeoTJdQ7jgaw/bSgljAABaHQv5';

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

$request = new CreateItemType();
$request->MessageDisposition = MessageDispositionType::SEND_AND_SAVE_COPY;
$request->Items = new NonEmptyArrayOfAllItemsType();

$cancellation = new CancelCalendarItemType();
$cancellation->ReferenceItemId = new ItemIdType();
$cancellation->ReferenceItemId->Id = $event_id;
$cancellation->ReferenceItemId->ChangeKey = $change_key;
$request->Items->CancelCalendarItem[] = $cancellation;

$response = $client->CreateItem($request);

// Iterate over the results, printing any error messages.
$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(
            STDERR,
            "Cancellation failed to create with \"$code: $message\"\n"
        );
        continue;
    }
}
