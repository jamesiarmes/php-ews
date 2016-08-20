---
title:  "Folder: Create"
date:   2012-12-18
updated: 2012-12-18
category: "0.1"
tags: folder
---
Use the following to create a folder. You can make it a subfolder of a
Distinguished Folder by uncommenting the comments and commenting the line above
it.

```php?start_inline=1
$request = new EWSType_CreateFolderType();
$request->Folders = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->Folders->Folder = new EWSType_FolderType();
$request->Folders->Folder->DisplayName = 'TestFolder';
$request->Folders->Folder->FolderClass = 'IPF.Note';
$request->ParentFolderId = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderId->FolderId->Id = 'AAMkAGE0O..../MSAAA=';
//$request->ParentFolderId->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
//$request->ParentFolderId->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::INBOX;

$response = $ews->CreateFolder($request);
print_r($response);
```
