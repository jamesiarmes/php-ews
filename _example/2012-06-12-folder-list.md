---
title:  "Folder: List"
date:   2012-06-12
updated: 2012-09-11
category: "0.1"
tags: folder
---
This example shows how to retrieve a list of folders given its parent folder.
Note that not all folder properties are retrieved. To get folder details
`GetItem()` request must be used instead.

```php?start_inline=1
// NOTE: mind the version of exchange you are connecting to...
$ews = new ExchangeWebServices($host, $username, $password, ExchangeWebServices::VERSION_2007_SP1);

$request = new EWSType_FindFolderType();
$request->Traversal = EWSType_FolderQueryTraversalType::SHALLOW; // use EWSType_FolderQueryTraversalType::DEEP for subfolders too
$request->FolderShape = new EWSType_FolderResponseShapeType();
$request->FolderShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

// configure the view
$request->IndexedPageFolderView = new EWSType_IndexedPageViewType();
$request->IndexedPageFolderView->BasePoint = 'Beginning';
$request->IndexedPageFolderView->Offset = 0;

$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();

// use a distinguished folder name to find folders inside it
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::MESSAGE_FOLDER_ROOT;

// if you know exact folder id, then use this piece of code instead. For example
// $folder_id = 'AAKkADE4N2NkZDRjLWZjY2EtNDNlFy04MjFlLTkzODAyXTMyMGVmOABGAAAAAACO4PBzuy...';
// $request->ParentFolderIds->FolderId = new EWSType_FolderIdType();
// $request->ParentFolderIds->FolderId->Id = $folder_id;

// request
$response = $ews->FindFolder($request);

echo '<pre>'.print_r($response, true).'</pre>';
```
