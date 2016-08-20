---
title:  "Email: List"
date:   2012-06-12
updated: 2015-11-10
category: "0.1"
tags: email
---
This example shows how to retrieve all emails from your inbox.

```php?start_inline=1
// NOTE: mind the version of exchange you are connecting to.
$ews = new ExchangeWebServices($host, $username, $password, ExchangeWebServices::VERSION_2007_SP1);

$request = new EWSType_FindItemType();

$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::DEFAULT_PROPERTIES;

$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;

$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::INBOX;

// sort order
$request->SortOrder = new EWSType_NonEmptyArrayOfFieldOrdersType();
$request->SortOrder->FieldOrder = array();
$order = new EWSType_FieldOrderType();
// sorts mails so that oldest appear first
// more field uri definitions can be found from types.xsd (look for UnindexedFieldURIType)
$order->FieldURI->FieldURI = 'item:DateTimeReceived'; 
$order->Order = 'Ascending'; 
$request->SortOrder->FieldOrder[] = $order;

$response = $ews->FindItem($request);
echo '<pre>'.print_r($response, true).'</pre>';
```

As a word of warning, this example will fail if there are more items to be
returned than the server response limit allows (Exchange default is generally
1000). To ensure you always get a sensible response, always use paging. See
[Email: List with Page Limit](/php-ews/doc/0.1/examples/email-list-with-page-limit.html).
