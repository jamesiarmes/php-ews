---
title:  "Email: Reply to All"
date:   2013-08-27
updated: 2016-08-19
category: 0.1
tags: email
---
```php?start_inline=1
$ews = new ExchangeWebServices(url, username, password, ExchangeWebServices::VERSION_2010_SP1);

$msg = new EWSType_ReplyAllToItemType();

// In Case you need to Add a CC
$cc = new EWSType_ArrayOfRecipientsType();
$cc->Mailbox = new EWSType_EmailAddressType();
$cc->Mailbox->EmailAddress = 'example@example.com';
$cc->Mailbox->Name = 'DisplayName';

$msg->CcRecipients = $cc;

$msg->ReferenceItemId = new EWSType_ItemIdType();
$msg->ReferenceItemId->Id = $id;
$msg->ReferenceItemId->ChangeKey = $changeKey;

$msg->NewBodyContent = new EWSType_BodyType();
$msg->NewBodyContent->BodyType = 'HTML';
$msg->NewBodyContent->_ = 'HTML Content Here';

$msgRequest = new EWSType_CreateItemType();
$msgRequest->Items = new EWSType_NonEmptyArrayOfAllItemsType();
$msgRequest->Items->ReplyAllToItem = $msg;
$msgRequest->MessageDisposition = 'SendAndSaveCopy';
$msgRequest->MessageDispositionSpecified = TRUE;

$response = $ews->CreateItem($msgRequest);

return $response->ResponseMessages->CreateItemResponseMessage->ResponseCode;
```
