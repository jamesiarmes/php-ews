---
title:  "Email: Set Extended Property"
date:   2012-09-03
updated: 2012-09-03
category: 0.1
tags: email, mapi
---
When creating an email message using `CreateItem()`, it is saved as a draft and
says "This message has not been sent" in the web interface. This code unsets
that flag when creating an email:

```php?start_inline=1
$ews = new ExchangeWebServices($host, $user, $password, ExchangeWebServices::VERSION_2007_SP1);
$msg = new EWSType_MessageType();
$msg->MimeContent = new EWSType_MimeContentType();
$msg->MimeContent->_ = base64_encode("Mime-Version: 1.0\r\n"
    . "From: michael@contoso.com\r\n"
    . "To: amy@contoso.com\r\n"
    . "Subject: nothing\r\n"
    . "Date: Tue, 15 Feb 2011 22:06:21 -0000\r\n"
    . "Message-ID: <{0}>\r\n"
    . "X-Experimental: some value\r\n"
    . "\r\n"
    . "I have nothing further to say.\r\n");
$msg->MimeContent->CharacterSet = 'us-ascii';

// http://gsexdev.blogspot.com/2012/02/ews-managed-api-and-powershell-how-to_22.html

$msgRequest = new EWSType_CreateItemType();
$msgRequest->Items = new EWSType_NonEmptyArrayOfAllItemsType();
$msgRequest->Items->Message = $msg;

$status = new EWSType_PathToExtendedFieldType();
$status->PropertyTag = "0x0E07";
$status->PropertyType = EWSType_MapiPropertyTypeType::INTEGER;

$msg->ExtendedProperty = new EWSType_ExtendedPropertyType();
$msg->ExtendedProperty->ExtendedFieldURI = $status;
$msg->ExtendedProperty->Value = "1";
$msg->IsRead = false;

$msgRequest->SavedItemFolderId = new EWSType_TargetFolderIdType();
$sentItemsFolder = new EWSType_FolderIdType();
$sentItemsFolder->Id = 'AAMkAGE0OGI4Yzc...';
$msgRequest->SavedItemFolderId->FolderId = $sentItemsFolder;
$msgRequest->SaveItemToFolder = true;
// http://msdn.microsoft.com/en-us/library/exchange/exchangewebservices.messagedispositiontype%28v=exchg.150%29
$msgRequest->MessageDisposition = 'SaveOnly';
$msgRequest->MessageDispositionSpecified = true;

$response = $ews->CreateItem($msgRequest);
echo '<pre>' . print_r($response, true) . '</pre>';
```
