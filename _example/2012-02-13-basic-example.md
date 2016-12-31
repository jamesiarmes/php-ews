---
title:  "Basic Example"
date:   2012-02-13
updated: 2012-02-13
category: 0.1
tags: folder
---
A lot of people have been asking for examples and documentation for this
library.  I apologize for not having a full set of documentation at this point,
but things have been a little busy.

Below is an example of retrieving all folders nested within the inbox
(non-recursive). A number of people seem to be able to find their way using this
basic example


```php?start_inline=1
$ews = new ExchangeWebServices($host, $username, $password);

// start building the find folder request
$request = new EWSType_FindFolderType();
$request->Traversal = EWSType_FolderQueryTraversalType::SHALLOW;
$request->FolderShape = new EWSType_FolderResponseShapeType();
$request->FolderShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

// configure the view
$request->IndexedPageFolderView = new EWSType_IndexedPageViewType();
$request->IndexedPageFolderView->BasePoint = 'Beginning';
$request->IndexedPageFolderView->Offset = 0;

// set the starting folder as the inbox
$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::INBOX;

// make the actual call
$response = $ews->FindFolder($request);
echo '<pre>'.print_r($response, true).'</pre>';
```
