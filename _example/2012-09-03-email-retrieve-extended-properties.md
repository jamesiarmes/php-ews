---
title:  "Email: Retrieve Extended Properties"
date:   2012-09-03
updated: 2015-08-19
category: 0.1
tags: email, mapi
---
To view or manipulate certain message flags such as replied/forwarded/draft, you
will need to work with extended properties.

The following links are helpful in getting the PropertyTag values:

* <http://msdn.microsoft.com/en-us/library/cc815517(v=office.12)>
* <http://fossies.org/linux/libpst/xml/MAPI_definitions.pdf>
* <http://download.microsoft.com/download/5/D/D/5DD33FDF-91F5-496D-9884-0A0B0EE698BB/[MS-OXOMSG].pdf>

The example below checks a number of standard fields, as well as
PR_LAST_VERB_EXECUTED/PidTagLastVerbExecuted (Tag 0x1081 -
<http://msdn.microsoft.com/en-us/library/cc841968(v=office.12)>) from the Inbox.

```php?start_inline=1
// get list of all items in inbox
$request = new EWSType_FindItemType();
$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

$request->ItemShape->AdditionalProperties = new EWSType_NonEmptyArrayOfPathsToElementType();
// set fields we want to request
$subject = new EWSType_PathToUnindexedFieldType();
$subject->FieldURI = 'item:Subject';
$date = new EWSType_PathToUnindexedFieldType();
$date->FieldURI = 'item:DateTimeReceived';
$message_id = new EWSType_PathToUnindexedFieldType();
$message_id->FieldURI = 'message:InternetMessageId';
$is_read = new EWSType_PathToUnindexedFieldType();
$is_read->FieldURI = 'message:IsRead';
$request->ItemShape->AdditionalProperties->FieldURI = array($subject, $date, $message_id, $is_read);

// http://social.technet.microsoft.com/Forums/en-US/exchangesvrdevelopment/thread/0cf7d9d6-c383-433f-a373-c32db98c89ca
// http://www.add-in-express.com/forum/read.php?FID=11&TID=6952
$status = new EWSType_PathToExtendedFieldType();
$status->PropertyTag = "0x1081";
$status->PropertyType = EWSType_MapiPropertyTypeType::INTEGER;
$request->ItemShape->AdditionalProperties->ExtendedFieldURI = array($status);

$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;

$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::INBOX;

// if you know exact folder id, then use this piece of code instead. For example
// $folder_id = 'AAKkADE4N2NkZDRjLWZjY2EtNDNlFy04MjFlLTkzODAyXTMyMGVmOABGAAAAAACO4PBzuy...';
//        $request->ParentFolderIds->FolderId = new EWSType_FolderIdType();
//        $request->ParentFolderIds->FolderId->Id = $folder_id;
// sort order
$request->SortOrder = new EWSType_NonEmptyArrayOfFieldOrdersType();
$request->SortOrder->FieldOrder = array();

// sorts mails so that oldest appear first
// more field uri definitions can be found from types.xsd (look for UnindexedFieldURIType)
$order = new EWSType_FieldOrderType();
$order->FieldURI->FieldURI = 'item:DateTimeReceived';
$order->Order = 'Ascending';
$request->SortOrder->FieldOrder[] = $order;

$ews->FindItem($request);
```
