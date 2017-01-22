<?php
/**
 * This example shows how to update the start and end times for one or more
 * calendar items. This example could be updated to to include updates for any
 * field on the event.
 */
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\UpdateItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemChangeDescriptionsType;

use \jamesiarmes\PhpEws\Enumeration\CalendarItemUpdateOperationType;
use \jamesiarmes\PhpEws\Enumeration\ConflictResolutionType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use \jamesiarmes\PhpEws\Enumeration\UnindexedFieldURIType;

use \jamesiarmes\PhpEws\Type\CalendarItemType;
use \jamesiarmes\PhpEws\Type\ItemChangeType;
use \jamesiarmes\PhpEws\Type\ItemIdType;
use \jamesiarmes\PhpEws\Type\PathToUnindexedFieldType;
use \jamesiarmes\PhpEws\Type\SetItemFieldType;

// Replace with the events to be updated along with their new start and end
// times.
$event_updates = array(
    array(
        'id' => 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAENAAAr1MfeoTJdQ7jgaw/bSgljAABPwPPwAAA=',
        'start' => new DateTime('tomorrow 3:00pm'),
        'end' => new DateTime('tomorrow 4:30pm'),
    )
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new UpdateItemType();
$request->ConflictResolution = ConflictResolutionType::ALWAYS_OVERWRITE;
$request->SendMeetingInvitationsOrCancellations = CalendarItemUpdateOperationType::SEND_TO_ALL_AND_SAVE_COPY;

// Iterate over the updated to be applied, adding each to the request.
foreach ($event_updates as $update) {
    // Build out item change request.
    $change = new ItemChangeType();
    $change->ItemId = new ItemIdType();
    $change->ItemId->Id = $update['id'];
    $change->Updates = new NonEmptyArrayOfItemChangeDescriptionsType();

    // Set the updated start time.
    $field = new SetItemFieldType();
    $field->FieldURI = new PathToUnindexedFieldType();
    $field->FieldURI->FieldURI = UnindexedFieldURIType::CALENDAR_START;
    $field->CalendarItem = new CalendarItemType();
    $field->CalendarItem->Start = $update['start']->format('c');
    $change->Updates->SetItemField[] = $field;

    // Set the updated end time.
    $field = new SetItemFieldType();
    $field->FieldURI = new PathToUnindexedFieldType();
    $field->FieldURI->FieldURI = UnindexedFieldURIType::CALENDAR_END;
    $field->CalendarItem = new CalendarItemType();
    $field->CalendarItem->End = $update['end']->format('c');
    $change->Updates->SetItemField[] = $field;

    $request->ItemChanges[] = $change;
}

$response = $client->UpdateItem($request);

// Iterate over the results, printing any error messages or ids of events that
// were updated.
$response_messages = $response->ResponseMessages->UpdateItemResponseMessage;
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $code = $response_message->ResponseCode;
        $message = $response_message->MessageText;
        fwrite(STDERR, "Failed to update event with \"$code: $message\"\n");
        continue;
    }

    // Iterate over the updated events, printing the id of each.
    foreach ($response_message->Items->CalendarItem as $item) {
        $id = $item->ItemId->Id;
        fwrite(STDOUT, "Updated event $id\n");
    }
}
