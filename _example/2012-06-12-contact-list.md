---
title:  "Contact: List"
date:   2012-06-12
updated: 2012-06-12
category: "0.1"
tags: contact
---
```php?start_inline=1
$ews = new ExchangeWebServices($host,  $user, $password);
$request = new EWSType_FindItemType();

$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

$request->ContactsView = new EWSType_ContactsViewType();
$request->ContactsView->InitialName = 'a';
$request->ContactsView->FinalName = 'z';

$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CONTACTS;

$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;

$response = $ews->FindItem($request);
echo '<pre>'.print_r($response, true).'</pre>';
```
