---
title:  "Email: List with Page Limit"
date:   2013-11-27
updated: 2015-04-07
category: 0.1
tags: email
---
Example to show how to get email list with page and limit.

Exchange versions are: ExchangeWebServices::VERSION_2007(_SP1, _SP2, _SP3) or
ExchangeWebServices::VERSION_2010(_SP1, _SP2).

```php?start_inline=1
$ews = new ExchangeWebServices($host, $username, $password, $versionOfExchange);

$request = new EWSType_FindItemType();
$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::DEFAULT_PROPERTIES;
	
$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;
	
// Limits the number of items retrieved
$request->IndexedPageItemView = new EWSType_IndexedPageViewType();
$request->IndexedPageItemView->BasePoint = "Beginning";
$request->IndexedPageItemView->Offset = 0; // Item number you want to start at
$request->IndexedPageItemView->MaxEntriesReturned = 1000; // Numer of items to return in total

$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::INBOX;

// sort order
$request->SortOrder = new EWSType_NonEmptyArrayOfFieldOrdersType();
$request->SortOrder->FieldOrder = array();
$order = new EWSType_FieldOrderType();
	
// sorts mails so that oldest appear first
// more field uri definitions can be found from types.xsd (look for UnindexedFieldURIType)
$order->FieldURI = '';
@$order->FieldURI->FieldURI = 'item:DateTimeReceived'; // @ symbol stops the creating default object from empty value error
$order->Order = 'Ascending'; 
$request->SortOrder->FieldOrder[] = $order;

$response = $ews->FindItem($request);

//For Debugging
//die("<pre>" . print_r($response, 1) . "</pre>");

if(!isset($response->ResponseMessages->FindItemResponseMessage->RootFolder))
{
	$responseMessage = $response->ResponseMessages->FindItemResponseMessage;
	die("<h3 style='text-align: center;'>Email</h3>" . $responseMessage->MessageText . "<br /><br />" . $responseMessage->ResponseCode);
}
else
	$totalItems = $response->ResponseMessages->FindItemResponseMessage->RootFolder->TotalItemsInView;

$emails = array();

$rootFolder = $response->ResponseMessages->FindItemResponseMessage->RootFolder;
$messages = $rootFolder->Items->Message;
$lastItemInRange = $rootFolder->IncludesLastItemInRange;
$i = 1; // Counter to multply the max etries retrurned, to create the offset value

while($lastItemInRange != 1) // While the last item in the inbox is strill not in range retrieve the next 1000 messages
{
	$limit = $request->IndexedPageItemView->MaxEntriesReturned;
	$request->IndexedPageItemView->Offset = $limit * $i;
	
	$response = $ews->FindItem($request);
	
	$rootFolder = $response->ResponseMessages->FindItemResponseMessage->RootFolder;
	$messages = array_merge($messages, $rootFolder->Items->Message);
	$lastItemInRange = $rootFolder->IncludesLastItemInRange;
	
	$i++;
}
```
