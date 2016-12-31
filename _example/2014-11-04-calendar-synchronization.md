---
title:  "Calendar: Synchronization"
date:   2014-11-04
updated: 2014-11-04
category: 0.1
tags: calendar
---
More information on the topic can be found here:
<http://msdn.microsoft.com/en-us/library/office/ee693003(v=exchg.80).aspx>

```php?start_inline=1
// Define EWS
$ews = new ExchangeWebServices($host, $username, $password, $version);

// fill with string from last sync
$sync_state = null;

$request = new EWSType_SyncFolderItemsType;
$request->SyncState = $sync_state;
$request->MaxChangesReturned = 512;
$request->ItemShape = new EWSType_ItemResponseShapeType;
$request->ItemShape->BaseShape = EWSType_DefaultShapeNamesType::ALL_PROPERTIES;

$request->SyncFolderId = new EWSType_NonEmptyArrayOfBaseFolderIdsType;
$request->SyncFolderId->DistinguishedFolderId = new EWSType_DistinguishedFolderIdType;
$request->SyncFolderId->DistinguishedFolderId->Id = EWSType_DistinguishedFolderIdNameType::CALENDAR;

$response = $ews->SyncFolderItems($request);

// save this string somewhere
$sync_state = $response->ResponseMessages->SyncFolderItemsResponseMessage->SyncState;

$changes = $response->ResponseMessages->SyncFolderItemsResponseMessage->Changes;

// created events
if(property_exists($changes, 'Create')) {
  foreach($changes->Create as $event) {
    $id = $event->CalendarItem->ItemId->Id;
    $change_key = $event->CalendarItem->ItemId->ChangeKey;
    $start = $event->CalendarItem->Start;
    $end = $event->CalendarItem->End;
    $subject = $event->CalendarItem->Subject;
  }
}

// updated events
if(property_exists($changes, 'Update')) {
  foreach($changes->Update as $event) {
    $id = $event->CalendarItem->ItemId->Id;
    $change_key = $event->CalendarItem->ItemId->ChangeKey;
    $start = $event->CalendarItem->Start;
    $end = $event->CalendarItem->End;
    $subject = $event->CalendarItem->Subject;
  }
}

// deleted events
if(property_exists($changes, 'Delete')) {
  foreach($changes->Delete as $event) {
    $id = $event->CalendarItem->ItemId->Id;
    $change_key = $event->CalendarItem->ItemId->ChangeKey;
    $start = $event->CalendarItem->Start;
    $end = $event->CalendarItem->End;
    $subject = $event->CalendarItem->Subject;
  }
}
```
