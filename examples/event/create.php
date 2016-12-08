<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\CreateItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAllItemsType;
use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfAttendeesType;

use \jamesiarmes\PhpEws\Enumeration\CalendarItemCreateOrDeleteOperationType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;
use \jamesiarmes\PhpEws\Enumeration\RoutingType;

use \jamesiarmes\PhpEws\Type\AttendeeType;
use \jamesiarmes\PhpEws\Type\CalendarItemType;
use \jamesiarmes\PhpEws\Type\EmailAddressType;

// Replace this with your desired start/end times and guests.
$start = new DateTime('tomorrow 4:00pm');
$end = new DateTime('tomorrow 5:00pm');
$guests = array(
    array(
        'name' => 'Homer Simpson',
        'email' => 'hsimpson@example.com',
    ),
    array(
        'name' => 'Marge Simpson',
        'email' => 'msimpson@example.com',
    ),
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request,
$request = new CreateItemType();
$request->SendMeetingInvitations = new CalendarItemCreateOrDeleteOperationType();
$request->SendMeetingInvitations->_ = CalendarItemCreateOrDeleteOperationType::SEND_ONLY_TO_ALL;
$request->Items = new NonEmptyArrayOfAllItemsType();

// Build the event to be added.
$event = new CalendarItemType();
$event->RequiredAttendees = new NonEmptyArrayOfAttendeesType();
$event->Start = $start->format('c');
$event->End = $start->format('c');
$event->title = 'EWS Test Event';

// Iterate over the guests, adding each as an attendee to the request.
foreach ($guests as $guest) {
    $attendee = new AttendeeType();
    $attendee->Mailbox = new EmailAddressType();
    $attendee->Mailbox->EmailAddress = $guest['email'];
    $attendee->Mailbox->Name = $guest['name'];
    $attendee->Mailbox->RoutingType = new RoutingType();
    $attendee->Mailbox->RoutingType->_ = RoutingType::SMTP;
    $event->RequiredAttendees->Attendee[] = $attendee;
}

// Add the event to the request. You could add multiple events to create more
// than one in a single request.
$request->Items->CalendarItem[] = $event;

$response = $client->CreateItem($request);

// If we only created one item then we won't have an array from the response.
$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
if (!is_array($response_messages)) {
    $response_messages = array($response_messages);
}

// Iterate over the results, printing any error messages or event ids.
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Event failed to create with \"$message\"\n");
        continue;
    }

    $id = $response_message->Items->CalendarItem->ItemId->Id;
    fwrite(STDOUT, "Created event $id\n");
}


