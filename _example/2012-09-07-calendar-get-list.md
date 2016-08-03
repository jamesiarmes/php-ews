---
title:  "Calendar: Get List (Retrieving Id and ChangeKey)"
date:   2012-09-07
updated: 2015-08-17
category: "0.1"
tags: calendar
---
Exchange uses two parameters Id and ChangeKey to identify items such as calendar
events, contacts and so on. While the Id remains constant and defines the item,
ChangeKey is updated every time an update occurs on the item. This example shows
how to obtain these parameters for calendar events along with other information.

```php?start_inline=1
// Define EWS
$ews = new ExchangeWebServices($host, $username, $password, $version);

// Set init class
$request = new EWSType_FindItemType();
// Use this to search only the items in the parent directory in question or use ::SOFT_DELETED
// to identify "soft deleted" items, i.e. not visible and not in the trash can.
$request->Traversal = EWSType_ItemQueryTraversalType::SHALLOW;
// This identifies the set of properties to return in an item or folder response
$request->ItemShape = new EWSType_ItemResponseShapeType();
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::DEFAULT_PROPERTIES;

// Define the timeframe to load calendar items
$request->CalendarView = new EWSType_CalendarViewType();
$request->CalendarView->StartDate = // an ISO8601 date e.g. 2012-06-12T15:18:34+03:00
$request->CalendarView->EndDate = // an ISO8601 date later than the above

// Only look in the "calendars folder"
$request->ParentFolderIds = new EWSType_NonEmptyArrayOfBaseFolderIdsType();
$request->ParentFolderIds->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType();
$request->ParentFolderIds->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CALENDAR;

// Send request
$response = $ews->FindItem($request);

// Loop through each item if event(s) were found in the timeframe specified
if ($response->ResponseMessages->FindItemResponseMessage->RootFolder->TotalItemsInView > 0){
    $events = $response->ResponseMessages->FindItemResponseMessage->RootFolder->Items->CalendarItem;
    foreach ($events as $event){
        $id = $event->ItemId->Id;
        $change_key = $event->ItemId->ChangeKey;
        $start = $event->Start;
        $end = $event->End;
        $subject = $event->Subject;
        $location = $event->Location;
    }
}
else {
    // No items returned
}
```
