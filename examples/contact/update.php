<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\UpdateItemType;

use \jamesiarmes\PhpEws\ArrayType\NonEmptyArrayOfItemChangeDescriptionsType;

use \jamesiarmes\PhpEws\Enumeration\ConflictResolutionType;
use \jamesiarmes\PhpEws\Enumeration\EmailAddressKeyType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\ContactItemType;
use \jamesiarmes\PhpEws\Type\DeleteItemFieldType;
use \jamesiarmes\PhpEws\Type\EmailAddressDictionaryEntryType;
use \jamesiarmes\PhpEws\Type\EmailAddressDictionaryType;
use \jamesiarmes\PhpEws\Type\ItemChangeType;
use \jamesiarmes\PhpEws\Type\ItemIdType;
use \jamesiarmes\PhpEws\Type\PathToIndexedFieldType;
use \jamesiarmes\PhpEws\Type\PathToUnindexedFieldType;
use \jamesiarmes\PhpEws\Type\SetItemFieldType;

$contact_updates = array(
    array(
        'id' => 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABVAqj7AAA=',
        'email' => 'homer.simpson@example.com',
    ),
    array(
        'id' => 'AAMkADk0N2E4OTQxLWRlOTYtNGUxZC05NzE1LTU4ZmI5NGVkZTZmYQBGAAAAAADeofKHfJ96S5ndHNLg9VfeBwAr1MfeoTJdQ7jgaw/bSgljAAAAAAEOAAAr1MfeoTJdQ7jgaw/bSgljAABVAqjwAAA=',
        'email' => '',
    ),
);

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request.
$request = new UpdateItemType();
//$request->SendMeetingInvitationsOrCancellations = 'SendToNone';
//$request->MessageDisposition = 'SaveOnly';
$request->ConflictResolution = new ConflictResolutionType();
$request->ConflictResolution->_ = ConflictResolutionType::ALWAYS_OVERWRITE;

// Iterate over the contacts to be updated.
foreach ($contact_updates as $update) {
    // Build out item change request.
    $change = new ItemChangeType();
    $change->ItemId = new ItemIdType();
    $change->ItemId->Id = $update['id'];
    $change->Updates = new NonEmptyArrayOfItemChangeDescriptionsType();

    // If an email is set, then we need to set it. Otherwise, we need to delete
    // the current value.
    if (!empty($update['email'])) {
        $field = new SetItemFieldType();
        $field->IndexedFieldURI = new PathToIndexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:EmailAddress';
        $field->IndexedFieldURI->FieldIndex = EmailAddressKeyType::EMAIL_ADDRESS_1;
        $field->Contact = new ContactItemType();
        $field->Contact->EmailAddresses = new EmailAddressDictionaryType();

        $entry = new EmailAddressDictionaryEntryType();
        $entry->_ = $update['email'];
        $entry->Key = EmailAddressKeyType::EMAIL_ADDRESS_1;
        $field->Contact->EmailAddresses->Entry = $entry;
        $change->Updates->SetItemField[] = $field;
    } else {
        $field = new DeleteItemFieldType();
        $field->IndexedFieldURI = new PathToUnindexedFieldType();
        $field->IndexedFieldURI->FieldURI = 'contacts:EmailAddress';
        $field->IndexedFieldURI->FieldIndex = EmailAddressKeyType::EMAIL_ADDRESS_1;
        $change->Updates->DeleteItemField[] = $field;
    }

    $request->ItemChanges[] = $change;
}

$response = $client->UpdateItem($request);

// If we only updated one item then we won't have an array from the response.
$response_messages = $response->ResponseMessages->UpdateItemResponseMessage;
if (!is_array($response_messages)) {
    $response_messages = array($response_messages);
}

// Iterate over the results, printing any error messages or ids of contacts that
// were updated.
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Failed to update contact with \"$message\"\n");
        continue;
    }

    $id = $response_message->Items->Contact->ItemId->Id;
    fwrite(STDOUT, "Updated contact $id\n");
}
