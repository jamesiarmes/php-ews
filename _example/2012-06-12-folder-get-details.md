---
title:  "Folder: Get Details"
date:   2012-06-12
updated: 2012-06-12
category: 0.1
tags: folder
---
```php?start_inline=1
// NOTE: mind the version of exchange you are connecting to...
$ews = new ExchangeWebServices($host, $username, $password, ExchangeWebServices::VERSION_2007_SP1);

$request = new EWSType_GetFolderType();
$request->FolderShape = new EWSType_FolderResponseShapeType();
// to get a shorter list of properties use EWSType_DefaultShapeNamesType::DEFAULT_PROPERTIES
$request->FolderShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

// set the starting folder as the inbox
$request->FolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();

// get details on public folder. by the same token you may get details on an inbox or contacts folder, for example
$request->FolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->FolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::PUBLIC_FOLDERS_ROOT;

// if you know exact folder id, then use this piece of code instead. For example
// $folder_id = 'AAKkADE4N2NkZDRjLWZjY2EtNDNlFy04MjFlLTkzODAyXTMyMGVmOABGAAAAAACO4PBzuy...';
// $request->FolderIds->FolderId = new EWSType_FolderIdType();
// $request->FolderIds->FolderId->Id = $folder_id;

// request
$response = $ews->GetFolder($request);

echo '<pre>'.print_r($response, true).'</pre>';
```
