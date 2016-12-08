<?php
require_once '../../vendor/autoload.php';

use \jamesiarmes\PhpEws\Client;
use \jamesiarmes\PhpEws\Request\CreateItemType;

use \jamesiarmes\PhpEws\Enumeration\BodyTypeType;
use \jamesiarmes\PhpEws\Enumeration\EmailAddressKeyType;
use \jamesiarmes\PhpEws\Enumeration\FileAsMappingType;
use \jamesiarmes\PhpEws\Enumeration\MapiPropertyTypeType;
use \jamesiarmes\PhpEws\Enumeration\PhoneNumberKeyType;
use \jamesiarmes\PhpEws\Enumeration\PhysicalAddressKeyType;
use \jamesiarmes\PhpEws\Enumeration\ResponseClassType;

use \jamesiarmes\PhpEws\Type\EmailAddressDictionaryEntryType;
use \jamesiarmes\PhpEws\Type\EmailAddressDictionaryType;
use \jamesiarmes\PhpEws\Type\ExtendedPropertyType;
use \jamesiarmes\PhpEws\Type\PathToExtendedFieldType;
use \jamesiarmes\PhpEws\Type\PhoneNumberDictionaryEntryType;
use \jamesiarmes\PhpEws\Type\PhysicalAddressDictionaryEntryType;
use \jamesiarmes\PhpEws\Type\PhoneNumberDictionaryType;

// Set connection information.
$host = '';
$username = '';
$password = '';
$version = Client::VERSION_2016;

$client = new Client($host, $username, $password, $version);

// Build the request object.
$request = new CreateItemType();
$contact = new \jamesiarmes\PhpEws\Type\ContactItemType();
$contact->GivenName = 'Homer';
$contact->Surname = 'Simpson';
$contact->PhoneNumbers = new PhoneNumberDictionaryType();
$contact->EmailAddresses = new EmailAddressDictionaryType();
$contact->PhoneNumbers = new PhoneNumberDictionaryType();
$contact->ExtendedProperty = new ExtendedPropertyType();

// Set an email address.
$email = new EmailAddressDictionaryEntryType();
$email->Key = new EmailAddressKeyType();
$email->Key->_ = EmailAddressKeyType::EMAIL_ADDRESS_1;
$email->_ = 'hsimpson@example.com';
$contact->EmailAddresses->Entry[] = $email;

// Set an address.
$address = new PhysicalAddressDictionaryEntryType();
$address->Key = new PhysicalAddressKeyType();
$address->Key->_ = PhysicalAddressKeyType::HOME;
$address->Street = '742 Evergreen Terrace';
$address->City = 'Springfield';
$address->State = 'PA';
$address->PostalCode = '19064';
$address->CountryOrRegion = 'USA';
$contact->PhysicalAddresses->Entry[] = $address;

// Set a phone number.
$phone = new PhoneNumberDictionaryEntryType();
$phone->Key = new PhoneNumberKeyType();
$phone->Key->_ = PhoneNumberKeyType::HOME_PHONE;
$phone->_ = '(610) 555-3223';
$contact->PhoneNumbers->Entry[] = $phone;

// Set contact title as an extended property.
$property = new \jamesiarmes\PhpEws\Type\ExtendedPropertyType();
$property->ExtendedFieldURI = new PathToExtendedFieldType();
$property->ExtendedFieldURI->PropertyTag = '0x3A45';
$property->ExtendedFieldURI->PropertyType = MapiPropertyTypeType::STRING;
$property->Value = 'Mr.';
$contact->ExtendedProperty = $property;

// Set the "file as" mapping to "first name last name".
$contact->FileAsMapping = new FileAsMappingType();
$contact->FileAsMapping->_ = FileAsMappingType::FIRST_SPACE_LAST;

// Set the contact body (this is the "Notes" field in Outlook).
$contact->Body = new \jamesiarmes\PhpEws\Type\BodyType();
$contact->Body->BodyType = new BodyTypeType();
$contact->Body->BodyType->_ = BodyTypeType::TEXT;
$contact->Body->_ = 'Test body.';

$request->Items->Contact[] = $contact;
$response = $client->CreateItem($request);

// If we only created one item then we won't have an array from the response.
$response_messages = $response->ResponseMessages->CreateItemResponseMessage;
if (!is_array($response_messages)) {
    $response_messages = array($response_messages);
}

// Iterate over the results, printing any error messages or contact ids.
foreach ($response_messages as $response_message) {
    // Make sure the request succeeded.
    if ($response_message->ResponseClass != ResponseClassType::SUCCESS) {
        $message = $response_message->ResponseCode;
        fwrite(STDERR, "Contact failed to create with \"$message\"\n");
        continue;
    }

    $id = $response_message->Items->Contact->ItemId->Id;
    fwrite(STDOUT, "Created contact $id\n");
}
