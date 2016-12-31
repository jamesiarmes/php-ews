---
title:  "Contact: Update"
date:   2012-06-12
updated: 2012-06-12
category: 0.1
tags: contact
---
This example shows example on how to update 3 types of fields: simple, indexed and extended

```php?start_inline=1
// Define the contact to be updated.
$contact_id = '<existing contact id>';
$contact_change_key = '<existing contact change key>';

$ews = new ExchangeWebServices($host, $username, $password, $version);

$request = new EWSType_UpdateItemType();

$request->SendMeetingInvitationsOrCancellations = 'SendToNone';
$request->MessageDisposition = 'SaveOnly';
$request->ConflictResolution = 'AlwaysOverwrite';
$request->ItemChanges = array();

// Build out item change request.
$change = new EWSType_ItemChangeType();
$change->ItemId = new EWSType_ItemIdType();
$change->ItemId->Id = $contact_id;
$change->ItemId->ChangeKey = $contact_change_key;
$change->Updates = new EWSType_NonEmptyArrayOfItemChangeDescriptionsType();
$change->Updates->SetItemField = array(); // Array of fields to be update
$change->Updates->DeleteItemField = array(); // Array of fields to be removed

// Update Firstname (simple property)
$field = new EWSType_SetItemFieldType();
$field->FieldURI->FieldURI = 'contacts:GivenName';
$field->Contact = new EWSType_ContactItemType();
$field->Contact->GivenName = 'Gomer';

$change->Updates->SetItemField[] = $field;

// Update Lastname (simple property)
$field = new EWSType_SetItemFieldType();
$field->FieldURI->FieldURI = 'contacts:Surname';
$field->Contact = new EWSType_ContactItemType();
$field->Contact->Surname = 'S1mps0n';

$change->Updates->SetItemField[] = $field;
			
// Update Email1 (indexed property).
$field = new EWSType_SetItemFieldType();
$field->IndexedFieldURI->FieldURI = 'contacts:EmailAddress';
$field->IndexedFieldURI->FieldIndex = EWSType_EmailAddressKeyType::EMAIL_ADDRESS_1;

$field->Contact = new EWSType_ContactItemType();
$field->Contact->EmailAddresses = new EWSType_EmailAddressDictionaryType();

$entry = new EWSType_EmailAddressDictionaryEntryType();
$entry->_ = 'homer.simpson@springfield.net';
$entry->Key = EWSType_EmailAddressKeyType::EMAIL_ADDRESS_1;

$field->Contact->EmailAddresses->Entry = $entry;

$change->Updates->SetItemField[] = $field;

// Delete Home Phone (indexed property). Simply setting empty string will not work.
$field = new stdClass();
$field->IndexedFieldURI->FieldURI = 'contacts:PhoneNumber';
$field->IndexedFieldURI->FieldIndex = EWSType_PhoneNumberKeyType::HOME_PHONE;

$change->Updates->DeleteItemField[] = $field;	
			
// Title (extended property)
$contact = new EWSType_ItemType();

// Build the extended property and set it on the item.
$property = new EWSType_ExtendedPropertyType();
$property->ExtendedFieldURI = new EWSType_PathToExtendedFieldType();
$property->ExtendedFieldURI->PropertyTag = '0x3A45';
$property->ExtendedFieldURI->PropertyType = EWSType_MapiPropertyTypeType::STRING;
$property->Value = 'Duh';
$contact->ExtendedProperty = $property;

// Build the set item field object and set the item on it.
$field = new EWSType_SetItemFieldType();
$field->ExtendedFieldURI = new EWSType_PathToExtendedFieldType();
$field->ExtendedFieldURI->PropertyTag = '0x3A45';
$field->ExtendedFieldURI->PropertyType = EWSType_MapiPropertyTypeType::STRING;
$field->Contact = $contact;

$change->Updates->SetItemField[] = $field;

// Set all changes
$request->ItemChanges[] = $change;

// Send request
$response = $ews->UpdateItem($request);
echo '<pre>'.print_r($response, true).'</pre>';
```
