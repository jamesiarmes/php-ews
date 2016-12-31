---
title:  "Email: Get Raw Message"
date:   2012-08-30
updated: 2015-08-30
category: 0.1
tags: email
---
This is the easiest way to download a raw message using EWS and write it to
disk. We simply request the message's MimeContent, along with any other fields
you want.

```php?start_inline=1
$message_id = 'AAMkAGE0OGI4Yzc5LTI2NDQtNDc...'; // Id of the email message

$request = new EWSType_GetItemType();

$request->ItemShape = new EWSType_ItemResponseShapeType();
// Set to ID_ONLY so we can request individual items and lower bytes xferred.
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ID_ONLY;
$request->ItemShape->IncludeMimeContent = true;

// set fields we want to request
$subject = new EWSType_PathToUnindexedFieldType();
$subject->FieldURI = 'item:Subject';
$date = new EWSType_PathToUnindexedFieldType();
$date->FieldURI = 'item:DateTimeReceived';
$messageId = new EWSType_PathToUnindexedFieldType();
$messageId->FieldURI = 'message:InternetMessageId';
$isRead = new EWSType_PathToUnindexedFieldType();
$isRead->FieldURI = 'message:IsRead';

$request->ItemShape->AdditionalProperties = new EWSType_NonEmptyArrayOfPathsToElementType();
$request->ItemShape->AdditionalProperties->FieldURI = array($subject, $date, $messageId, $isRead);

$request->ItemIds = new EWSType_NonEmptyArrayOfBaseItemIdsType();
$request->ItemIds->ItemId = new EWSType_ItemIdType();
$request->ItemIds->ItemId->Id = $message_id;

$response = $ews->GetItem($request);

if ($response->ResponseMessages->GetItemResponseMessage->ResponseCode == 'NoError' &&
        $response->ResponseMessages->GetItemResponseMessage->ResponseClass == 'Success') {
    file_put_contents('message.eml', base64_decode($response->ResponseMessages->GetItemResponseMessage->Items->Message->MimeContent->_));
}

echo '<pre>' . print_r($response, true) . '</pre>';
```
