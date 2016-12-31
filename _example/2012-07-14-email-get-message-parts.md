---
title:  "Email: Get Message Parts"
date:   2012-07-14
updated: 2012-07-14
category: 0.1
tags: email
---
This example demonstrates how to retrieve the parts of a message.

```php?start_inline=1
$ews = new ExchangeWebServices($host, $username, $password, $version);
$message_id = 'your message id here';

// Build the request for the parts.
$request = new EWSType_GetItemType();
$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;
// You can get the body as HTML, text or "best".
$request->ItemShape->BodyType = EWSType_BodyTypeResponseType::HTML;

// Add the body property.
$body_property = new EWSType_PathToUnindexedFieldType();
$body_property->FieldURI = 'item:Body';
$request->ItemShape->AdditionalProperties = new EWSType_NonEmptyArrayOfPathsToElementType();
$request->ItemShape->AdditionalProperties->FieldURI = array($body_property);

$request->ItemIds = new EWSType_NonEmptyArrayOfBaseItemIdsType();
$request->ItemIds->ItemId = array();

// Add the message to the request.
$message_item = new EWSType_ItemIdType();
$message_item->Id = $message_id;
$request->ItemIds->ItemId[] = $message_item;

$response = $ews->GetItem($request);
var_dump($response);
```

You could retrieve the parts for multiple messages by adding a `ItemIdType` for
each for each to `$request->ItemIds->ItemId`. In the example below, assume that
`$messages_response` is the result of a `FindItem` request for messages. See the
[Email: List](/php-ews/doc/0.1/examples/email-list.html) page for more
information on retrieving a list of email messages.

```php?start_inline=1
// Build the request for the parts.
$parts_request = new EWSType_GetItemType();
$parts_request->ItemShape = new EWSType_ItemResponseShapeType();
$parts_request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;
// You can get the body as HTML, text or "best".
$parts_request->ItemShape->BodyType = EWSType_BodyTypeResponseType::HTML;

// Add the body property.
$body_property = new EWSType_PathToUnindexedFieldType();
$body_property->FieldURI = 'item:Body';
$parts_request->ItemShape->AdditionalProperties = new EWSType_NonEmptyArrayOfPathsToElementType();
$parts_request->ItemShape->AdditionalProperties->FieldURI = array($body_property);

$parts_request->ItemIds = new EWSType_NonEmptyArrayOfBaseItemIdsType();
$parts_request->ItemIds->ItemId = array();

// Iterate over the messages and add each to the parts request.
$messages = $messages_response->ResponseMessages->FindItemResponseMessage->RootFolder->Items->Message;
foreach ($messages as $message) {
  // Add the message to the request.
  $message_item = new EWSType_ItemIdType();
  $message_item->Id = $message->ItemId->Id;
  $parts_request->ItemIds->ItemId[] = $message_item;
}

$parts_response = $ews->GetItem($parts_request);
var_dump($parts_response);
```
